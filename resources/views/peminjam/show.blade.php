@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">edit peminjam</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('peminjam.update', $peminjam->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" disabled name="peminjam_kode" id="" value="{{$peminjam->peminjam_kode}}">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" disabled name="peminjam_nama" id="" value="{{$peminjam->peminjam_nama}}">
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <input class="form-control" type="text" disabled name="peminjam_alamat" id="" value="{{$peminjam->peminjam_alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="">telp</label>
                                <input class="form-control" type="text" disabled name="peminjam_telp" id="" value="{{$peminjam->peminjam_telp}}">
                            </div>
                            <div class="form-group">
                                    <label for="">Foto</label>
                                    @if (isset($peminjam) && $peminjam->foto)
                                        <p>
                                            <img src="{{ asset('assets/img/' 
                                            .$peminjam->foto.'') }}"
                                            style="margin-top:15px;margin-bottom:15px;
                                            max-height:100px;border:1px;border-color:black;" alt="">
                                        </p>
                                    @endif
                                    <input class="form-control 
                                    @error('foto') is-invalid @enderror" type="file" 
                                    name="foto" id="" value="{{$peminjam->foto}}">
                                    @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror 
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