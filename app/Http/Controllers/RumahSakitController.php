<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use App\Http\Requests\ProfilRsRequest;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = RumahSakit::find(1);
        return view('profil-rs.index', compact('rs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rs = RumahSakit::find(1);
        return view('profil-rs.create', compact('rs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RumahSakit  $rumahSakit
     * @return \Illuminate\Http\Response
     */
    public function update(ProfilRsRequest $request, $id)
    {
        $rs = RumahSakit::find($id);
        $rs->nama = $request->get('nama');
        $rs->alamat = $request->get('alamat');
        $rs->lat = $request->get('lat');
        $rs->long = $request->get('long');
        if($request->file('logo')){
            if($rs->logo && file_exists(storage_path('app/public/' . $rs->logo))){
                \Storage::delete('public/'.$rs->logo);
            }
            $file = $request->file('logo')->store('Logo', 'public');
            $rs->logo = $file;
        }
        $rs->save();
        $sukses='Berhasil Dihapus';
        return redirect('profil-rs')->with(compact('sukses'));
    }

}
