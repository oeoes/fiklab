<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\HomePageController;
use App\Http\Controllers\Backend\LabProfileController;
use App\Http\Controllers\Backend\MagangController;
use App\Http\Controllers\Backend\ScheduleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FrontEnd\AppController;

Route::get('/', [AppController::class, 'index'])->name('app.home');
Route::get('/profile', [AppController::class, 'profile'])->name('app.profile');
Route::get('/gallery', [AppController::class, 'gallery'])->name('app.gallery');
Route::get('/gallery/{id}', [AppController::class, 'gallery_view'])->name('app.gallery_view');
Route::get('/info', [AppController::class, 'info'])->name('app.info');
Route::get('/info/{id}', [AppController::class, 'info_view'])->name('app.info_view');
Route::get('/magang', [AppController::class, 'magang'])->name('app.magang');
Route::get('/magang/{id}', [AppController::class, 'magang_view'])->name('app.magang_view');
Route::get('/jadwal', [AppController::class, 'jadwal'])->name('app.jadwal');
Route::get('/kontak', [ AppController::class, 'kontak'])->name('app.kontak');
Route::post('/record', [AppController::class, 'record'])->name('app.record');

Route::prefix('/app')->group(function () {
    Route::get('/', function () {
        return redirect()->route('profile.index');
    });
    Route::prefix('/admin')->middleware('admin')->group(function () {
        Route::get('/', function () {
            return redirect()->route('profile.index');
        });
        Route::get('/account', [DashboardController::class, 'account'])->name('account');
        Route::post('/account', [DashboardController::class, 'update_account'])->name('account.update');
        Route::get('/feedback', [DashboardController::class, 'feedback'])->name('feedback');
        Route::get('/feedback/delete/{id}', [DashboardController::class, 'delete_feedback'])->name('feedback.delete');

        Route::prefix('/profile')->group(function () {
            Route::get('/', [LabProfileController::class, 'index'])->name('profile.index');
            Route::get('/create', [LabProfileController::class, 'create'])->name('profile.create');
            Route::post('/store', [LabProfileController::class, 'store'])->name('profile.store');
            Route::get('/edit/{class}', [LabProfileController::class, 'edit'])->name('profile.edit');
            Route::put('/update/{class}', [LabProfileController::class, 'update'])->name('profile.update');
            Route::get('/delete/{class}', [LabProfileController::class, 'delete'])->name('profile.delete');
        });

        Route::prefix('/home-page')->group(function () {
            Route::get('/', [HomePageController::class, 'index'])->name('home.index');
            Route::post('/slider/add', [HomePageController::class, 'add_slider'])->name('home.slider');
            Route::get('/slider/create', [HomePageController::class, 'add_slider_page'])->name('home.slider-page');
            Route::get('/slider/delete/{slider}', [HomePageController::class, 'delete_slider'])->name('home.delete-slider');
            Route::post('/video/add', [HomePageController::class, 'add_video'])->name('home.video');
            Route::get('/video/create', [HomePageController::class, 'add_video_page'])->name('home.video-page');
            Route::post('/profile_tab/add', [HomePageController::class, 'add_profile_tab'])->name('home.profile_tab');
            Route::get('/profile_tab/create', [HomePageController::class, 'add_profile_tab_page'])->name('home.profile_tab-page');
        });

        Route::prefix('/users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::post('/store', [UserController::class, 'store'])->name('users.store');
            Route::post('/update/{user}', [UserController::class, 'update'])->name('users.update');
            Route::get('/delete/{user}', [UserController::class, 'delete'])->name('users.delete');
        });

        Route::prefix('/gallery')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
            Route::get('/view/{id}', [GalleryController::class, 'view'])->name('gallery.view');
            Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
            Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
            Route::post('/store/images', [GalleryController::class, 'store_images'])->name('gallery.store_images');
            Route::get('/edit/{image}', [GalleryController::class, 'edit'])->name('gallery.edit');
            Route::put('/update/{image_id}', [GalleryController::class, 'update'])->name('gallery.update');
            Route::get('/delete/{image}', [GalleryController::class, 'delete'])->name('gallery.delete');
            Route::get('/delete/collection/{image}', [GalleryController::class, 'delete_from_collections'])->name('gallery.delete_from_collections');
        });

        Route::prefix('/activity')->group(function () {
            Route::get('/', [ActivityController::class, 'index'])->name('activity.index');
            Route::get('/create', [ActivityController::class, 'create'])->name('activity.create');
            Route::post('/store', [ActivityController::class, 'store'])->name('activity.store');
            Route::get('/edit/{activity}', [ActivityController::class, 'edit'])->name('activity.edit');
            Route::post('/update/{activity}', [ActivityController::class, 'update'])->name('activity.update');
            Route::get('/delete/{activity}', [ActivityController::class, 'delete'])->name('activity.delete');
        });

        Route::prefix('/magang')->group(function () {
            Route::get('/', [MagangController::class, 'index'])->name('magang.index');
            Route::get('/create', [MagangController::class, 'create'])->name('magang.create');
            Route::post('/store', [MagangController::class, 'store'])->name('magang.store');
            Route::get('/edit/{internship}', [MagangController::class, 'edit'])->name('magang.edit');
            Route::post('/update/{internship}', [MagangController::class, 'update'])->name('magang.update');
            Route::get('/delete/{internship}', [MagangController::class, 'delete'])->name('magang.delete');
        });

        Route::prefix('/schedule')->group(function () {
            Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
            Route::get('/create', [ScheduleController::class, 'create'])->name('schedule.create');
            Route::post('/store', [ScheduleController::class, 'store'])->name('schedule.store');
            Route::get('/delete/{schedule}', [ScheduleController::class, 'delete'])->name('schedule.delete');
        });
    });

    Route::prefix('auth')->group(function () {
        Route::get('/login', [AuthController::class, 'login_page'])->name('login');
        Route::post('/login', [AuthController::class, 'validate_login'])->name('login.validate');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
