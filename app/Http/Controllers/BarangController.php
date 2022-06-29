<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $barang=barang::all();
        if($keyword){
            $barang=barang::where("barang","LIKE","%$keyword%")->get();
        }
        return view('barang/index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang/create');
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
            'nama_barang'=>'required',
            'jenis_barang'=>'required',
            'harga'=>'required',
            'produsen'=>'required',
            'tgl_masuk'=>'required',
            'stok'=>'required'
        ]);
        barang::create($request->all());

        return redirect('/barang')->with('status', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        barang::where('id',$barang->id)
        ->update(['nama_barang'=>$request->nama_barang,
        'jenis_barang'=>$request->jenis_barang,
        'harga'=>$request->harga,
        'produsen'=>$request->produsen,
        'tgl_masuk'=>$request->tgl_masuk,
        'stok'=>$request->stok
        ]);
        return redirect('/barang')->with('status', 'Data Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        barang::destroy($barang->id);
        return redirect('barang')->with('status','Data Barang Berhasil Dihapus');
    }
}
