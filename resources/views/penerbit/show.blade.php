@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">edit penerbit</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('penerbit.update', $penerbit->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" disabled name="penerbit_kode" id="" value="{{$penerbit->penerbit_kode}}">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" disabled name="penerbit_nama" id="" value="{{$penerbit->penerbit_nama}}">
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <input class="form-control" type="text" disabled name="penerbit_alamat" id="" value="{{$penerbit->penerbit_alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="">telp</label>
                                <input class="form-control" type="text" disabled name="penerbit_telp" id="" value="{{$penerbit->penerbit_telp}}">
                            </div>
                            <div class="form-group">
                                <a  name="" id="" class="btn btn-md btn-warning" 
                                href="{{ route('penerbit.index') }}" role="button">kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection