<?php

namespace App\Http\Controllers;

use App\Models\DataKelurahan;
use App\Models\Kelurahan;
use App\Models\Koord_desa;
use App\Models\Koord_kecamatan;
use Illuminate\Http\Request;

class KoordDesaController extends Controller
{
    public function koord_desa(Request $request){
        if($request->has('search')){
            $Koord_desa = Koord_desa::where('nama','LIKE','%' .$request->search. '%')-> paginate(30);
        }
        else{
            $Koord_desa = Koord_desa::paginate(30);
        }
        return view('koord_desa.index', compact('Koord_desa'));
    }

    public function postKD(){
        $dataKoord_kecamatan = Koord_kecamatan::all();
        $dataKelurahan = DataKelurahan::all();
        return view('koord_desa.create', compact('dataKoord_kecamatan','dataKelurahan'));
    }

    public function kDStore(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'Koord_kecamatan_id' => 'required',
            'dapil' => 'required',
            'kelurahan_id' => 'required',
        ]);
        $Koord_desa = Koord_desa::create($request->all());
        $Koord_desa->save();
        return Redirect()->route('koord_desa')->with('sukses','data berhasill ditambahkan');;
    }

    public function getKoord_desa($id){
        $dataKD = Koord_desa::find($id);
        $dataKelurahan = DataKelurahan::all();
        $dataKoord_kecamatan = Koord_kecamatan::all();
        return view('koord_desa.update', compact('dataKD','dataKoord_kecamatan','dataKelurahan'));
    }

    public function updateKD($id, Request $request){
        $Koord_desa = Koord_desa::find($id);
        $Koord_desa->update($request->all());
        return redirect()->route('koord_desa')->with('sukses','data berhasill di update');
    }

    public function deleteKD($id){
        $Koord_desa = Koord_desa::find($id);
        $Koord_desa->delete();
        return redirect()-> route('koord_desa');
    }
}
