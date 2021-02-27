@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('saldo.update', $deposit->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name"> Kode Barang</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$deposit->name}}">
                            </div>
                            <div class="form-group">
                                <label for="alamat"> Nama Barang</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{$deposit->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="telp">Nama Suplier</label>
                                <input type="number" name="telp" id="telp" class="form-control" value="{{$deposit->telp}}">
                            </div>
                            <div class="form-group">
                                <label for="saldo"> Saldo</label>
                                <input type="number" name="saldo" id="saldo" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection