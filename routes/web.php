<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::post('/loginme', 'loginController@login');

Route::post('/signupme', 'signupController@signup');

Route::post('/formproduk', 'formController@insert');
Route::post('/formweb', 'formController@insert1');
Route::post('/formeditingfoto', 'formController@insert2');
Route::post('/formeditingvideo', 'formController@insert3');

Route::get('/indexadminprodukv', 'viewController@view1');
Route::get('/indexadminwebv', 'viewController@view2');
Route::get('/indexadmineditingfotov', 'viewController@view3');
Route::get('/indexadmineditingvideov', 'viewController@view4');
Route::get('/indexadminprodukvv', 'viewController@agree1');
Route::get('/indexadminwebvv', 'viewController@agree2');
Route::get('/indexadmineditingfotovv', 'viewController@agree3');
Route::get('/indexadmineditingvideovv', 'viewController@agree4');

Route::get('/', function () {
    return view('index');
});
Route::get('/homeadmin', function () {
    return view('homeadmin');
});
Route::get('/indexadminproduk', function () {
    return view('indexadminproduk');
});
Route::get('/indexadminweb', function () {
    return view('indexadminweb');
});
Route::get('/indexadmineditingfoto', function () {
    return view('indexadmineditingfoto');
});
Route::get('/indexadmineditingvideo', function () {
    return view('indexadmineditingvideo');
});
Route::get('/formproduk', function () {
    return view('formproduk');
});
Route::get('/formweb', function () {
    return view('formweb');
});
Route::get('/formeditingfoto', function () {
    return view('formeditingfoto');
});
Route::get('/formeditingvideo', function () {
    return view('formeditingvideo');
});
Route::get('/dproduk', function () {
    return view('dproduk');
});
Route::get('/dweb', function () {
    return view('dweb');
});
Route::get('/efoto', function () {
    return view('efoto');
});
Route::get('/evideo', function () {
    return view('evideo');
});