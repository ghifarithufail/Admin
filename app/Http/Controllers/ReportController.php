<?php

namespace App\Http\Controllers;

use App\Models\DataKelurahan;
use App\Models\Kelurahan;
use App\Models\Koord_desa;
use App\Models\Koord_kecamatan;
use App\Models\Relawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ReportController extends Controller
{
    public function allData(Request $request){
        $jumlahuser = User::count();
        $jumlahdesa = Koord_desa::count();
        $jumlahkecamatan = Koord_kecamatan::count();
        $jumlahrelawan = Relawan::count();

        $total = Relawan::select(DB::raw("COUNT(*) as total"))
        ->whereYear("created_at",date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('total');

        if($request->has('search')){
            $desa = Koord_desa::where('nama','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(15);
        }
        else{
            $desa = Koord_desa::with('data_relawan',
            'Datakelurahans',
            'Koord_kecamatans')
                ->paginate(15);
        }

        $kelurahan = DataKelurahan::withCount('relawansData')->get();
        $kecamatan = Koord_kecamatan::withCount('relawans')->get();
        $user = User::withCount('datarelawans')->get();
        return view('home' ,compact('jumlahuser','jumlahdesa','jumlahkecamatan','jumlahrelawan','desa','user','kecamatan','kelurahan',
                'total'));
    }

    // ------------------------------------- DATA RELAWAN REPORT ------------------------------------- //

    public function dataRelawan(Request $request){
        if($request->has('search')){
            $relawan = Relawan::where('user_id','LIKE','%' .$request->search. '%')->paginate(50);
        }
        else{
            $relawan = Relawan::with('user','Koord_desas','Datakelurahans')->paginate(50);
        }
        return view('data_relawan.index', compact('relawan'));
    }

    public function dataRelawans(Request $request){
        if($request->has('search')){
            $relawan = Relawan::where('nama','LIKE','%' .$request->search. '%')->paginate(50);
        }
        else{
            $relawan = Relawan::with('user','Koord_desas','Datakelurahans')->paginate(50);
        }
        return view('data_relawan.index', compact('relawan'));
    }

    public function viewPDF(){
        $relawan = Relawan::all();
        return view('data_relawan.pdf', compact('relawan'));
    }

    public function getDataRelawan($id){
        $data = relawan::find($id);
        $desa = Koord_desa::all();
        $datakelurahan = DataKelurahan::all();
        return view('data_relawan.update', compact('data','desa','datakelurahan'));
    }

    public function udpateDR($id, Request $request){
        $relawan = relawan::find($id);
        $relawan->update($request->all());
        return redirect('/data-relawan')->with('sukses','data berhasill di update');
    }

    // ------------------------------------- DATA KELURAHAN REPORT ------------------------------------- //

    public function datakelurahan(Request $request){
        if($request->has('search')){
            $kelurahan = DataKelurahan::where('kelurahan','LIKE','%' .$request->search. '%')->withCount('relawansData')->paginate(65);
        }
        else{
            $kelurahan = DataKelurahan::with('relawansData')->paginate(65);
        }
        return view('report.kelurahan.index',compact('kelurahan'));
    }

    public function viewPDFKelurahan(){
        $kelurahan = DataKelurahan::with('relawansData')->get();
        return view('report.kelurahan.pdf', compact('kelurahan'));
    }
    
    // ------------------------------------- DATA KECAMATAN REPORT ------------------------------------- //

    public function datakecamatan(Request $request){
        if($request->has('search')){
            $kecamatan = Koord_kecamatan::where('nama','LIKE','%' .$request->search. '%')->withCount('relawans','desas')->paginate(20);
        }
        else{
            $kecamatan = Koord_kecamatan::with('relawans','desas')->paginate(20);
        }
        return view('report.kecamatan.index',compact('kecamatan'));
    }

    public function kecamatan(Request $request){
        if($request->has('search')){
            $kecamatan = Koord_kecamatan::where('deskripsi','LIKE','%' .$request->search. '%')->withCount('relawans')->paginate(20);
        }
        else{
            $kecamatan = Koord_kecamatan::with('relawans')->paginate(20);
        }
        return view('report.kecamatan.index',compact('kecamatan'));
    }

    public function viewPDFKecamatan(){
        $kecamatan = Koord_kecamatan::with('relawans')->get();
        return view('report.kecamatan.pdf', compact('kecamatan'));
    }

    // ------------------------------------- DATA DESA REPORT ------------------------------------- //

    public function reportDesa(Request $request){
        if($request->has('search')){
            $desa = Koord_desa::where('nama','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(20);
        }
        else{
            $desa = Koord_desa::with('data_relawan','Datakelurahans','Koord_kecamatans')->paginate(20);
        }
        return view('report.desa.index',compact('desa'));
    }

    public function Desa(Request $request){
        if($request->has('search')){
            $desa = Koord_desa::where('deskripsi','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(20);
        }
        else{
            $desa = Koord_desa::with('data_relawan','Datakelurahans','Koord_kecamatans')->paginate(20);
        }
        return view('report.desa.index',compact('desa'));
    }

    public function viewPDFDesa(){
        $desa = Koord_desa::with('data_relawan','Datakelurahans','Koord_kecamatans')->get();
        return view('report.desa.pdf', compact('desa'));
    }

    // ------------------------------------- DATA USER REPORT ------------------------------------- //

    public function datauser(Request $request){
        if($request->has('search')){
            $user = User::where('name','LIKE','%' .$request->search. '%')->withCount('datarelawans')->paginate(20);
        }
        else{
            $user = User::with('datarelawans')->paginate(20);
        }
        return view('report.user',compact('user'));
    }
}
