@extends('layouts.main')
@section('title', 'Produk')
@section('artikel')
    <div class="card"> 
        <div class="card-header"> 
            <a href="/produk/form-add" class="btn" style="background-color: #555843; color: white;"> <i class="bi bi-bag-plus-fill"></i> Produk</a>
        </div> 

        <div class="class-body"> 
            @if (session('alert')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <table id="example" class="display" style="width:100%"> 
                <thead>
                    <tr>
                        <th><b>No</b></th>
                        <th><b>Nama Produk</b></th>
                        <th><b>Ukuran</b></th>
                        <th><b>Deskripsi</b></th>
                        <th><b>Fungsi</b></th>
                        <th><b>Harga</b></th>
                        <th><b>Stok</b></th>   
                        <th><b>Bahan</b></th>
                        <th><b>Asal Daerah</b></th>
                        <th><b>Gambar</b></th>
                        <th colspan="2"><b>Aksi</b></th> 
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pr as $idx => $k)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $k->nama_produk }}</td>
                        <td>{{ $k->ukuran }}</td>
                        <td>{{ $k->deskripsi }}</td>
                        <td>{{ $k->fungsi }}</td>
                        <td>{{ $k->harga }}</td>
                        <td>{{ $k->stok }}</td>
                        <td>{{ $k->bahan }}</td>
                        <td>{{ $k->asal_daerah }}</td>
                        <td> 
                            <img src="{{ asset('/storage/'.$k->gambar) }}" alt="{{ $k->gambar }}" height="100" width="100">
                        </td>
                        <td> 
                            <a href="/produk/edit-produk/{{$k->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"> </i> Edit</a> 
                        </td>
                        <td> 
                            <a href="/delete/{{$k->id}}" class="btn btn-outline-danger"> <i class="bi bi-trash-fill"></i> Delete</a> 
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
                
            </table>
        </div> 
    </div>
@endsection
