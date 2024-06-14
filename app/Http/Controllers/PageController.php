<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kerajinan;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\auth;

class PageController extends Controller
{
    public function beranda()
    {
        return view("beranda", ["key" => "beranda"]);
    }

    public function produk()
    {   
        $kerajinan = Kerajinan::orderBy('id', 'desc')->get();
        return view("produk", ["key" => "produk", "pr" => $kerajinan]);
    }

    public function addproduk() 
    { 
        return view("formadd", ["key" => "produk"]); 
    }

    public function saveproduk(Request $req)
    { 
        $file_name = time() . '-' . $req->file('gambar')->getClientOriginalName();    
        $path = $req->file('gambar')->storeAs('gambar', $file_name, 'public'); 

        Kerajinan::create([
            'nama_produk'  => $req->nama_produk, 
            'ukuran'       => $req->ukuran,
            'deskripsi'    => $req->deskripsi,
            'fungsi'       => $req->fungsi,
            'harga'        => $req->harga,
            'stok'         => $req->stok,
            'bahan'        => $req->bahan,
            'asal_daerah'  => $req->asal_daerah,
            'gambar'       => $path
        ]);

        return redirect("/produk")->with('alert', 'Data Berhasil Disimpan');
    }

    public function editproduk($id)
    {
        $kerajinan = Kerajinan::find($id);
        return view ("edit-produk", ["key" => "produk", "pr" => $kerajinan]);
    }

    public function updateproduk($id, Request $request)
    {
        $kerajinan = Kerajinan::find($id);
        $kerajinan->nama_produk = $request->nama_produk;
        $kerajinan->ukuran = $request->ukuran;
        $kerajinan->deskripsi = $request->deskripsi;
        $kerajinan->fungsi = $request->fungsi;
        $kerajinan->harga = $request->harga;
        $kerajinan->stok = $request->stok;
        $kerajinan->bahan = $request->bahan;
        $kerajinan->asal_daerah = $request->asal_daerah;
        if($request->gambar)
        {
            if($kerajinan->gambar)
            {
                Storage::disk('public')->delete($kerajinan->gambar);
            }
            $file_name= time().'-'.$request->file('gambar')->getClientOriginalName();  
            $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public'); 
            $kerajinan-> gambar = $path; //mengubah nama data base
        }
        $kerajinan->save();
        return redirect("/produk") ->with('alert', 'Data berhasil di Ubah');
    }

    public function deleteproduk($id)
    {
        $kerajinan = Kerajinan::find($id);
        if ($kerajinan->gambar)
        {
            Storage::disk('public')->delete($kerajinan->gambar); 
        }
        $kerajinan->delete();
        return redirect("/produk") ->with('alert', 'Data berhasil di hapus');
    }

    public function login()
    {
        return view("login");
    }
    
    public function edituser()
    {
        return view("edituser", ["key" => ""]);
    }

      public function updateuser(Request $req)
    {
        if ($req -> password_baru == $req->konfirmasi_password) 
        {
            $user = Auth::user();

            $user-> password = bcrypt ($req -> password_baru); 

            $user -> save();
                    
            return redirect("/user") ->with("info", "Password Berhasil diubah");
        }
        
        else
        {
            return redirect("/user") ->with("info", "Password Gagal diperbaharui");
        }
    }

}
