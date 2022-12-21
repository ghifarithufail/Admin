<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\FrontEnd\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AspirasiController extends Controller
{
    public function aspirasi()
    {
        return view('back.aspirasi.indexAspirasi');
    }

    public function aspirasii()
    {
        return view('front.layouts.aspirasi');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aspirasi = Aspirasi::all();
        return view('front.layouts.aspirasi', compact('aspirasi'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024',
        ]);

        $dataAS = $request->all();
        $dataAS['name'] = $request->name;
        $dataAS['alamat'] = $request->alamat;
        $dataAS['aspirasi'] = $request->aspirasi;
        $dataAS['gambar'] = $request->file('gambar')->store('aspirasi');

        Aspirasi::create($dataAS);

        return redirect('/aspirasii')->with(['success' => 'Data berhasil tersimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dataAS = Aspirasi::all();
        return view('back.aspirasi.indexAspirasi', compact('dataAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteAS($id)
    {
        $dataAS = Aspirasi::find($id);

        Storage::delete($dataAS->gambar);
        $dataAS->delete();

        return redirect('/aspirasi-data')->with(['Success' => 'Data berhasil dihapus']);
    }
}
