<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\backendcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\MustAdmin;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
}
);
Route::get('/layout', function () {
    return view('layout');
}
);
Route::get('/home', function () {
    return view('home');
}
);

Route::get('/user/view-form', function () {
    return view('user/view-form');
}
);


// Bagian dimana hanya untuk front end
route::get('/contact',[frontendcontroller::class, 'contact']);
route::get('/about',[frontendcontroller::class, 'about']);
route::get('/about',[frontendcontroller::class, 'about']);


//Bagian dimana untuk login stuff
route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
route::post('/login', [AuthController::class, 'authenticating']);
route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

//bagian dimana untuk crud user
route::get('user/view',[backendcontroller::class, 'view_user']);
route::post('/user/view',[backendcontroller::class, 'store_user']);
route::get('/user/view-form',[backendcontroller::class, 'create_user']);//->middleware('auth','must-admin');
route::delete('/user-delete/{id}',[backendcontroller::class, 'delete_user']);
route::get('/user-edit/{id}',[backendcontroller::class, 'edit_user']);
route::put('/user-update/{id}',[backendcontroller::class, 'update_user']);

//bagian dimana untuk crud berita
route::get('berita/view-berita',[backendcontroller::class, 'view_berita']);
route::post('/user/view',[backendcontroller::class, 'store_user']);
route::get('/user/view-form',[backendcontroller::class, 'create_user']);//->middleware('auth','must-admin');
route::delete('/user-delete/{id}',[backendcontroller::class, 'delete_user']);
route::get('/user-edit/{id}',[backendcontroller::class, 'edit_user']);
route::put('/user-update/{id}',[backendcontroller::class, 'update_user']);

//bagian dimana untuk crud gallery
route::get('gallery/view-gallery',[backendcontroller::class, 'view_gallery']);
route::post('/gallery/view-gallery',[backendcontroller::class, 'store_gallery']);
route::get('/gallery/gallery-form',[backendcontroller::class, 'create_gallery']);//->middleware('auth','must-admin');
route::delete('/gallery-delete/{id}',[backendcontroller::class, 'delete_gallery']);
route::get('/gallery-edit/{id}',[backendcontroller::class, 'edit_gallery']);
route::put('/gallery-update/{id}',[backendcontroller::class, 'update_gallery']);