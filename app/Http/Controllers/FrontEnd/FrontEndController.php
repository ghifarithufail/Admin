<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\FrontEnd\Artikel;
use App\Models\FrontEnd\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    // Index page
    public function index()
    {
        $artikel = DB::table('artikel')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('front.home', compact('artikel'));
    }

    //Detail Artikel
    public function detail($judul)
    {
        $artikel = Artikel::where('judul', $judul)->first();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel
        ]);
    }

    //TentangSaya Page
    public function tentang()
    {
        return view('front.layouts.tentangSaya');
    }

    //Contact Page
    public function contact()
    {
        return view('front.layouts.contact');
    }

    //Berita Page
    public function berita()
    {
        $artikel = DB::table('artikel')->orderBy('created_at', 'DESC')->paginate(8);
        // $artikel = Artikel::paginate(4);
        // return view('front.beritadanO', [
        //     'artikel' => $artikel
        // ]);
        return view('front.beritadanO', compact('artikel'));
    }

    //Galeri Page
    public function galerii()
    {
        $galeri = Galeri::paginate(12);
        return view('front.galerihome', [
            'galeri' => $galeri
        ]);
    }
}
