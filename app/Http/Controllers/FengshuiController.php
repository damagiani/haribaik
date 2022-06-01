<?php

namespace App\Http\Controllers;
use App\Models\Riwayatfengshui;
use App\Models\Fengshui;
use App\Models\Shio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FengshuiController extends Controller
{
    public function index()
    {
        $iduser = Auth::id();
        $fengshuis = Riwayatfengshui::where('user_id','=',$iduser)->latest()->paginate(5);
        return view('fengshui.index', compact('fengshuis'));
    }

    public function create()
    {
        return view('fengshui.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jeniskelamin'     => 'required',
            'tahunlahir'     => 'required'
        ]);
        
        $array = str_split(strval($request->tahunlahir));
        if((intval($array[0] + $array[1])) == 2){
            $perhitungan = 20;
        }elseif((intval($array[0] + $array[1])) == 10){
            $perhitungan = 19;
        }

        $hasil1 = strval(intval($array[2]) + intval($array[3]));
        $cekjumlah = strlen($hasil1);
        if($cekjumlah == 2) {
            $array2 = str_split($hasil1);
            $hasil2 = intval($array2[0]) + intval($array2[1]);
        }else{
            $hasil2 = intval($hasil1);
        }

        if($request->jeniskelamin == 'Laki-Laki'){
            if($perhitungan == 19){
                $kua = 10 - $hasil2;
            }else{
                $kua = 9 - $hasil2;
            }

            if($kua == 5){
                $kua = 2;
            }
        
        }else{
            if($perhitungan == 19){
                $kua = 5 + $hasil2;
            }else{
                $kua = 6 + $hasil2;
            }
            $stringkua = strval($kua);
            $panjang = strlen($stringkua);

            if($panjang == 2) {
                $bagikua = str_split(strval($kua));
                $kua = intval($bagikua[0]) + intval($bagikua[1]);
                
            }
            if($kua == 5){
               $kua = 8;
            }
        }
        // dd($kua);

        $iduser = Auth::id();

        $shiooo = Shio::where('tahun', '=', $request->tahunlahir)->first();
        $shioid = $shiooo->id;

        Riwayatfengshui::create([
            'user_id' => $iduser,
            'jeniskelamin' => $request->jeniskelamin,
            'tahun_lahir' => $request->tahunlahir,
            'kua_id' => $kua,
            'shio_id' => $shioid,
        ]);

        $fengshuiii = Fengshui::where('angka_kua', '=', $kua)->first();
        return view('fengshui.result', compact('fengshuiii', 'shiooo'));
        
    }
    public function result($id)
    {
        $idriwayat = Riwayatfengshui::where('id', '=', $id)->first();
        $kuaid = $idriwayat->kua_id;
        $shioid = $idriwayat->shio_id;
        $fengshuiii = Fengshui::where('id', '=', $kuaid)->first();
        $shiooo = Shio::where('id', '=', $shioid)->first();
        return view('fengshui.result', compact('fengshuiii', 'shiooo'));
    }

    public function delete($id)
    { 
        $data = Riwayatfengshui::find($id);
        $data->delete();
        return redirect()->route('fengshui')->with('success', 'Berhasil Menghapus Riwayat');
    }
}
