@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{ $error }} </br>
                            @endforeach
                        </div>
                    @endif 

                    <form action="/editbarang/update/{{ $barang->id }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="Nama Barang" class="col-sm-2 col-form-label">Nama Barang</label>
                            <input type="text" class="form-control col-md-8" name="nama_barang" value="{{ $barang->nama_barang }}"/>
                        </div>

                        <div class="form-group row">
                            <label for="Stock Barang" class="col-sm-2 col-form-label">Stock Barang</label>
                            <input type="number" class="form-control col-md-8" name="stock" value="{{ $barang->stock }}"/>
                        </div>

                        <div class="form-group row">
                            <label for="Harga Normal" class="col-sm-2 col-form-label">Harga Normal</label>
                            <input type="text" class="form-control col-md-8" name="harga" value="{{ $barang->harga }}"/>
                        </div>

                        <div class="form-group row">
                            <label for="Harga Member" class="col-sm-2 col-form-label">Harga Member</label>
                            <input type="text" class="form-control col-md-8" name="harga_member" value="{{ $barang->harga_member }}"/>
                        </div>

                        <div class="form-group row">
                            <label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <textarea class="form-control col-md-8" maxlength="250" name="keterangan" />{{ $barang->keterangan }}</textarea>
                        </div>

                        <div class="form-group row">
                            <label for="Foto Barang" class="col-sm-2 col-form-label">Foto Barang</label>
                            <input class="form-control col-md-8" type="file" name="foto"/>
                        </div>

                        <div class="form-group justify-content-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-warning" href="/viewbarang">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection