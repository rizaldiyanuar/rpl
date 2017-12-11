<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use Session;

class viewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view1()
    {
        $data =[
        'pesan' => DB::table('pemesanan_produk')->get()
        ];
             // dd($data ['pesan'] );
            return view('indexadminproduk',$data);
        //
    }
        public function view2()
    {
        $data =[
        'pesan' => DB::table('pemesanan_web')->get()
        ];
             // dd($data ['pesan'] );
            return view('indexadminweb',$data);
        //
    }
        public function view3()
    {
        $data =[
        'pesan' => DB::table('pemesanan_editing_foto')->get()
        ];
             // dd($data ['pesan'] );
            return view('indexadmineditingfoto',$data);
        //
    }
        public function view4()
    {
        $data =[
        'pesan' => DB::table('pemesanan_editing_video')->get()
        ];
             // dd($data ['pesan'] );
            return view('indexadmineditingvideo',$data);
        //
    }
    public function agree1()
    {
        $pemesanan_web = DB::table('pemesanan_produk');
        $pemesanan_web->first_name = $rpl->first_name;
        $pemesanan_web->status = '1';
        $pemesanan_web->save();
        // dd($data['surat_keluar_dosen']);
        Session::put('alert-success', 'Pesanan anda sedang di proses');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }
    public function agree2()
    {
        $pemesanan_web = DB::table('pemesanan_web');
        $pemesanan_web->first_name = $rpl->first_name;
        $pemesanan_web->status = '1';
        $pemesanan_web->save();
        // dd($data['surat_keluar_dosen']);
        Session::put('alert-success', 'Pesanan anda sedang di proses');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }
    public function agree3()
    {
        $pemesanan_web = DB::table('pemesanan_editing_foto');
        $pemesanan_web->first_name = $rpl->first_name;
        $pemesanan_web->status = '1';
        $pemesanan_web->save();
        // dd($data['surat_keluar_dosen']);
        Session::put('alert-success', 'Pesanan anda sedang di proses');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }
    public function agree4()
    {
        $pemesanan_web = DB::table('pemesanan_editing_video');
        $pemesanan_web->first_name = $rpl->first_name;
        $pemesanan_web->status = '1';
        $pemesanan_web->save();
        // dd($data['surat_keluar_dosen']);
        Session::put('alert-success', 'Pesanan anda sedang di proses');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }
}