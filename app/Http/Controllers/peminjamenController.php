<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\peminjamen;
use App\petugas;
use App\peminjam;
use Session;

class peminjamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamen = peminjamen::all();
        return view('peminjamen.index',compact('peminjamen'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjamen = peminjamen::all();
        $petugas = petugas::all();
        $peminjam = peminjam::all();
        return view('peminjamen.create',compact('peminjamen','petugas','peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjamen = new peminjamen();
        $peminjamen->peminjaman_kode = $request->peminjaman_kode;
        $peminjamen->petugas_kode = $request->petugas_kode;
        $peminjamen->peminjam_kode = $request->peminjam_kode;
        $peminjamen->peminjaman_tgl = $request->peminjaman_tgl;
        $peminjamen->peminjaman_tgl_hrs_kembali = $request->peminjaman_tgl_hrs_kembali;
        //foto
        $peminjamen->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $peminjamen->peminjamen_nama."</b>"
        ]);
        return redirect()->route('peminjamen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjamen = peminjamen::findOrfail($id);
        return view('peminjamen.show',compact('peminjamen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjamen = peminjamen::findOrfail($id);
        return view('peminjamen.edit',compact('peminjamen'));
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
        $peminjamen = peminjamen::findOrfail($id);
        $peminjamen->peminjamen_kode = $request->peminjamen_kode;
        $peminjamen->peminjamen_nama = $request->peminjamen_nama;
        $peminjamen->peminjamen_alamat = $request->peminjamen_alamat;
        $peminjamen->peminjamen_telp = $request->peminjamen_telp;
        //foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $peminjamen->foto = $filename;
        }
        $peminjamen->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $peminjamen->peminjamen_nama."</b>"
        ]);
        return redirect()->route('peminjamen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjamen = peminjamen::findOrfail($id);
        $peminjamen->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $peminjamen->peminjamen_nama."</b>"
        ]);
        return redirect()->route('peminjamen.index');
    }
}
