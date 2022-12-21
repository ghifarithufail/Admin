<?php

namespace App\Http\Controllers;

use App\Models\DataKelurahan;
use App\Models\Koord_desa;
use App\Models\Koord_kecamatan;
use App\Models\Relawan;
use App\Models\User;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    // ---------------------------- KORCAM ------------------------------ //

    public function korcam(Request $request){
        if($request->has('search')){
            $korcam = Koord_desa::where('deskripsi','LIKE','%' .$request->search. '%')->withCount('data_relawan')->paginate(20);
        }
        else{
            $korcam = Koord_desa::with('data_relawan','Datakelurahans')->paginate(20);
        }
        return view('pdf.korcam.index',compact('korcam'));
    }

    public function viewPDF(Request $request){
        if($request->has('search')){
            $korcam = Koord_desa::where('Koord_kecamatan_id','LIKE','%' .$request->search. '%')->withCount('data_relawan')->get();
        }
        else{
            $korcam = Koord_desa::with('data_relawan','Datakelurahans','Koord_kecamatans')->get();
        }
        return view('pdf.korcam.pdf', compact('korcam'));
    }

    public function kordes(Request $request){
        if($request->has('search')){
            $desa = Relawan::where('Koord_desa_id','LIKE','%' .$request->search. '%')->paginate(20);
        }
        else{
            $desa = Relawan::with('user','Koord_desas','Datakelurahans')->paginate(20);
        }
        return view('pdf.kordes.index', compact('desa'));
    }

    public function PDFDesa(Request $request){
        if($request->has('search')){
            $desa = Relawan::where('Koord_desa_id','LIKE','%' .$request->search. '%')->get();
        }
        else{
            $desa = Relawan::with('user','Koord_desas','Datakelurahans','kecamatans')->get();
        }
        return view('pdf.kordes.pdf', compact('desa'));
    }

    public function kelurahan(Request $request){
        if($request->has('search')){
            $kelurahan = DataKelurahan::where('kelurahan','LIKE','%' .$request->search. '%')->withCount('relawansData')->paginate(20);
        }
        else{
            $kelurahan = DataKelurahan::with('relawansData')->paginate(20);
        }
        return view('pdf.kelurahan.index',compact('kelurahan'));
    }

    public function PDFkelurahan(Request $request){
        if($request->has('search')){
            $kelurahan = DataKelurahan::where('kelurahan','LIKE','%' .$request->search. '%')->withCount('relawansData')->get();
        }
        else{
            $kelurahan = DataKelurahan::with('relawansData')->get();
        }
        return view('pdf.kelurahan.pdf',compact('kelurahan'));
    }

    public function user(Request $request){
        if($request->has('search')){
            $user = User::where('name','LIKE','%' .$request->search. '%')->withCount('datarelawans')->paginate(20);
        }
        else{
            $user = User::with('datarelawans')->paginate(20);
        }
        return view('pdf.user.index',compact('user'));
    }

    public function PDFUser(Request $request){
        if($request->has('search')){
            $user = User::where('name','LIKE','%' .$request->search. '%')->withCount('datarelawans')->get();
        }
        else{
            $user = User::with('datarelawans')->get();
        }
        return view('pdf.user.pdf',compact('user'));
    }

    public function relawan(Request $request){
        if($request->has('search')){
            $relawan = Relawan::where('nama','LIKE','%' .$request->search. '%')->paginate(20);
        }
        else{
            $relawan = Relawan::with('user','Koord_desas','Datakelurahans')->paginate(20);
        }
        return view('pdf.relawan.index', compact('relawan'));
    }

    public function PDFRelawan(Request $request){
        if($request->has('search')){
            $relawan = Relawan::where('user_id','LIKE','%' .$request->search. '%')->get();
        }
        else{
            $relawan = Relawan::with('user','Koord_desas','Datakelurahans')->get();
        }
        return view('pdf.relawan.pdf',compact('relawan'));
    }
}

