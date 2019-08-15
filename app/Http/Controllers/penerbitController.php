<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penerbit;
use Session;

class penerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = penerbit::all();
        return view('penerbit.index',compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = penerbit::all();
        return view('penerbit.create',compact('penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penerbit = new penerbit();
        $penerbit->penerbit_kode = $request->penerbit_kode;
        $penerbit->penerbit_nama = $request->penerbit_nama;
        $penerbit->penerbit_alamat = $request->penerbit_alamat;
        $penerbit->penerbit_telp = $request->penerbit_telp;
        //foto
        $penerbit->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $penerbit->penerbit_nama."</b>"
        ]);
        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = penerbit::findOrfail($id);
        return view('penerbit.show',compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = penerbit::findOrfail($id);
        return view('penerbit.edit',compact('penerbit'));
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
        $penerbit = penerbit::findOrfail($id);
        $penerbit->penerbit_kode = $request->penerbit_kode;
        $penerbit->penerbit_nama = $request->penerbit_nama;
        $penerbit->penerbit_alamat = $request->penerbit_alamat;
        $penerbit->penerbit_telp = $request->penerbit_telp;
        //foto
        $penerbit->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $penerbit->penerbit_nama."</b>"
        ]);
        return redirect()->route('penerbit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = penerbit::findOrfail($id);
        $penerbit->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $penerbit->penerbit_nama."</b>"
        ]);
        return redirect()->route('penerbit.index');
    }
}
