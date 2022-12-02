<?php

namespace App\Http\Controllers;

use App\Models\DataKelurahan;
use App\Models\Kelurahan;
use App\Models\Koord_desa;
use App\Models\Koord_kecamatan;
use App\Models\Relawan;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function allData(Request $request){
        $jumlahuser = User::count();
        $jumlahdesa = Koord_desa::count();
        $jumlahkecamatan = Koord_kecamatan::count();
        $jumlahrelawan = Relawan::count();

        if($request->has('search')){
            $desa = Koord_desa::where('nama','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(30);
        }
        else{
            $desa = Koord_desa::with('data_relawan',
            'Datakelurahans',
            'Koord_kecamatans')
                ->paginate(30);
        }

        $kelurahan = DataKelurahan::withCount('relawansData')->get();
        $kecamatan = Koord_kecamatan::withCount('relawans')->get();
        $user = User::withCount('datarelawans')->get();
        return view('home' ,compact('jumlahuser','jumlahdesa','jumlahkecamatan','jumlahrelawan','desa','user','kecamatan','kelurahan'));
    }

    public function dataRelawan(Request $request){
        if($request->has('search')){
            $relawan = Relawan::where('user_id','LIKE','%' .$request->search. '%')->paginate(200);
        }
        else{
            $relawan = Relawan::with('user','Koord_desas','Datakelurahans')->paginate(200);
        }
        return view('data-relawan', compact('relawan'));
    }


    public function getDataRelawan($id){
        $data = relawan::find($id);
        $desa = Koord_desa::all();
        $datakelurahan = DataKelurahan::all();
        return view('data-relawanUpdate', compact('data'),compact('desa'),compact('datakelurahan'));
    }

    public function udpateDR($id, Request $request){
        $relawan = relawan::find($id);
        $relawan->update($request->all());
        return redirect('/data-relawan')->with('sukses','data berhasill di update');
    }

    public function datakelurahan(Request $request){
        if($request->has('search')){
            $kelurahan = DataKelurahan::where('kelurahan','LIKE','%' .$request->search. '%')->withCount('relawansData')->paginate(50);
        }
        else{
            $kelurahan = DataKelurahan::with('relawansData')->paginate(50);
        }
        return view('report.kelurahan',compact('kelurahan'));
    }
    
    public function datakecamatan(Request $request){
        if($request->has('search')){
            $kecamatan = Koord_kecamatan::where('nama','LIKE','%' .$request->search. '%')->withCount('relawans')->paginate(50);
        }
        else{
            $kecamatan = Koord_kecamatan::with('relawans','desas')->paginate(50);
        }
        return view('report.kecamatan',compact('kecamatan'));
    }

    public function kecamatan(Request $request){
        if($request->has('search')){
            $kecamatan = Koord_kecamatan::where('deskripsi','LIKE','%' .$request->search. '%')->withCount('relawans')->paginate(50);
        }
        else{
            $kecamatan = Koord_kecamatan::with('relawans')->paginate(50);
        }
        return view('report.kecamatan',compact('kecamatan'));
    }

    public function reportDesa(Request $request){
        if($request->has('search')){
            $desa = Koord_desa::where('nama','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(50);
        }
        else{
            $desa = Koord_desa::with('data_relawan','Datakelurahans')->paginate(50);
        }
        return view('report.desa',compact('desa'));
    }

    public function Desa(Request $request){
        if($request->has('search')){
            $desa = Koord_desa::where('deskripsi','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(50);
        }
        else{
            $desa = Koord_desa::with('data_relawan','Datakelurahans')->paginate(50);
        }
        return view('report.desa',compact('desa'));
    }

    public function datauser(Request $request){
        if($request->has('search')){
            $user = User::where('name','LIKE','%' .$request->search. '%')->withCount('datarelawans')->paginate(50);
        }
        else{
            $user = User::with('datarelawans')->paginate(50);
        }
        return view('report.user',compact('user'));
    }
}
