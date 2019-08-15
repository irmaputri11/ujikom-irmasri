@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah penerbit</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('penerbit.store')}}" method="post" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" name="penerbit_kode" id="">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="penerbit_nama" id="">
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <textarea class="form-control" name="penerbit_alamat" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">telp</label>
                                <input class="form-control" type="text" name="penerbit_telp" id="">
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