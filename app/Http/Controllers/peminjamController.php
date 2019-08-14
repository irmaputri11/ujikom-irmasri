<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\peminjam;
use file;
use Session;

class peminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = peminjam::all();
        return view('peminjam.index',compact('peminjam'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjam = peminjam::all();
        return view('peminjam.create',compact('peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new peminjam();
        $peminjam->peminjam_kode = $request->peminjam_kode;
        $peminjam->peminjam_nama = $request->peminjam_nama;
        $peminjam->peminjam_alamat = $request->peminjam_alamat;
        $peminjam->peminjam_telp = $request->peminjam_telp;
        //foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $peminjam->foto = $filename;
        }
        $peminjam->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $peminjam->peminjam_nama."</b>"
        ]);
        return redirect()->route('peminjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjam = peminjam::findOrfail($id);
        return view('peminjam.show',compact('peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjam = peminjam::findOrfail($id);
        return view('peminjam.edit',compact('peminjam'));
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
        $peminjam = peminjam::findOrfail($id);
        $peminjam->peminjam_kode = $request->peminjam_kode;
        $peminjam->peminjam_nama = $request->peminjam_nama;
        $peminjam->peminjam_alamat = $request->peminjam_alamat;
        $peminjam->peminjam_telp = $request->peminjam_telp;
        //foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $peminjam->foto = $filename;
        }
        $peminjam->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $peminjam->peminjam_nama."</b>"
        ]);
        return redirect()->route('peminjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjam = peminjam::findOrfail($id);
        $peminjam->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $peminjam->peminjam_nama."</b>"
        ]);
        return redirect()->route('peminjam.index');
    }
}
