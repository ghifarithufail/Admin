<?php

namespace App\Http\Controllers;

use App\Models\DataKelurahan;
use App\Models\Kelurahan;
use App\Models\RaihanSuara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaihanSuaraController extends Controller
{
    public function raihan_suara(Request $request){
        if($request->has('search')){
            $raihan_suara = RaihanSuara::where('kelurahan_id','LIKE','%' .$request->search. '%')->paginate(20);
        }
        else{
            $raihan_suara = RaihanSuara::with('kelurahans','user')->paginate(20);
        }
        return view('raihan_suara.index', compact('raihan_suara'));
    }

    public function postRH(){
        $dataKelurahan = DataKelurahan::all();
        return view('raihan_suara.create', compact('dataKelurahan'));
    }

    public function RHStore(Request $request){
        $this->validate($request,[
            'kelurahan_id' => 'required',
            'jumlah_suara' => 'required',
        ]);
        $raihan_suara = new RaihanSuara();
        $user = User::all();

        $raihan_suara->user_id = Auth::user()->id;
        $raihan_suara->kelurahan_id  = $request->kelurahan_id;
        $raihan_suara->jumlah_suara  = $request->jumlah_suara;
        
        $raihan_suara->save();
        return Redirect()->route('raihan_suara')->with('sukses','data berhasill ditambahkan');;
    }
}
