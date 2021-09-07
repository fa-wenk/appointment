<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\BeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            $berita= Berita::paginate(6);
            return view('berita.admin',  compact('berita'));
        }elseif(Auth::user()->hasRole('pasien')){
            $berita= Berita::paginate(6);
            return view('berita.user',  compact('berita'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeritaRequest $request)
    {
        $berita = new Berita;
        $berita->judul= $request->get('judul');
        $berita->kategori= $request->get('kategori');
        $berita->konten= $request->get('konten');
        $file = $request->file('foto')->store('Foto Berita', 'public');
        $berita->foto= $file;
        $berita->save();

        $sukses='Berhasil Disimpan';
        return redirect('berita')->with(compact('sukses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita= Berita::find($id);
        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita= Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(BeritaRequest $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul= $request->get('judul');
        $berita->kategori= $request->get('kategori');
        $berita->konten= $request->get('konten');
        if($request->file('foto')){
            if($berita->foto && file_exists(storage_path('app/public/' . $berita->foto))){
                \Storage::delete('public/'.$berita->foto);
            }
            $file = $request->file('foto')->store('Foto Berita', 'public');
            $berita->foto = $file;
        }
        $berita->save();
        $sukses='Berhasil Diupdate';
        return redirect('berita')->with(compact('sukses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        if($berita->foto && file_exists(storage_path('app/public/' . $berita->foto))){
            \Storage::delete('public/'.$berita->foto);
        }
        $berita->delete();
        $sukses='Berhasil Dihapus';
        return redirect('berita')->with(compact('sukses'));
    }
}
