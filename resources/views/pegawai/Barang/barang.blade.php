@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-2">Barang</h1>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Barang
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Jenis</th>
                            <th>Gambar</th>
                            <th>Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($table_barang as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_bar }}</td>
                            <td>{{ $item->stock_barang }}</td>
                            <td>{{ $item->harga_beli_bar }}</td>
                            <td>{{ $item->harga_jual_bar }}</td>
                            <td>{{ $item->jenisBarang->jenis_barang }}</td>
                            <td><img src="uploads/{{ $item->foto }}" style="width: 100px;"></td>
                            <td>
                                <form action="{{ url('/input-Pemesanan') }}" >
                                <button class="btn btn-primary btn-sm">Pesan</button>
                              </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection