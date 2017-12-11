<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class signupController extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function signup(Request $req)
    {
        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $username = $req->input('username');
        $password = $req->input('password');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $City = $req->input('City');
        $zip = $req->input('zip');

        $rpl = array (
            'first_name'=>$first_name,
            'last_name'=>$last_name, 
            'username'=>$username, 
            'password'=>$password, 
            'email'=>$email, 
            'phone'=>$phone, 
            'address'=>$address, 
            'City'=>$City,
            'zip'=>$zip);

        $berhasil = Db::table('akun')->insert($rpl);
        if($berhasil==true){
            return view('index');
        }
        else {
            return view('login');
        }

        // dd(Db::table('akun')->insert($rpl));


    }
}
?>