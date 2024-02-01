<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanMingguanController;
use App\Http\Controllers\Slide1Controller;
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

Route::get('/',[UserController::class,'index']);

Route::get('/login',[AdminController::class, 'login'])->name('admin.login');
Route::post('/authenticate',[AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware'=> ['auth'],'as'=> 'admin.'],function(){
    Route::get('admin-dashbord',[AdminController::class,'index'])->name('admin-dashbord');

    Route::get('admin-kegiatan-mingguan',[KegiatanMingguanController::class,'index'])->name('admin-kegiatan-mingguan');
    Route::get('admin-kegiatan-mingguan-create',[KegiatanMingguanController::class,'create'])->name('admin-kegiatan-mingguan-create');

    Route::get('admin-slide1',[Slide1Controller::class,'index'])->name('admin-slide1');
    Route::get('admin-slide1-craate',[Slide1Controller::class,'create'])->name('admin-slide1-craate');
});

