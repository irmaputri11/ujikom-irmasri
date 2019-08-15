@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">edit kategori</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('kategori.update', $kategori->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" disabled name="kategori_kode" id="" value="{{$kategori->kategori_kode}}">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" disabled name="kategori_nama" id="" value="{{$kategori->kategori_nama}}">
                            </div>
                            <div class="form-group">
                                <a  name="" id="" class="btn btn-md btn-warning" 
                                href="{{ route('kategori.index') }}" role="button">kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection