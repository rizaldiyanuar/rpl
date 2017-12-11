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

class formController extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){

        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $City = $req->input('City');
        $zip = $req->input('zip');
        $comment = $req->input('comment');

        $rpl = array (
            'first_name'=>$first_name,
            'last_name'=>$last_name, 
            'email'=>$email, 
            'phone'=>$phone, 
            'address'=>$address, 
            'City'=>$City,
            'zip'=>$zip,
            'comment'=>$comment);

        // dd($rpl);

        $berhasil = Db::table('pemesanan_produk')->insert($rpl);
        if($berhasil==true){
            return view ('index');
        }
        else {
            return view ('form');
        }
    }

        function insert1(Request $req){

        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $City = $req->input('City');
        $zip = $req->input('zip');
        $comment = $req->input('comment');

        $rpl = array (
            'first_name'=>$first_name,
            'last_name'=>$last_name, 
            'email'=>$email, 
            'phone'=>$phone, 
            'address'=>$address, 
            'City'=>$City,
            'zip'=>$zip,
            'comment'=>$comment);

        // dd($rpl);

        $berhasil = Db::table('pemesanan_web')->insert($rpl);
        if($berhasil==true){
            return view ('index');
        }
        else {
            return view ('form');
        }
    }
        function insert2(Request $req){

        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $City = $req->input('City');
        $zip = $req->input('zip');
        $comment = $req->input('comment');

        $rpl = array (
            'first_name'=>$first_name,
            'last_name'=>$last_name, 
            'email'=>$email, 
            'phone'=>$phone, 
            'address'=>$address, 
            'City'=>$City,
            'zip'=>$zip,
            'comment'=>$comment);

        // dd($rpl);

        $berhasil = Db::table('pemesanan_editing_foto')->insert($rpl);
        if($berhasil==true){
            return view ('index');
        }
        else {
            return view ('form');
        }
    }
        function insert3(Request $req){

        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $City = $req->input('City');
        $zip = $req->input('zip');
        $comment = $req->input('comment');

        $rpl = array (
            'first_name'=>$first_name,
            'last_name'=>$last_name, 
            'email'=>$email, 
            'phone'=>$phone, 
            'address'=>$address, 
            'City'=>$City,
            'zip'=>$zip,
            'comment'=>$comment);

        // dd($rpl);

        $berhasil = Db::table('pemesanan_editing_video')->insert($rpl);
        if($berhasil==true){
            return view ('index');
        }
        else {
            return view ('form');
        }
    }
}
?>