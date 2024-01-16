<?php

use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


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

Route::get('/', [ClientController::class, 'home']);
Route::get('/about', [ClientController::class, 'about']);
Route::get('/photographer', [ClientController::class, 'photographer']);

Route::middleware(['guest'])->group(function () {

    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/paket', [AdminController::class, 'adminpaket'])->name('admin.paket');
    Route::get('/admin/tambahpaket', [AdminController::class, 'tambahpaket'])->name('admin.tambahpaket');
    Route::get('/admin/editpaket/{id}', [AdminController::class, 'editpaket'])->name('admin.editpaket');
    Route::get('/admin/deletepaket/{id}', [AdminController::class, 'deletepaket'])->name('admin.deletepaket');
    Route::get('/admin/detailpaket/{id_paket}', [AdminController::class, 'detailpaket'])->name('admin.detailpaket');

    Route::resource('/admin/pesanan', PesananController::class)->except('show');

    Route::get('/admin/deletefotografer/{id}', [AdminController::class, 'deletepesanan'])->name('admin.deletepesanan');
    Route::get('/admin/fotografer', [AdminController::class, 'adminfotografer'])->name('admin.fotografer');
    Route::get('/admin/tambahfotografer', [AdminController::class, 'tambahfotografer'])->name('admin.tambahfotografer');
    Route::get('/admin/editfotografer/{id}', [AdminController::class, 'editfotografer'])->name('admin.editfotografer');
    Route::get('/admin/deletefotografer/{id}', [AdminController::class, 'deletefotografer'])->name('admin.deletefotografer');


});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {

    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/user/detail/{id}', [UserController::class, 'userDetail'])->name('user.detail');
    Route::get('/user/tambahpesanan', [UserController::class, 'userTambahPesanan'])->name('user.tambahpesanan');
    Route::get('/user/profilefotografer', [UserController::class, 'userprofilefotografer'])->name('user.profilefotografer');

    Route::get('/order', [ClientController::class, 'order']);
    Route::post('/ordered', [ClientController::class, 'ordered']);
    
    Route::get('/my-order', [ClientController::class, 'myOrder']);
    Route::post('/payment/{pesanan}', [ClientController::class, 'payment']);

});

Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::post('/postTambahPaket', [AdminController::class, 'postTambahPaket'])->name('postTambahPaket');
Route::post('/postEditPaket/{id}', [AdminController::class, 'postEditPaket'])->name('postEditPaket');
Route::post('/postTambahPesanan', [UserController::class, 'postTambahPesanan'])->name('postTambahPesanan');
Route::post('/postTambahFotografer', [AdminController::class, 'postTambahFotografer'])->name('postTambahFotografer');
Route::post('/postEditFotografer/{id}', [AdminController::class, 'postEditFotografer'])->name('postEditFotografer');