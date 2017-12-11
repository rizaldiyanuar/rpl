<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('akun')->where(['username'=>$username,'password'=>$password])->get();
        if(count($checkLogin) >0)
        {
           return view('index');
        }
        else
        {
            Session::put('gagal','Data yang kamu masukkan salah!');
            return redirect()->route('');
        }

    }
}
