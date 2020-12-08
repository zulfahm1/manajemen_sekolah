<?php

namespace App\Http\Controllers;

use App\Models\Ayah;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class AyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayh = Ayah::with('pekerjaan')->get();
        
        return view('ayah.index', compact('ayh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pekerjaan= Pekerjaan::all();
        $pendidikan= Pendidikan::all();
        return view('ayah.create',compact('pekerjaan','pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Ayah::create($request->all());
        return redirect('/ayah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ayah = Ayah::with('pekerjaan','pendidikan','siswa')->find($id);
        return view('ayah.show',compact('ayah') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ayh = Ayah::find($id);
        return view('ayah.edit', compact('ayh'));
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
        $ayh = Ayah::find($id);
        $ayh->update($request->all());
        return redirect('/ayah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ayah::find($id)->delete();
        return redirect('/ayah');
    }
}
