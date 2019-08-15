@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">edit petugas</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('petugas.update', $petugas->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" name="petugas_kode" id="" value="{{$petugas->petugas_kode}}">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="petugas_nama" id="" value="{{$petugas->petugas_nama}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                                <a  name="" id="" class="btn btn-outline-warning"
                                href="{{ route('petugas.index') }}" role="button">kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection