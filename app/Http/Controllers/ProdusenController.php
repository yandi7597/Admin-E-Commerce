<?php

namespace App\Http\Controllers;

use App\Models\produsen;
use Illuminate\Http\Request;

class ProdusenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $produsen=produsen::all();
        if($keyword){
            $produsen=produsen::where("produsen","LIKE","%$keyword%")->get();
        }
        return view('produsen/index', compact('produsen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('produsen/create');
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
            'produsen'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'website'=>'required',
            'kontak'=>'required'
        ]);
        produsen::create($request->all());

        return redirect('/produsen')->with('status', 'Data Produsen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function show(produsen $produsen)
    {
        return view('produsen.show', compact('produsen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function edit(produsen $produsen)
    {
        return view('produsen.edit', compact('produsen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produsen $produsen)
    {
        produsen::where('id',$produsen->id)
        ->update(['produsen'=>$request->produsen,
        'alamat'=>$request->alamat,
        'no_hp'=>$request->no_hp,
        'website'=>$request->website,
        'kontak'=>$request->kontak
        ]);
        return redirect('/produsen')->with('status', 'Data Produsen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function destroy(produsen $produsen)
    {
        produsen::destroy($produsen->id);
        return redirect('produsen')->with('status','Data Produsen Berhasil Dihapus');
    }
}
