@extends('layouts.main')
@section('title', 'Form Ubah password') 
@section('artikel')
        @if (session('info')) 
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('info') }}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
        @endif
        
    <form action="/updateuser" method="POST">
        @csrf 
        <div class="form-group">
            <label> Password Baru </label>
            <input type="password" name="password_baru" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Konfirmasi Password Baru</label>
            <input type="password" name="konfirmasi_password" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn" style="background-color:#555843; color: white;">update</button>
        </div>

    </form>
@endsection
