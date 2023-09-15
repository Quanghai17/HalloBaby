<?php

use Illuminate\Support\Facades\Route;

// Trang chủ
Route::get('/', [\App\Http\Controllers\HomeController::class , 'index'])->name('home');

// Dịch vụ
Route::get('/products', [\App\Http\Controllers\ServiceController::class , 'index'])->name('services');
Route::get('/product/{slug}', [\App\Http\Controllers\ServiceController::class , 'show'])->name('services.show');

// Tư vấn
Route::get('/advises', [\App\Http\Controllers\AdvisesController::class , 'index'])->name('advises');
Route::post('/advises', [\App\Http\Controllers\AdvisesController::class , 'store'])->name('advises');

// Giới thiệu
Route::get('/about', [\App\Http\Controllers\AboutController::class , 'index'])->name('about');
Route::get('/page/{slug}', [\App\Http\Controllers\AboutController::class , 'show'])->name('about.show');

//Liên hệ
Route::get('/contact', [\App\Http\Controllers\ContactController::class , 'index'])->name('contact');

//khuyến mãi
Route::get('/voucher', [\App\Http\Controllers\AboutController::class , 'khuyenmai'])->name('khuyenmai');

//Bài viết
Route::get('/posts', [\App\Http\Controllers\PostController::class , 'index'])->name('posts');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostController::class , 'show'])->name('posts.show');

//Đăng kí dịch vụ
Route::get('/register', [\App\Http\Controllers\RegisterController::class , 'index'])->name('register');
Route::post('/book', [\App\Http\Controllers\RegisterController::class , 'store'])->name('book');
Route::get('/confirm', [\App\Http\Controllers\RegisterController::class , 'show'])->name('confirm');
Route::get('/order-success/{id}', [\App\Http\Controllers\RegisterController::class , 'success'])->name('order-success');

//Thêm dịch vụ vào danh sách
Route::post('/save-cart', [\App\Http\Controllers\ServiceController::class , 'save_cart'])->name('save-cart');
Route::post('/show-cart', [\App\Http\Controllers\ServiceController::class , 'show_cart'])->name('show-cart');
Route::get('/delete-cart/{rowId}', [\App\Http\Controllers\ServiceController::class , 'delete_cart'])->name('delete-cart');


//Tìm kiêm bài viết
Route::get('/search',[\App\Http\Controllers\PostController::class , 'search'])->name('search');

//Đăng kí nhận voucher khuyến mãi
Route::post('/vouchers', [\App\Http\Controllers\VoucherController::class , 'store'])->name('vouchers');
Route::get('/admin/report',[\App\Admin\Controllers\AdminVoucherController::class , 'report']);

//Đa ngôn ngữ laravel
Route::get('/greeting/{locale}', [\App\Http\Controllers\LanguageController::class, 'changeLanguage'])->name('lang');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/update-status', [\App\Admin\Controllers\AdminOrderController::class , 'updateStatus'])->name('updateStatus');

//SiteMap
Route::get('sitemap-create', function () {
	Artisan::call('sitemap:create');

	return redirect()->back();
});

Route::get('/clear-cache', function () {
//    Artisan::call('cache:clear');
//    Artisan::call('config:clear');
//    Artisan::call('view:clear');
    Artisan::call('storage:link');
    return "Cache is cleared";
});