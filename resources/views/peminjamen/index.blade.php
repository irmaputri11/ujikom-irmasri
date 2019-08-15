@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">data peminjaman</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                        <center>                                    	                                
                            <a href="{{ route('peminjamen.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                     <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                       <thead>
                            <tr>
                                <th>kode peminjaman</th>
                                <th>nama petugas </th>
                                <th>kode peminjam</th>
                                <th>peminjaman tgl</th>
                                <th>peminjaman tgl harus kembali</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-peminjamen">
                                @foreach ($peminjamen as $data)
                                <tr>
                                    <td>{{$data->peminjaman_kode}}</td>
                                    <td>{{$data->petugas_kode}}</td>
                                    <td>{{$data->peminjam_kode}}</td>
                                    <td>{{$data->peminjaman_tgl}}</td>
                                    <td>{{$data->peminjaman_tgl_hrs_kembali}}</td>
                                        <td style="text-align: center;">
                                            <form action="{{route('peminjamen.destroy', $data->id)}}" method="post">
                                                {{csrf_field()}}
                                            <a href="{{route('peminjamen.show', $data->id)}}"
                                                <button type="button" class="btn btn-outline-info">SHOW</button>
                                            </a>
                                            <a href="{{route('peminjamen.edit', $data->id)}}"
                                                <button type="button" class="btn btn-outline-danger">EDIT</button>
                                                </a>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-success">DELETE</button>
                                            </form>
                                        </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    @endsection