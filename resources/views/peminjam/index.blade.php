@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                        <center>                                    	                                
                            <a href="{{ route('peminjam.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                     <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                       <thead>
                            <tr>
                                <th>kode</th>
                                <th>nama</th>
                                <th>alamat</th>
                                <th>telp</th>
                                <th>foto</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-peminjam">
                                @foreach ($peminjam as $data)
                                <tr>
                                    <td>{{$data->peminjam_kode}}</td>
                                    <td>{{$data->peminjam_nama}}</td>
                                    <td>{{$data->peminjam_alamat}}</td>
                                    <td>{{$data->peminjam_telp}}</td>
                                    <td><img src="{{asset('assets/img/' .$data->foto. '')}}"
                                        style="width:250px; height:250px;" alt="foto"></td>
                                   
                                        <td style="text-align: center;">
                                            <form action="{{route('peminjam.destroy', $data->id)}}" method="post">
                                                {{csrf_field()}}
                                            <a href="{{route('peminjam.show', $data->id)}}"
                                                <button type="button" class="btn btn-outline-info">SHOW</button>
                                            </a>
                                            <a href="{{route('peminjam.edit', $data->id)}}"
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