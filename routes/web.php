<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
route::middleware('guest')->group(function(){
    route::get('/',[LoginController::class,'index'])->name('login');
    route::post('/login',[LoginController::class,'login']);
});
route::middleware('auth:user')->group(function(){
    route::get('/dashboard',[DashboardController::class,'dashboard']);

    route::get('/logout',[LoginController::class,'logout']);
    route::get('/user',[UserController::class,'index']);
    route::get('/admin',[UserController::class,'tampiladmin']);
    route::get('/admin/delete/{id}',[UserController::class,'deleteadmin']);
    route::get('/admin/tambah',[UserController::class,'formadmin']);
    route::post('/admin/insert',[UserController::class,'insertadmin']);
    route::get('/admin/edit/{id}',[UserController::class,'editadmin']);
    route::post('/admin/update/{id}',[UserController::class,'updateadmin']);

    route::get('/tabelpemilih',[UserController::class,'tabelpemilih']);
    route::get('/deleteP/{id}',[UserController::class,'deleteP']);
    route::get('/tambahP',[UserController::class,'tambahdataP']);
    route::post('/insertP',[UserController::class,'insertdataP']);
    route::get('/formedit/{id}',[UserController::class,'formedit']);
    route::post('/updatepemilih/{id}',[UserController::class,'updatepemilih']);

    route::get('/hasil',[UserController::class,'indexhasil']);

    route::get('/deleteK/{id}',[UserController::class,'deleteK']);
    route::get('/tambahK',[UserController::class,'tambahdataK']);
    route::post('/insertK',[UserController::class,'insertdataK']);
    route::get('/formeditK/{id}',[UserController::class,'formeditK']);
    route::post('/updatekandidat/{id}',[UserController::class,'updatekandidat']);

});
route::middleware('auth:pemilih')->group(function(){
    route::get('/pemilih',[UserController::class,'pemilih']);
    route::get('/vote/{id}',[UserController::class,'vote']);
});

// route::get('/pemilih',[PemilihController::class,'pemilih'])->middleware('auth:user,pemilih');








// Route::middleware('guest')->group(function () {
//     Route::get('/', function () {
        

//     });
 
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });