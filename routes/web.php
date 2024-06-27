<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageCarouselController;

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

// frontend routes
Route::group(['prefix' => '/'], function () {
    Route::get('/', [FrontEndController::class, 'index'])->name('home');
    Route::get('package/{id}', [FrontEndController::class, 'show'])->name('package.show');
    Route::get('/about', [FrontEndController::class, 'about'])->name('about');
    Route::get('/contact-us', [FrontEndController::class, 'contactUs'])->name('contact.us');
    Route::post('/save-contact', [FrontEndController::class, 'saveContact'])->name('save.contact');
    Route::get('/jungle-safari', [FrontEndController::class, 'jungleSafari'])->name('jungle.safari');
    Route::get('/canter-ride', [FrontEndController::class, 'canterRide'])->name('canter.ride');
    Route::get('/resorts', [FrontEndController::class, 'resorts'])->name('resorts');
    Route::get('/school-group', [FrontEndController::class, 'schoolGroup'])->name('school.group');
    Route::get('/destination-wedding', [FrontEndController::class, 'destinationdWedding'])->name('destination.wedding');
    Route::get('/coorporate-group', [FrontEndController::class, 'coorporateGroup'])->name('coorporate.group');
    Route::get('/privacy-and-policy', [FrontEndController::class, 'privacyPolicy'])->name('privacy.policy');
    Route::get('/terms-and-conditions', [FrontEndController::class, 'termCondition'])->name('term.condition');
    Route::get('/room-type', [FrontEndController::class, 'roomType'])->name('room.type');
    Route::get('/booking', [FrontEndController::class, 'booking'])->name('booking');
    Route::post('/booking-store', [FrontEndController::class, 'bookingStore'])->name('submit.booking');
});


// Authentication routes
Route::get('/admin', function () {
    return redirect()->route('login');
});

Route::get('/admin/login', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::post('/logout', [LoginController::class, 'signOut'])->name('admin.logout');


// admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password');
    Route::post('change-password', [AdminController::class, 'updatePassword'])->name('update.password');
    Route::get('profile', [AdminController::class, 'showProfile'])->name('show.profile');
    Route::get('profile/edit', [AdminController::class, 'editProfile'])->name('edit.profile');
    Route::put('profile-update', [AdminController::class, 'updateProfile'])->name('update.profile');
    Route::get('contacts', [AdminController::class, 'showContacts'])->name('contacts');
    Route::get('bookings', [AdminController::class, 'bookings'])->name('bookings');

    // ---Social Media Links---
    Route::group(['prefix' => 'social-media', 'as' => 'social.media.'], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get("/show", "socialMediaShow")->name("show");
            Route::get("/create", "socialMediaCreate")->name("create");
            Route::post("/storeOrUpdate", "socialMediaStoreOrUpdate")->name("storeOrUpdate");
        });
    });

    Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get("/setting", "appSetting")->name("setting");
            Route::post("/setting-update", "appSettingUpdate")->name("setting.update");
        });
    });

    Route::group(['prefix' => 'room-type', 'as' => 'room.type.'], function () {
        Route::get("/", [AdminController::class, "roomTypeList"])->name("list");
        Route::get("/create", [AdminController::class, "roomTypeCreate"])->name("create");
        Route::post("/store", [AdminController::class, "roomTypeStore"])->name("store");
        Route::get("/edit/{id}", [AdminController::class, "roomTypeEdit"])->name("edit");
        Route::post("/update/{id}", [AdminController::class, "roomTypeUpdate"])->name("update");
        Route::get("/delete/{id}", [AdminController::class, "roomTypeDelete"])->name("delete");
        Route::get("/show/{id}", [AdminController::class, "roomTypeShow"])->name("show");
        Route::post('update-status/{id}', [AdminController::class, "updateStatus"])->name('update.status');
    });

    //
    Route::resource('home-page-carousel', HomePageCarouselController::class);
    Route::post('home-page-carousel/update-status/{id}', [HomePageCarouselController::class, "updateStatus"])->name('home-page-carousel.update.status');
    Route::get('home-page-carousel/show/display-order', [HomePageCarouselController::class, "changeDisplayOrder"])->name('home-page-carousel.display.order');
    Route::post('home-page-carousel/update/display-order', [HomePageCarouselController::class, "updateDisplayOrder"])->name('home-page-carousel.update.display-order');
    // Add other admin routes here...
});
