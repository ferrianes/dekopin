<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Gallery\CreateController as GalleryCreate;
use App\Http\Controllers\Admin\Gallery\DeleteController as GalleryDelete;
use App\Http\Controllers\Admin\Gallery\IndexController as GalleryIndex;
use App\Http\Controllers\Admin\Gallery\StoreController as GalleryStore;
use App\Http\Controllers\Admin\News\CreateController as NewsCreate;
use App\Http\Controllers\Admin\News\DeleteController as NewsDelete;
use App\Http\Controllers\Admin\News\EditController;
use App\Http\Controllers\Admin\News\IndexController as NewsIndex;
use App\Http\Controllers\Admin\News\StoreController as NewsStore;
use App\Http\Controllers\Admin\News\UpdateController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', DashboardController::class);
    Route::prefix('/news')->name('news.')->group(function () {
        Route::get('/', NewsIndex::class)->name('index');
        Route::get('/create', NewsCreate::class)->name('create');
        Route::post('/store', NewsStore::class)->name('store');
        Route::get('/{news}/edit', EditController::class)->name('edit');
        Route::put('/{news}', UpdateController::class)->name('update');
        Route::delete('/{news}', NewsDelete::class)->name('destroy');
    });
    Route::prefix('/gallery')->name('gallery.')->group(function () {
        Route::get('/', GalleryIndex::class)->name('index');
        Route::get('/create', GalleryCreate::class)->name('create');
        Route::post('/store', GalleryStore::class)->name('store');
        Route::delete('/{gallery}', GalleryDelete::class)->name('destroy');
    });
});
