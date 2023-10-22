<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\LogController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PageDefinitious;
use App\Http\Controllers\Backend\PageDefinitousController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SponsorController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AboutController as FrontendAboutController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\LanguageController;
use App\Models\EnProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

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

Route::get('/asdewq', function () {
    $data = Product::latest()->get();
    foreach ($data as $item) {
        if ($item->slug == null) {
            $create_slug = Str::slug($item->title);
            $item->slug = $create_slug;
            $item->save();
        }
    }

    $data_en = EnProduct::latest()->get();
    foreach ($data_en as $item) {
        if ($item->slug == null) {
            $create_slug = Str::slug($item->title);
            $item->slug = $create_slug;
            $item->save();
        }
    }
    return 'Linkler başarıyla oluşturuldu. Sayfadan çıkabilirsiniz.';

});

// CHANGE LANG
Route::get('/change-lang/{lang}', [LanguageController::class, 'change'])->name('chaange.lang');

Route::middleware('lang')->group(function () {
    Route::get('optimize', function () {
        Artisan::call('optimize');
        dd('optimize başarılı');
    });

    // TR ROUTES
    // FRONTEND İŞLEMLERİ
    Route::get('/', [HomeController::class, 'index'])
        ->middleware('lang')
        ->name('frontend.index');
    Route::get('/about', [FrontendAboutController::class, 'about'])->name('frontend.about.en');
    Route::get('/contact', [FrontendContactController::class, 'contact'])->name('frontend.contact.en');
    Route::get('/hakkimizda', [FrontendAboutController::class, 'about'])->name('frontend.about');
    Route::get('/iletisim', [FrontendContactController::class, 'contact'])->name('frontend.contact');
    Route::get('/kategori/{id?}', [FrontendCategoryController::class, 'detail'])->name('frontend.category.detail');
    Route::get('/urun/{id?}', [FrontendCategoryController::class, 'product'])->name('frontend.product.detail');
    Route::get('/kvkk-aydinlatma-metni', [FrontendPageController::class, 'kvkk'])->name('frontend.kvkk');
    Route::get('/politika', [FrontendPageController::class, 'politika'])->name('frontend.politika');

    // BACKEND İŞLEMLERİ
    Route::get('login', [AuthController::class, 'login']);
    Route::controller(AuthController::class)
        ->prefix('/admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/login', 'login_post')->name('login_post');
        });
    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
            Route::get('/profil', [AuthController::class, 'profile'])->name('profile');
            Route::get('/sifre-degistir', [AuthController::class, 'changePassword'])->name('changePassword');
            Route::post('/sifre-degistir', [AuthController::class, 'changePasswordPost'])->name('changePasswordPost');
            Route::post('/profil-duzenle', [AuthController::class, 'profileUpdate'])->name('profileUpdate');
            Route::get('/', [BackendHomeController::class, 'index'])->name('index');
            Route::get('/sifremi-unuttum', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
            Route::post('/sifremi-unuttum', [AuthController::class, 'forgotPasswordPost'])->name('forgotPasswordPost');
            Route::get('/sifremi-yenile/{data?}', [AuthController::class, 'resetPassword'])->name('resetPassword');
            Route::post('/sifremi-yenile', [AuthController::class, 'resetPasswordPost'])->name('resetPasswordPost');

            Route::controller(PageController::class)->group(function () {
                Route::get('kvkk-duzenle', 'kvkk_create')->name('kvkk.create');
                Route::post('kvkk-duzenle', 'kvkk_update')->name('kvkk.update');
                Route::get('politika-duzenle', 'politika_create')->name('politika.create');
                Route::post('politika-duzenle', 'politika_update')->name('politika.update');
            });

            // SLİDER İŞLEMLERİ
            Route::controller(SliderController::class)
                ->prefix('slider')
                ->name('slider.')
                ->group(function () {
                    Route::middleware('permission2:slider_show')
                        ->get('/liste', 'index')
                        ->name('list');
                    Route::middleware('permission2:slider_add')
                        ->get('/ekle', 'create')
                        ->name('add');
                    Route::middleware('permission2:slider_add')
                        ->post('/ekle', 'store')
                        ->name('store');
                    Route::middleware('permission2:slider_edit')
                        ->get('/duzenle/{id?}', 'edit')
                        ->name('edit');
                    Route::middleware('permission2:slider_edit')
                        ->post('/duzenle/{id?}', 'update')
                        ->name('update');
                    Route::middleware('permission2:slider_delete')
                        ->get('/sil/{id?}', 'destroy')
                        ->name('destroy');
                    Route::middleware('permission2:slider_show')
                        ->get('/statu-degistir/{id?}', 'status_change')
                        ->name('status_change');
                });

            // TARİHÇE İŞLEMLERİ
            Route::controller(HistoryController::class)
                ->prefix('tarihce')
                ->name('history.')
                ->group(function () {
                    Route::middleware('permission2:history_show')
                        ->get('/liste', 'index')
                        ->name('list');
                    Route::middleware('permission2:history_add')
                        ->get('/ekle', 'create')
                        ->name('add');
                    Route::middleware('permission2:history_add')
                        ->post('/ekle', 'store')
                        ->name('store');
                    Route::middleware('permission2:history_edit')
                        ->get('/duzenle/{id?}', 'edit')
                        ->name('edit');
                    Route::middleware('permission2:history_edit')
                        ->post('/duzenle/{id?}', 'update')
                        ->name('update');
                    Route::middleware('permission2:history_delete')
                        ->get('/sil/{id?}', 'destroy')
                        ->name('destroy');
                });

            // SAYFA TANIMLARI İŞLEMLERİ
            Route::controller(PageDefinitousController::class)
                ->prefix('sayfa-tanımı')
                ->name('page-definitous.')
                ->group(function () {
                    Route::get('/ekle', 'add')->name('add');
                    Route::post('/ekle', 'store')->name('store');
                });

            // SPONSOR İŞLEMLERİ
            Route::controller(SponsorController::class)
                ->prefix('sponsor')
                ->name('sponsor.')
                ->group(function () {
                    Route::middleware('permission2:sponsor_add')
                        ->get('/ekle', 'add')
                        ->name('add');
                    Route::middleware('permission2:sponsor_show')
                        ->get('/liste', 'list')
                        ->name('list');
                    Route::middleware('permission2:sponsor_add')
                        ->post('/ekle', 'store')
                        ->name('store');
                    Route::middleware('permission2:sponsor_add')
                        ->get('/sil/{id?}', 'destroy')
                        ->name('destroy');
                    Route::middleware('permission2:sponsor_add')
                        ->get('/duzenle/{id?}', 'edit')
                        ->name('edit');
                    Route::middleware('permission2:sponsor_add')
                        ->post('/duzenle/{id?}', 'update')
                        ->name('update');
                    Route::middleware('permission2:sponsor_add')
                        ->get('/statu-degistir/{id?}', 'status_change')
                        ->name('status_change');
                });

            // KULLANICI İŞLEMLERİ
            Route::controller(UserController::class)
                ->name('user.')
                ->prefix('kullanici')
                ->group(function () {
                    Route::middleware('auth:admin')
                        ->get('/liste', 'list')
                        ->name('list');
                    Route::middleware('auth:admin')
                        ->get('/ekle', 'add')
                        ->name('add');
                    Route::middleware('auth:admin')
                        ->post('/ekle', 'store')
                        ->name('store');
                });

            // ROL İŞLEMLERİ
            Route::controller(RoleController::class)
                ->name('role.')
                ->prefix('rol')
                ->group(function () {
                    Route::get('/liste', 'list')->name('list');
                    Route::get('/ekle', 'add')->name('add');
                    Route::post('/ekle', 'store')->name('store');
                });

            // İLETİŞİM AYARLARI
            Route::controller(ContactController::class)
                ->prefix('iletisim')
                ->name('contact.')
                ->group(function () {
                    Route::middleware('permission2:contact_edit')
                        ->get('/ekle', 'add')
                        ->name('add');
                    Route::middleware('permission2:contact_edit')
                        ->post('/ekle', 'store')
                        ->name('store');
                });

            // KATEGORİ İŞLEMLERİ
            Route::controller(CategoryController::class)
                ->prefix('kategori')
                ->name('category.')
                ->group(function () {
                    Route::middleware('permission2:category_add')
                        ->get('/ekle', 'create')
                        ->name('add');
                    Route::middleware('permission2:category_show')
                        ->get('/liste', 'index')
                        ->name('list');
                    Route::middleware('permission2:category_add')
                        ->post('/ekle', 'store')
                        ->name('store');
                    Route::middleware('permission2:category_edit')
                        ->get('/duzenle/{id?}', 'edit')
                        ->name('edit');
                    Route::middleware('permission2:category_edit')
                        ->post('/duzenle/{id?}', 'update')
                        ->name('update');
                    Route::middleware('permission2:category_delete')
                        ->get('/sil/{id?}', 'destroy')
                        ->name('destroy');
                    Route::middleware('permission2:sponsor_add')
                        ->get('/statu-degistir/{id?}', 'status_change')
                        ->name('status_change');
                });

            // ÜRÜN İŞLEMLERİ
            Route::controller(ProductController::class)
                ->prefix('urun')
                ->name('product.')
                ->group(function () {
                    Route::middleware('permission2:product_add')
                        ->get('/ekle', 'create')
                        ->name('add');
                    Route::middleware('permission2:product_show')
                        ->get('/liste', 'index')
                        ->name('list');
                    Route::middleware('permission2:product_add')
                        ->post('/ekle', 'store')
                        ->name('store');
                    Route::middleware('permission2:product_edit')
                        ->get('/duzenle/{id?}', 'edit')
                        ->name('edit');
                    Route::middleware('permission2:product_edit')
                        ->post('/duzenle/{id?}', 'update')
                        ->name('update');
                    Route::middleware('permission2:product_delete')
                        ->get('/sil/{id?}', 'destroy')
                        ->name('destroy');
                    Route::get('/coklu-gorsel/{id?}', 'multipleImage')->name('multipleImage');
                    Route::get('/coklu-gorsel-ekle/{id?}', 'multipleImage_add')->name('multipleImage_add');
                    Route::post('/coklu-gorsel-ekle/{id?}', 'multipleImage_store')->name('multipleImage_store');
                    Route::get('/coklu-gorsel-sil/{id?}', 'multipleImage_destroy')->name('multipleImage_destroy');
                });

            // kurumsal ayarlar
            Route::controller(AboutController::class)
                ->prefix('kurumsal')
                ->name('about.')
                ->group(function () {
                    Route::middleware('permission2:about_add')
                        ->get('/add', 'add')
                        ->name('add');
                    Route::middleware('permission2:about_add')
                        ->post('/add', 'store')
                        ->name('store');
                });

            // LOG İŞLEMİ
            Route::controller(LogController::class)
                ->prefix('log')
                ->name('log.')
                ->group(function () {
                    Route::get('/list', 'list')->name('list');
                });
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
                Route::middleware('permission2:slider_show')->get('/list', 'index')->name('list');
                Route::middleware('permission2:slider_add')->get('/add', 'create')->name('add');
                Route::middleware('permission2:slider_add')->post('/add', 'store')->name('store');
                Route::middleware('permission2:slider_edit')->get('/edit/{id?}', 'edit')->name('edit');
                Route::middleware('permission2:slider_edit')->post('/edit/{id?}', 'update')->name('update');
                Route::middleware('permission2:slider_delete')->get('/delete/{id?}', 'destroy')->name('destroy');
            });

            // TARİHÇE İŞLEMLERİ
            Route::controller(HistoryController::class)->prefix('history')->name('history.')->group(function () {
                Route::middleware('permission2:history_show')->get('/list', 'index')->name('list');
                Route::middleware('permission2:history_add')->get('/add', 'create')->name('add');
                Route::middleware('permission2:history_add')->post('/add', 'store')->name('store');
                Route::middleware('permission2:history_edit')->get('/edit/{id?}', 'edit')->name('edit');
                Route::middleware('permission2:history_edit')->post('/edit/{id?}', 'update')->name('update');
                Route::middleware('permission2:history_delete')->get('/delete/{id?}', 'destroy')->name('destroy');
            });

            // SAYFA TANIMLARI İŞLEMLERİ
            Route::controller(PageDefinitousController::class)->prefix('set-page')->name('page-definitous.')->group(function () {
                Route::middleware('permission2:page_defi_1_add')->get('/add', 'add')->name('add');
                Route::middleware('permission2:page_defi_1_add')->post('/add', 'store')->name('store');
            });

            // SPONSOR İŞLEMLERİ
            Route::controller(SponsorController::class)->prefix('sponsor')->name('sponsor.')->group(function(){
                Route::middleware('permission2:sponsor_add')->get('/add', 'add')->name('add');
                Route::middleware('permission2:sponsor_show')->get('/list', 'list')->name('list');
                Route::middleware('permission2:sponsor_add')->post('/add', 'store')->name('store');
                Route::middleware('permission2:sponsor_add')->get('/delete/{id?}', 'destroy')->name('destroy');
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
