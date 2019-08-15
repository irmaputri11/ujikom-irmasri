<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petugas;
use Session;

class petugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = petugas::all();
        return view('petugas.index',compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = petugas::all();
        return view('petugas.create',compact('petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas = new petugas();
        $petugas->petugas_kode = $request->petugas_kode;
        $petugas->petugas_nama = $request->petugas_nama;
        //foto
        $petugas->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $petugas->petugas_nama."</b>"
        ]);
        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = petugas::findOrfail($id);
        return view('petugas.show',compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = petugas::findOrfail($id);
        return view('petugas.edit',compact('petugas'));
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
        $petugas = petugas::findOrfail($id);
        $petugas->petugas_kode = $request->petugas_kode;
        $petugas->petugas_nama = $request->petugas_nama;
        //foto
        $petugas->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $petugas->petugas_nama."</b>"
        ]);
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = petugas::findOrfail($id);
        $petugas->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $petugas->petugas_nama."</b>"
        ]);
        return redirect()->route('petugas.index');
    }
}
