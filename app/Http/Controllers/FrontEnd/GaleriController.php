<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\FrontEnd\Galeri;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('back.galeris.index', [
            'galeri' => $galeri
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeri = Galeri::all();
        return view('back.galeris.create', compact('galeri'));
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
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['body'] = $request->body;
        $data['gambar'] = $request->file('gambar')->store('galeri');

        Galeri::create($data);

        return redirect()->route('galeri.index')->with(['success' => 'Data berhasil tersimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);

        return view('back.galeris.edit', [
            'galeri' => $galeri,
        ]);
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

        if (empty($request->file('gambar'))) {
            $galeri = Galeri::find($id);
            $galeri->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'user_id' => Auth::id()
            ]);
            return redirect()->route('galeri.index')->with(['success' => 'Data berhasil diupdate']);
        } else {
            $galeri = Galeri::find($id);
            Storage::delete($galeri->gambar);
            $galeri->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'user_id' => Auth::id(),
                'gambar' => $request->file('gambar')->store('galeri')
            ]);
            return redirect()->route('galeri.index')->with(['success' => 'Data berhasil diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);

        Storage::delete($galeri->gambar);
        $galeri->delete();

        return redirect()->route('galeri.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
