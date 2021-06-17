@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Stock Barang</th>
                                <th scope="col">Harga Normal</th>
                                <th scope="col">Harga Member</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Foto</th>
                                <th scope="col-2">Tools</th>
                            </tr>
                        </thead>
                        {{-- <?php $no = 1;?> --}}
                        @foreach($barang as $no => $b)
                        <tbody>
                            <th scope="row">{{ ++$no + ($barang->currentPage()-1) * $barang->perPage() }}</th>
                            <th>{{ $b->nama_barang }}</th>
                            <th>{{ $b->stock }}</th>
                            <th>{{ $b->harga }}</th>
                            <th>{{ $b->harga_member }}</th>
                            <th>{{ $b->keterangan }}</th>
                            <th><img class="img-fluid img-thumbnail" style="width:200px;" src="{{ \Storage::url($b->foto) }}"></th>
                            <th><a class="btn btn-warning" href="/editbarang/edit/{{$b->id}}">Edit</a> | <a class="btn btn-danger" href="/deletebarang/destroy/{{ $b->id }}">Delete</a></th>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="pagination justify-content-center">
                        {{ $barang->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection