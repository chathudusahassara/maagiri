<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\View;


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('offers/', [OffersController::class, 'index'])->name('offers');
Route::get('privacy/',[PrivacyController::class, 'index'])->name('privacy');
Route::get('terms/',[PrivacyController::class, 'terms'])->name('terms');
// Route::get('/rooms/executive', [RoomsController::class, 'executive'])->name('rooms/executive');
// Route::get('/rooms/junior', [RoomsController::class, 'junior'])->name('rooms/junior');
// Route::get('/rooms/ocean', [RoomsController::class, 'ocean'])->name('rooms/ocean');
// Route::get('/rooms/premier',[RoomsController::class, 'premier'])->name('rooms/premier');
Route::get('{id}', [PageContentController::class, 'index']);
Route::get('gallery/main', [GalleryController::class, 'main'])->name('gallery/main');
Route::get('contact/details', [ContactController::class, 'details'])->name('contact/details');
Route::get('blog/all',[BlogController::class, 'index'])->name('blog');
Route::get('blog/read/{slug}',[BlogController::class, 'read'])->name('read');




View::composer('_shared.main', function($view){
    $view->with('menu', (new PageController)->getParents());
    $view->with('submenu', (new PageController)->getSubMenus());
});

View::composer('_shared.includes.booking', function($view){
    $view->with('menu', (new PageController)->getParents());
    $view->with('submenu', (new PageController)->getSubMenus());
});
