<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use Session;

class loginController extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('akun')->where(['username'=>$username,'password'=>$password])->get();

        if($username == "admin"){
            return view('homeadmin');   
        }
        else if(count($checkLogin) >0){
           return view('index');
            }
        else
        {
            Session::put('gagal','Data yang kamu masukkan salah!');
            return redirect()->route('');
        }

    }
}
?>