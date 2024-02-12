<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanHarianController;
use App\Http\Controllers\KegiatanMingguanController;
use App\Http\Controllers\Slide1Controller;
use App\Http\Controllers\UploadimgController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('dashbord', [AdminController::class, 'index'])->name('dashbord');

    Route::get('kegiatan-harian', [KegiatanHarianController::class, 'index'])->name('kegiatan-harian');

    Route::get('kegiatan-mingguan', [KegiatanMingguanController::class, 'index'])->name('kegiatan-mingguan');
    Route::get('kegiatan-mingguan-create', [KegiatanMingguanController::class, 'create'])->name('kegiatan-mingguan-create');
    Route::post('kegiatan-mingguan-store', [KegiatanMingguanController::class, 'store'])->name('kegiatan-mingguan-store');
    Route::get('kegiatan-mingguan/{id}/show', [KegiatanMingguanController::class, 'show'])->name('kegiatan-mingguan-show');
    Route::put('kegiatan-mingguan/{id}', [KegiatanMingguanController::class, 'update'])->name('kegiatan-mingguan-update');
    Route::delete('kegiatan-mingguan/{id}/delete', [KegiatanMingguanController::class, 'delete'])->name('kegiatan-mingguan-delete');

    Route::get('slide1', [Slide1Controller::class, 'index'])->name('slide1');
    Route::get('slide1-craate', [Slide1Controller::class, 'create'])->name('slide1-craate');
    Route::post('slide1-store', [Slide1Controller::class, 'store'])->name('slide1-store');

    // uploadimg
    Route::post('upload-img',[UploadimgController::class,'uploadimg'])->name('upload-img');
});
