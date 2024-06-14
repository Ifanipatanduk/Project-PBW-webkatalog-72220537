@extends('layouts.main')
@section('title', 'Form Edit Kerajinan')
@section('artikel')
<div class="card">
    <div class="card-header">
        Edit Kerajinan
    </div>
    <div class="card-body">
        <form action="/update/{{ $pr->id }}" method="post" enctype="multipart/form-data"> 
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="{{ $pr->nama_produk }}" required>
            </div>

            <div class="form-group">
                <label>Ukuran</label>
                <input type="text" name="ukuran" class="form-control" value="{{ $pr->ukuran }}" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $pr->deskripsi }}" required>
            </div>

            <div class="form-group">
                <label>Fungsi</label>
                <input type="text" name="fungsi" class="form-control" value="{{ $pr->fungsi }}" required>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="{{ $pr->harga }}" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="{{ $pr->stok }}" required>
            </div>

            <div class="form-group">
                <label>Bahan</label>
                <input type="text" name="bahan" class="form-control" value="{{ $pr->bahan }}" required>
            </div>

            <div class="form-group">
                <label>Asal Daerah</label>
                <input type="text" name="asal_daerah" class="form-control" value="{{ $pr->asal_daerah }}" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" accept="image/*" name="gambar" class="form-control-file">
            </div>

            <div class="form-group">
                <img src="{{ asset('/storage/'.$pr->gambar) }}" alt="{{ $pr->produk }}" height="80" width="80">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
