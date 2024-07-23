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

use Inertia\Inertia;


Route::get('/dine', function () {
    return Inertia::render('Dining/Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('offers/', [OffersController::class, 'index'])->name('offers');
Route::get('privacy/',[PrivacyController::class, 'index'])->name('privacy');
Route::get('terms/',[PrivacyController::class, 'terms'])->name('terms');
Route::get('contact/', [ContactController::class, 'details'])->name('contact');
// Route::get('/rooms/executive', [RoomsController::class, 'executive'])->name('rooms/executive');
// Route::get('/rooms/junior', [RoomsController::class, 'junior'])->name('rooms/junior');
// Route::get('/rooms/ocean', [RoomsController::class, 'ocean'])->name('rooms/ocean');
// Route::get('/rooms/premier',[RoomsController::class, 'premier'])->name('rooms/premier');
Route::get('{id}', [PageContentController::class, 'index']);
Route::get('gallery/main', [GalleryController::class, 'main'])->name('gallery/main');
Route::get('blog/all',[BlogController::class, 'index'])->name('blog');
Route::get('blog/read/{slug}',[BlogController::class, 'read'])->name('read');


// Route::post('bookings/send','BookingController@sendBookingFn')->name('bookings/send');
// Route::post('newsletter/send','NewsletterController@SendNewsletterFn')->name('newsletter/send');
Route::post('enquiry/send', [ContactController::class, 'SendEnquireFn'])->name('enquiry/send');
Route::post('contact/general/acknowledge',[ContactController::class, 'sendContactFn'])->name('contact/send');
Route::post('contact/room/acknowledge',[ContactController::class, 'sendContactRoomFn'])->name('contact/room/send');


View::composer('_shared.main', function($view){
    $view->with('menu', (new PageController)->getParents());
    $view->with('submenu', (new PageController)->getSubMenus());
});

View::composer('_shared.includes.booking', function($view){
    $view->with('menu', (new PageController)->getParents());
    $view->with('submenu', (new PageController)->getSubMenus());
});



