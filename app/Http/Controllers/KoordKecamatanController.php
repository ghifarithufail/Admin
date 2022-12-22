<?php

namespace App\Http\Controllers;

use App\Models\Koord_kecamatan;
use Illuminate\Http\Request;
use PDF;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KoordKecamatanController extends Controller
{
    public function koord_kecamatan(Request $request){
        if($request->has('search')){
            $koord_kecamatan = Koord_kecamatan::where('nama','LIKE','%' .$request->search. '%')-> paginate(30);
        }
        else{
            $koord_kecamatan = Koord_kecamatan::paginate(30);
        }
        return view('koord_kecamatan.index', compact('koord_kecamatan'));
    }

    public function cari(Request $request){
        if($request->has('search')){
            $koord_kecamatan = Koord_kecamatan::where('deskripsi','LIKE','%' .$request->search. '%')-> paginate(30);
        }
        else{
            $koord_kecamatan = Koord_kecamatan::paginate(30);
        }
        return view('koord_kecamatan.index', compact('koord_kecamatan'));
    }

    public function postKK(){
        return view('koord_kecamatan.create');
    }

    public function kkStore(Request $request){
        $this->validate($request,[
            'nama' => 'required|unique:koord_kecamatans,nama',
            'deskripsi' => 'required',
            'dapil' => 'required',
        ]);

        $auto =['table'=>'koord_kecamatans','length'=>8,'prefix'=>'KC-'];
        $id = IdGenerator::generate($auto);
        Koord_kecamatan::create([
            'id' => $id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'dapil' => $request->dapil
        ]);
        return Redirect('/koordinator-kecamatan')->with('sukses','data berhasill ditambahkan');;
    }

    public function getKoord_kecamatan($id){
        $dataKK = Koord_kecamatan::find($id);
        return view('koord_kecamatan.update', compact('dataKK'));
    }

    public function udpateKK($id, Request $request){
        $Koord_kecamatan = Koord_kecamatan::find($id);
        $Koord_kecamatan->update($request->all());
        return redirect('/koordinator-kecamatan')->with('sukses','data berhasill di update');
    }

    public function deleteKK($id){
        $Koord_kecamatan = Koord_kecamatan::find($id);
        $Koord_kecamatan->delete();
        return redirect('/koordinator-kecamatan');
    }

    public function viewPDF(Request $request){
        if($request->has('search')){
            $koord_kecamatan = Koord_kecamatan::where('nama','LIKE','%' .$request->search. '%')-> paginate(50000);
        }
        else{
            $koord_kecamatan = Koord_kecamatan::paginate(50000);
        }
        return view('Koord_kecamatan.pdf', compact('koord_kecamatan'));
    }
}
