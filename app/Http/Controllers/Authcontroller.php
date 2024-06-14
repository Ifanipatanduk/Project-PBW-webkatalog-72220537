<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;

class Authcontroller extends Controller
{
    public function ceklogin(Request $req)
    {
        if(Auth::attempt ([
                            'email' => $req->email,
                            'password' => $req->password]))
        {
            return redirect ("\beranda");
        }
        else
        {
            return redirect ("/");
        }
    }

    public function ceklogout()
    {
        Auth::logout(); 
        return redirect("/");
    }
}
