@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('deposit.store')}}" method="post">
                            @csrf
                            
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                                <label for="telp"> Telp</label>
                                <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukkan Telp">
                            </div>
                            <div class="form-group">
                                <label for="saldo"> Saldo</label>
                                <input type="text" name="saldo" id="saldo" class="form-control" placeholder="Masukkan Saldo">
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