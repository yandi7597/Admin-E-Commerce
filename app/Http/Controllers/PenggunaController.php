<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $pengguna=pengguna::all();
        if($keyword){
            $pengguna=pengguna::where("pengguna","LIKE","%$keyword%")->get();
        }
        return view('pengguna/index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengguna'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'username'=>'required',
            'password'=>'required',
            'jabatan'=>'required'
        ]);
        pengguna::create($request->all());

        return redirect('/pengguna')->with('status', 'Data Pengguna Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(pengguna $pengguna)
    {
        return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(pengguna $pengguna)
    {
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengguna $pengguna)
    {
        pengguna::where('id',$pengguna->id)
        ->update(['nama_pengguna'=>$request->nama_pengguna,
        'jk'=>$request->jk,
        'alamat'=>$request->alamat,
        'no_hp'=>$request->no_hp,
        'username'=>$request->username,
        'password'=>$request->password,
        'jabatan'=>$request->jabatan
        ]);
        return redirect('/pengguna')->with('status', 'Data Pengguna Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengguna $pengguna)
    {
        pengguna::destroy($pengguna->id);
        return redirect('pengguna')->with('status','Data Pengguna Berhasil Dihapus');
    }
}
