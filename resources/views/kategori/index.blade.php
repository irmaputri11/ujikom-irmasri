@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">data kategori</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                        <center>                                    	                                
                            <a href="{{ route('kategori.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                     <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                       <thead>
                            <tr>
                                <th>kode</th>
                                <th>nama</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-kategori">
                                @foreach ($kategori as $data)
                                <tr>
                                    <td>{{$data->kategori_kode}}</td>
                                    <td>{{$data->kategori_nama}}</td>
                                    <td style="text-align: center;">
                                        <form action="{{route('kategori.destroy', $data->id)}}" method="post">
                                            {{csrf_field()}}
                                        <a href="{{route('kategori.show', $data->id)}}"
                                            <button type="button" class="btn btn-outline-info">SHOW</button>
                                        </a>
                                        <a href="{{route('kategori.edit', $data->id)}}"
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