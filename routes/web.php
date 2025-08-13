<?php

use App\Http\Controllers\ManajemanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.index');
});


Route::get('/dashboard.index', function () {
    return view('dashboard.index');
});

Route::get('/manajeman.index', function () {
    return view('manajeman.index');
});

Route::get('/masterdata.jenispekerjaan', function () {
    return view('masterdata.jenispekerjaan');
});


Route::get('/masterdata.kontraktor', function () {
    return view('masterdata.kontraktor');
});


Route::get('/masterdata.konsultan', function () {
    return view('masterdata.konsultan');
});



Route::get('/jadual.index', function () {
    return view('jadual.index',);
});


Route::get('/jadual.detail', function () {
    return view('jadual.detail',);
});

Route::get('/laporanm.index', function () {
    return view('laporanm.index',);
});



Route::get('/laporanb.index', function () {
    return view('laporanb.index',);
});

Route::get('/laporanu.index', function () {
    return view('laporanu.index',);
});


Route::get('/laporanmk.index', function () {
    return view('laporanmk.index',);
});
Route::get('/laporanmk.detail', function () {
    return view('laporanmk.detail',);
});


Route::get('/laporanbk.index', function () {
    return view('laporanbk.index',);
});
Route::get('/laporanbk.detail', function () {
    return view('laporanbk.detail',);
});


Route::get('/jadual.edit', function () {
    return view('jadual.edit',);
});
Route::get('/jadual.uplode', function () {
    return view('jadual.uplode',);
});
Route::get('/laporanm.detail', function () {
    return view('laporanm.detail',);
});
Route::get('/laporanb.detail', function () {
    return view('laporanb.detail',);
});


Route::get('/dataumum.index', function () {
    return view('dataumum.index');
});

Route::get('/dataumum.detail', function () {
    return view('dataumum.detail');
});

Route::get('/dataumum.edit', function () {
    return view('dataumum.edit');
});

Route::get('/dataumum.upload', function () {
    return view('dataumum.upload');
});