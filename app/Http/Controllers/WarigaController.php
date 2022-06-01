<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Riwayatwariga;
use App\Models\Caturbekel;
use App\Models\Kalender;
use App\Models\Pangarasan;
use App\Models\Pancasudha;
use App\Models\Berpergian;
use App\Models\Sandangpangan;
use App\Models\Dauh;
use Illuminate\Http\Request;

class WarigaController extends Controller
{
    public function index()
    {
        $iduser = Auth::id();
        $warigas = Riwayatwariga::where('user_id','=',$iduser)->latest()->paginate(5);
        return view('wariga.index', compact('warigas'));
    }

    public function create()
    {
        return view('wariga.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'nama'     => 'required',
            'tanggal_lahir'     => 'required',
            'tanggal_pilihan'     => 'required'
        ]);
        
        $iduser = Auth::id();

        $tanggal_lahir = Kalender::where('tanggal','=',$request->tanggal_lahir)->first();
        if($tanggal_lahir == null){
            return redirect()->route('warigabelog.create')->with(['error' => 'Record tanggal tidak tersedia!']);
        }
        $tanggal_pilihan = Kalender::where('tanggal','=',$request->tanggal_pilihan)->first();
        if($tanggal_pilihan == null){
            return redirect()->route('warigabelog.create')->with(['error' => 'Record tanggal tidak tersedia!']);
        }
        $penentuan = ($tanggal_lahir->neptu + $tanggal_pilihan->neptu) % 4;

        $saptawara = $tanggal_lahir->saptawara;

        $dauh = Dauh::where('saptawara', '=', $saptawara)->first();
        $dauhid = $dauh->id;
        $hari_baik = Caturbekel::where('id', '=', $penentuan)->first();

        //cari pangarasan 
        $pangarasan = $tanggal_lahir->pangarasan;
        $pangarasancek = Pangarasan::where('pangarasan','=',$pangarasan)->first();
        $pangarasanid = $pangarasancek->id;

        //cari pancasudha 
        $pancasudha = $tanggal_lahir->pancasadha;
        $pancasudhacek = Pancasudha::where('pancasudha','=',$pancasudha)->first();
        $pancasudhaid = $pancasudhacek->id;

        //cari bepergian 
        $lahirberpergian = $tanggal_lahir->saptawara;
        $pilihberpergian = $tanggal_pilihan->saptawara;
        $berpergiancek = Berpergian::where('saptawara','=',$lahirberpergian)->where('haripilihan','=',$pilihberpergian)->first();
        $berpergianid = $berpergiancek->id;

        //cari sandang pangan
        $sandangpanganid = $tanggal_lahir->neptu;
        $sandangpangancek = Sandangpangan::where('urip','=',$sandangpanganid)->get();

        
        Riwayatwariga::create([
            'user_id' => $iduser,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tanggal_pilihan' => $request->tanggal_pilihan,
            'caturbekel_id' => $penentuan,
            'dauh_id' => $dauhid,
            'pangarasan_id' => $pangarasanid,
            'pancasudha_id' => $pancasudhaid,
            'berpergian_id' => $berpergianid,
            'sandangpangan_id' => $sandangpanganid
        ]);



        return view('wariga.result', compact('hari_baik' ,'dauh', 'pangarasancek', 'pancasudhacek', 'berpergiancek' ,'sandangpangancek'));

        // dd($hari_baik->bagian);
    }
    
    public function result($id)
    {
        $idriwayat = Riwayatwariga::where('id', '=', $id)->first();
        $caturbekel = $idriwayat->caturbekel_id;
        $dauhid = $idriwayat->dauh_id;
        $pangarasanid = $idriwayat->pangarasan_id;
        $pancasudhaid = $idriwayat->pancasudha_id;
        $berpergianid = $idriwayat->berpergian_id;
        $sandangpanganid = $idriwayat->sandangpangan_id;
        $dauh = Dauh::where('id', '=', $dauhid)->first();
        $hari_baik = Caturbekel::where('id', '=', $caturbekel)->first();
        $pangarasancek = Pangarasan::where('id', '=', $pangarasanid)->first();
        $pancasudhacek = Pancasudha::where('id', '=', $pancasudhaid)->first();
        $berpergiancek = Berpergian::where('id', '=', $berpergianid)->first();
        $sandangpangancek = Sandangpangan::where('urip', '=', $sandangpanganid)->get();
        return view('wariga.result', compact('hari_baik', 'dauh', 'pangarasancek', 'pancasudhacek', 'berpergiancek', 'sandangpangancek'));
    }

    public function delete($id)
    { 
        $data = Riwayatwariga::find($id);
        
        $data->delete();
        return redirect()->route('warigabelog')->with('success', 'Berhasil Menghapus Riwayat');
    }
    public function cetak()
    { 
        $iduser = Auth::id();
        $warigas = Riwayatwariga::where('user_id','=',$iduser)->get();
        return view('wariga.cetak', compact('warigas'));
    }
}
