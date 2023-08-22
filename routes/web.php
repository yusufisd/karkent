<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\PageDefinitious;
use App\Http\Controllers\Backend\PageDefinitousController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SponsorController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
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

// FRONTEND İŞLEMLERİ
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/hakkimizda', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('frontend.contact');



// BACKEND İŞLEMLERİ
Route::controller(AuthController::class)->prefix('admin')->name('admin.')->group(function(){
    Route::get('/login','login')->name('login');
    Route::post('/login','login_post')->name('login_post');
});
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/', [BackendHomeController::class, 'index'])->name('index');

    // SLİDER İŞLEMLERİ
    Route::controller(SliderController::class)->prefix('slider')->name('slider.')->group(function () {
        Route::middleware('permission:slider_list')->get('/liste', 'index')->name('list');
        Route::middleware('permission:slider_add')->get('/ekle', 'create')->name('add');
        Route::middleware('permission:slider_add')->post('/ekle', 'store')->name('store');
        Route::middleware('permission:slider_edit')->get('/duzenle/{id?}', 'edit')->name('edit');
        Route::middleware('permission:slider_edit')->post('/duzenle/{id?}', 'update')->name('update');
        Route::middleware('permission:slider_delete')->get('/sil/{id?}', 'destroy')->name('destroy');
    });

    // SAYFA TANIMLARI İŞLEMLERİ
    Route::controller(PageDefinitousController::class)->prefix('sayfa-tanımı')->name('page-definitous.')->group(function () {
        Route::middleware('permission:page_defi_1_add')->get('/ekle', 'add')->name('add');
        Route::middleware('permission:page_defi_1_add')->post('/ekle', 'store')->name('store');
    });

    // SPONSOR İŞLEMLERİ
    Route::controller(SponsorController::class)->prefix('sponsor')->name('sponsor.')->group(function(){
        Route::middleware('permission:sponsor_add')->get('/ekle', 'add')->name('add');
        Route::middleware('permission:sponsor_list')->get('/liste', 'list')->name('list');
    });

    Route::controller(UserController::class)->name('user.')->prefix('kullanici')->group(function(){
        Route::middleware('auth:admin')->get('/liste','list')->name('list');
        Route::middleware('auth:admin')->get('/ekle','add')->name('add');
        Route::middleware('auth:admin')->post('/ekle','store')->name('store');
    });

    Route::controller(RoleController::class)->name('role.')->prefix('rol')->group(function(){
        Route::middleware('auth:admin')->get('/liste','list')->name('list');
        Route::middleware('auth:admin')->get('/ekle','add')->name('add');
        Route::middleware('auth:admin')->post('/ekle','store')->name('store');
    });
});
