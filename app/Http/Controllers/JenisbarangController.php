<?php

namespace App\Http\Controllers;

use App\Models\jenisbarang;
use Illuminate\Http\Request;

class JenisbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $jenisbarang=jenisbarang::all();
        if($keyword){
            $jenisbarang=jenisbarang::where("jenisbarang","LIKE","%$keyword%")->get();
        }
        return view('jenisbarang/index', compact('jenisbarang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('jenisbarang/create');
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
            'jenis_barang'=>'required'
        ]);
        jenisbarang::create($request->all());

        return redirect('/jenisbarang')->with('status', 'Data Jenis Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function show(jenisbarang $jenisbarang)
    {
        return view('jenisbarang.show', compact('jenisbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(jenisbarang $jenisbarang)
    {
        return view('jenisbarang.edit', compact('jenisbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenisbarang $jenisbarang)
    {
        jenisbarang::where('id',$jenisbarang->id)
        ->update(['jenis_barang'=>$request->jenis_barang
        ]);
        return redirect('/jenisbarang')->with('status', 'Data Jenis Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenisbarang $jenisbarang)
    {
        jenisbarang::destroy($jenisbarang->id);
        return redirect('jenisbarang')->with('status','Data Jenis Barang Berhasil Dihapus');
    }
}
