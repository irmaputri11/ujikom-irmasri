@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah peminjaman</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('peminjamen.store')}}" method="post" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode peminjaman</label>
                                <input class="form-control" type="text" name="peminjaman_kode" id="">
                            </div>
                            <div class="form-group">
                                <label for="">kode petugass</label>
                                <select class="form-control
                                @error('petugas_kode') is-invalid @enderror" name="petugas_kode" id="" required>
                                    @foreach ($petugas as $data)
                                        <option value="{{$data->id}}">
                                        {{$data->petugas_kode}}</option> 
                                    @endforeach
                                </select>
                                @error('petugas_kode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">kode peminjam</label>
                                <select class="form-control
                                @error('peminjam_kode') is-invalid @enderror" name="peminjam_kode" id="" required>
                                    @foreach ($peminjam as $data)
                                        <option value="{{$data->id}}">
                                        {{$data->peminjam_kode}}</option> 
                                    @endforeach
                                </select>
                                @error('peminjam_kode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">peminjaman tgl</label>
                                <input class="form-control" type="date" name="peminjaman_tgl" id="">
                            </div>
                            <div class="form-group">
                                <label for="">peminjaman tgl harus kembali</label>
                                <input class="form-control" type="date" name="peminjaman_tgl_hrs_kembali" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 