<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/room', [RoomController::class, 'create']);
Route::post('/room', [RoomController::class, 'store']);

Route::get('/index', [PageController::class, 'getIndex']);
Route::get('/loaisanpham', [PageController::class, 'getLoaiSP']);
Route::get('/chitiet', [PageController::class, 'getChitiet']) -> name('chi-tiet');
Route::get('/lienhe', [PageController::class, 'getLienhe']);
Route::get('/about', [PageController::class, 'getAbout']);

