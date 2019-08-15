@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah petugas</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('petugas.store')}}" method="post" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" name="petugas_kode" id="">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="petugas_nama" id="">
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