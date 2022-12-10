<?php

namespace App\Http\Controllers;

use App\Models\Koord_kecamatan;
use Illuminate\Http\Request;
use PDF;

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
            'desa' => 'required',
            'dapil' => 'required',
        ]);
        $koord_kecamatan = Koord_kecamatan::create($request->all());
        $koord_kecamatan->save();
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

    public function viewPDF(){
        $Koord_kecamatan = Koord_kecamatan::all();

        $pdf = PDF::loadView('Koord_kecamatan.pdf', ['Koord_kecamatan'=>$Koord_kecamatan])
        ->setPaper('a4','landscape');
        return $pdf->download('data Koord_kecamatan.pdf');
    }
}
