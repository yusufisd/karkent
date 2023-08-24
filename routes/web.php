<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\PageDefinitious;
use App\Http\Controllers\Backend\PageDefinitousController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SponsorController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LanguageController;
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



// CHANGE LANG
Route::get('/change-lang/{lang}', [LanguageController::class, 'change'])->name('chaange.lang');


// TR ROUTES
// FRONTEND İŞLEMLERİ
Route::get('/', [HomeController::class, 'index'])->middleware('lang')->name('frontend.index');
Route::get('/hakkimizda', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/iletisim', [FrontendContactController::class, 'contact'])->name('frontend.contact');


// BACKEND İŞLEMLERİ
Route::controller(AuthController::class)->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login_post')->name('login_post');
});
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'lang'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
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

    // TARİHÇE İŞLEMLERİ
    Route::controller(HistoryController::class)->prefix('tarihce')->name('history.')->group(function () {
        Route::middleware('permission:history_list')->get('/liste', 'index')->name('list');
        Route::middleware('permission:history_add')->get('/ekle', 'create')->name('add');
        Route::middleware('permission:history_add')->post('/ekle', 'store')->name('store');
        Route::middleware('permission:history_edit')->get('/duzenle/{id?}', 'edit')->name('edit');
        Route::middleware('permission:history_edit')->post('/duzenle/{id?}', 'update')->name('update');
        Route::middleware('permission:history_delete')->get('/sil/{id?}', 'destroy')->name('destroy');
    });

    // SAYFA TANIMLARI İŞLEMLERİ
    Route::controller(PageDefinitousController::class)->prefix('sayfa-tanımı')->name('page-definitous.')->group(function () {
        Route::middleware('permission:page_defi_1_add')->get('/ekle', 'add')->name('add');
        Route::middleware('permission:page_defi_1_add')->post('/ekle', 'store')->name('store');
    });

    // SPONSOR İŞLEMLERİ
    Route::controller(SponsorController::class)->prefix('sponsor')->name('sponsor.')->group(function () {
        Route::middleware('permission:sponsor_add')->get('/ekle', 'add')->name('add');
        Route::middleware('permission:sponsor_list')->get('/liste', 'list')->name('list');
        Route::middleware('permission:sponsor_add')->post('/ekle', 'store')->name('store');
        Route::middleware('permission:sponsor_add')->get('/sil/{id?}', 'destroy')->name('destroy');
    });

    // KULLANICI İŞLEMLERİ
    Route::controller(UserController::class)->name('user.')->prefix('kullanici')->group(function () {
        Route::middleware('auth:admin')->get('/liste', 'list')->name('list');
        Route::middleware('auth:admin')->get('/ekle', 'add')->name('add');
        Route::middleware('auth:admin')->post('/ekle', 'store')->name('store');
    });


    // ROL İŞLEMLERİ
    Route::controller(RoleController::class)->name('role.')->prefix('rol')->group(function () {
        Route::middleware('auth:admin')->get('/liste', 'list')->name('list');
        Route::middleware('auth:admin')->get('/ekle', 'add')->name('add');
        Route::middleware('auth:admin')->post('/ekle', 'store')->name('store');
    });

    // İLETİŞİM AYARLARI
    Route::controller(ContactController::class)->prefix('iletisim')->name('contact.')->group(function () {
        Route::get('/ekle', 'add')->name('add');
        Route::post('/ekle', 'store')->name('store');
    });

    // KATEGORİ İŞLEMLERİ
    Route::controller(CategoryController::class)->prefix('kategori')->name('category.')->group(function () {
        Route::get('/ekle', 'create')->name('add');
        Route::get('/liste', 'index')->name('list');
        Route::post('/ekle', 'store')->name('store');
        Route::get('/duzenle/{id?}', 'edit')->name('edit');
        Route::post('/duzenle/{id?}', 'update')->name('update');
        Route::get('/sil/{id?}', 'destroy')->name('destroy');
    });

    // ÜRÜN İŞLEMLERİ
    Route::controller(ProductController::class)->prefix('urun')->name('product.')->group(function () {
        Route::get('/ekle', 'create')->name('add');
        Route::get('/liste', 'index')->name('list');
        Route::post('/ekle', 'store')->name('store');
        Route::get('/duzenle/{id?}', 'edit')->name('edit');
        Route::post('/duzenle/{id?}', 'update')->name('update');
        Route::get('/sil/{id?}', 'destroy')->name('destroy');
    });
});

        // TR ROUTES END

/*             // EN ROUTES
        // BACKEND İŞLEMLERİ
        Route::controller(AuthController::class)->prefix('/admin')->name('admin.')->group(function(){
            Route::get('/login','login')->name('login');
            Route::post('/login','login_post')->name('login_post');
        });
        Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'lang'])->group(function () {
            Route::get('/logout',[AuthController::class,'logout'])->name('logout');
            Route::get('/', [BackendHomeController::class, 'index'])->name('index');

            // SLİDER İŞLEMLERİ
            Route::controller(SliderController::class)->prefix('slider')->name('slider.')->group(function () {
                Route::middleware('permission:slider_list')->get('/list', 'index')->name('list');
                Route::middleware('permission:slider_add')->get('/add', 'create')->name('add');
                Route::middleware('permission:slider_add')->post('/add', 'store')->name('store');
                Route::middleware('permission:slider_edit')->get('/edit/{id?}', 'edit')->name('edit');
                Route::middleware('permission:slider_edit')->post('/edit/{id?}', 'update')->name('update');
                Route::middleware('permission:slider_delete')->get('/delete/{id?}', 'destroy')->name('destroy');
            });

            // TARİHÇE İŞLEMLERİ
            Route::controller(HistoryController::class)->prefix('history')->name('history.')->group(function () {
                Route::middleware('permission:history_list')->get('/list', 'index')->name('list');
                Route::middleware('permission:history_add')->get('/add', 'create')->name('add');
                Route::middleware('permission:history_add')->post('/add', 'store')->name('store');
                Route::middleware('permission:history_edit')->get('/edit/{id?}', 'edit')->name('edit');
                Route::middleware('permission:history_edit')->post('/edit/{id?}', 'update')->name('update');
                Route::middleware('permission:history_delete')->get('/delete/{id?}', 'destroy')->name('destroy');
            });

            // SAYFA TANIMLARI İŞLEMLERİ
            Route::controller(PageDefinitousController::class)->prefix('set-page')->name('page-definitous.')->group(function () {
                Route::middleware('permission:page_defi_1_add')->get('/add', 'add')->name('add');
                Route::middleware('permission:page_defi_1_add')->post('/add', 'store')->name('store');
            });

            // SPONSOR İŞLEMLERİ
            Route::controller(SponsorController::class)->prefix('sponsor')->name('sponsor.')->group(function(){
                Route::middleware('permission:sponsor_add')->get('/add', 'add')->name('add');
                Route::middleware('permission:sponsor_list')->get('/list', 'list')->name('list');
                Route::middleware('permission:sponsor_add')->post('/add', 'store')->name('store');
                Route::middleware('permission:sponsor_add')->get('/delete/{id?}', 'destroy')->name('destroy');
            });

            Route::controller(UserController::class)->name('user.')->prefix('user')->group(function(){
                Route::middleware('auth:admin')->get('/list','list')->name('list');
                Route::middleware('auth:admin')->get('/add','add')->name('add');
                Route::middleware('auth:admin')->post('/add','store')->name('store');
            });

            Route::controller(RoleController::class)->name('role.')->prefix('role')->group(function(){
                Route::middleware('auth:admin')->get('/list','list')->name('list');
                Route::middleware('auth:admin')->get('/add','add')->name('add');
                Route::middleware('auth:admin')->post('/add','store')->name('store');
            });
        });

        Route::get('/about-us', [HomeController::class, 'about'])->name('frontend.about');
        Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');

        // EN ROUTES END
    } */
