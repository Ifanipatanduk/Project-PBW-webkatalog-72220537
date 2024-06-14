@extends('layouts.main')
@section('title', 'Form Add Kerajinan')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="{{ url('/save') }}" method="post" enctype="multipart/form-data"> 
            @csrf 
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Ukuran</label>
                <input type="text" name="ukuran" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Fungsi</label>
                <input type="text" name="fungsi" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Bahan</label>
                <input type="text" name="bahan" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Asal Daerah</label>
                <input type="text" name="asal_daerah" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" accept="image/*" name="gambar" class="form-control-file">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-dark" value="Simpan" style="background-color:#555843;> 
            </div>
        </form>
    </div>
</div>
@endsection
