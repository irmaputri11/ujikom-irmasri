@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah peminjam</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('peminjam.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" name="kode_peminjam" id="">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="nama_peminjam" id="">
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <textarea class="form-control" name="alamat_peminjam" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">telp</label>
                                <input class="form-control" type="text" name="telp_peminjam" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input class="form-control 
                                @error('foto') is-invalid @enderror" type="file" 
                                name="foto" id="" required>
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