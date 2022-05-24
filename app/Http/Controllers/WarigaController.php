<?php

namespace App\Http\Controllers;

use App\Models\Riwayatwariga;
use App\Models\Caturbekel;
use App\Models\Kalender;
use App\Models\Dauh;
use Illuminate\Http\Request;

class WarigaController extends Controller
{
    public function index()
    {
        $warigas = Riwayatwariga::latest()->paginate(5);
        return view('wariga.index', compact('warigas'));
    }

    public function create()
    {
        return view('wariga.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'tanggal_lahir'     => 'required',
            'tanggal_pilihan'     => 'required'
        ]);
        

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
        
        Riwayatwariga::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tanggal_pilihan' => $request->tanggal_pilihan,
            'caturbekel_id' => $penentuan,
            'dauh_id' => $dauhid
        ]);



        return view('wariga.result', compact('hari_baik' ,'dauh'));

        // dd($hari_baik->bagian);
    }
    
    public function result($id)
    {
        $idriwayat = Riwayatwariga::where('id', '=', $id)->first();
        $caturbekel = $idriwayat->caturbekel_id;
        $dauhid = $idriwayat->dauh_id;
        $dauh = Dauh::where('id', '=', $dauhid)->first();
        $hari_baik = Caturbekel::where('id', '=', $caturbekel)->first();
        return view('wariga.result', compact('hari_baik', 'dauh'));
    }

    public function delete($id)
    {
        $data = Riwayatwariga::find($id);
        
        $data->delete();
        return redirect()->route('warigabelog')->with('success', 'Berhasil Menghapus Riwayat');
    }
}
