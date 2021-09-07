<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\User;
use App\Http\Requests\DokterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;

class DokterController extends Controller
{

    private $days = [
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::paginate(1);
        return view('dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DokterRequest $request)
    {
        $dokter = new Dokter;
        $dokter->user_id = $request->get('id');
        $dokter->alamat = $request->get('alamat');
        $dokter->tempat = $request->get('tempat');
        $dokter->ttl = $request->get('ttl');
        $dokter->pend = $request->get('pend');
        $dokter->spesialis = $request->get('spesialis');
        
        $user = new User;
        $user->id = $request->get('id');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone_number = $request->get('phone_number');
        $user->role = "dokter";
        $user->password = Hash::make("12345678");
        $user->save();
        $dokter->save();

        $sukses='Berhasil Disimpan';
        return redirect('dokter')->with(compact('sukses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $days = [
            'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'
        ];
        $dokter = Dokter::find($id);
        return view('dokter.jadwal', compact('dokter','days'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(DokterRequest $request, $id)
    {
        $dokter = Dokter::find($id);
        $dokter->user_id = $request->get('id');
        $dokter->alamat = $request->get('alamat');
        $dokter->tempat = $request->get('tempat');
        $dokter->ttl = $request->get('ttl');
        $dokter->pend = $request->get('pend');
        $dokter->spesialis = $request->get('spesialis');
        
        $user = User::find($request->get('user'));
        $user->name = $request->get('name');
        $user->id = $request->get('id');
        $user->email = $request->get('email');
        $user->phone_number = $request->get('phone_number');
        $user->role = "dokter";
        $user->password = Hash::make("12345678");
        $user->save();
        $dokter->save();
        
        $sukses='Berhasil Disimpan';
        return redirect('dokter')->with(compact('sukses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $user = User::find($dokter->user_id);
        $user->delete();
        $dokter->delete();
        $sukses='Berhasil Dihapus';
        return redirect('dokter')->with(compact('sukses'));
    }
}
