<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ib = Ibu::with('pekerjaan','pendidikan')->get();   
        return view('ibu.index', compact('ib'));
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

        Ibu::create($request->all());
        return redirect('/ibu');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ibu = Ibu::with('pekerjaan','pendidikan','siswa')->find($id);
        return view('ibu.show', compact('ibu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ib = Ibu::find($id);
        return view('ibu.edit', compact('ib'));
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
        $ib = Ibu::find($id);
        $ib->update($request->all());
        return redirect('/ibu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ibu::find($id)->delete();
        return redirect('/ibu');
    }
}
