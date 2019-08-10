<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\peminjam;
use App\file;

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
        $response = [
            'success' => true,
            'data' => $user,
            'message' => 'Berhasil'
        ];
        return reponse()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjam = peminjam::all($id);
        return view('backend.peminjam.create',compact('peminjam'));
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
        $peminjam->peminjam_foto = $request->peminjam_foto;
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
        $kategori = kategori::findOrfail($id);
        $response = [
            'success' => true,
            'data' => $user,
            'message' => 'Berhasil'
        ];
        return reponse()->json($response, 200);
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
        return view('backend.peminjam.edit',compact('peminjam'));
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
        $peminjam->peminjam_foto = $request->peminjam_foto;
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
        $kategori = kategori::findOrfail($id);
    
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $kategori->nama_kategori."</b>"
        ]);
        return redirect()->route('kategori.index');
    }
}
