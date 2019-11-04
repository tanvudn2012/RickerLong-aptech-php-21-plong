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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/HTML02', function () {
    return view('HTML.02-20190906.baitapvenha');
});
Route::get('/HTML03', function () {
    return view('HTML.03-20190909.baitap');
});
Route::get('/HTML041', function () {
    return view('HTML.04-20190911.cover.baitap');
});
Route::get('/HTML042', function () {
    return view('HTML.04-20190911.sticky-footer.footer');
});
Route::get('/HTML043', function () {
    return view('HTML.04-20190911.sticky-footer-navbar.home');
});
Route::get('/HTML051', function () {
    return view('HTML.05-20190913.checkout.checkout');
});
Route::get('/HTML052', function () {
    return view('HTML.05-20190913.login.login');
});
Route::get('/HTML061', function () {
    return view('HTML.06-20190915.album.index');
});
Route::get('/HTML062', function () {
    return view('HTML.06-20190915.pricing.index');
});
Route::get('/HTML071', function () {
    return view('HTML.07-20190918.blog.index');
});
Route::get('/HTML072', function () {
    return view('HTML.07-20190918.carousel.index');
});
Route::get('/HTML081', function () {
    return view('HTML.08-20190920.dashboard.index');
});
Route::get('/HTML082', function () {
    return view('HTML.08-20190920.product.index');
});
Route::get('/HTML141', function () {
    return view('HTML.14-20191004.aptech.index');
});
Route::get('/HTML142', function () {
    return view('HTML.14-20191004.landing.index');
});
Route::get('/HTML15', function () {
    return view('HTML.15-20191007.index');
});
Route::get('/CTL', 'VuController@getName');