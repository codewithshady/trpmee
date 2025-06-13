<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PackageDestinationDetailController;
use App\Http\Controllers\Backend\PakageDestinationController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TemplateController::class, 'index'])->name('home');
Route::get('/about', [TemplateController::class, 'about']);
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/destination_plane', [TemplateController::class, 'destination_plane'])->name('destination.plane');
Route::get('/single_destination', [TemplateController::class, 'single_destination'])->name('single.destination');
Route::get('/gallery', [TemplateController::class, 'gallery']);
Route::get('/contact', [TemplateController::class, 'contact']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Backend Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('login.post');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::post('/forgot-password/send-otp', [AuthController::class, 'sendOtp'])->name('password.sendOtp');
Route::post('/forgot-password/verify-otp', [AuthController::class, 'verifyOtp'])->name('password.verifyOtp');
Route::middleware(['auth'])->group(function () {
    Route::prefix('backend')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile.index');
        Route::post('/profile/update', [DashboardController::class, 'updateProfile'])->name('profile.update');


        Route::prefix('destinations')->name('destinations.')->group(function () {
            Route::get('/', [DestinationController::class, 'list'])->name('index');
            Route::get('/create', [DestinationController::class, 'create'])->name('create');
            Route::post('/store', [DestinationController::class, 'store'])->name('store');
            Route::get('/{destination}/edit', [DestinationController::class, 'edit'])->name('edit');
            Route::put('/{destination}', [DestinationController::class, 'update'])->name('update');
            Route::post('/{destination}/toggle-status', [DestinationController::class, 'toggleStatus'])->name('toggle');
            Route::delete('/{destination}', [DestinationController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('pakagedestinations')->name('pakagedestinations.')->group(function () {
            Route::get('/', [PakageDestinationController::class, 'index'])->name('index');
            Route::get('/create', [PakageDestinationController::class, 'create'])->name('create');
            Route::post('/store', [PakageDestinationController::class, 'store'])->name('store');
            Route::get('/{pakageDestination}/edit', [PakageDestinationController::class, 'edit'])->name('edit');
            Route::put('/{pakageDestination}', [PakageDestinationController::class, 'update'])->name('update');
            Route::delete('/{pakageDestination}', [PakageDestinationController::class, 'destroy'])->name('destroy');
        });


        Route::prefix('packagedetails')->name('package-details.')->group(function () {
            Route::get('/', [PackageDestinationDetailController::class, 'index'])->name('index');
            Route::get('/create', [PackageDestinationDetailController::class, 'create'])->name('create');
            Route::post('/', [PackageDestinationDetailController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [PackageDestinationDetailController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [PackageDestinationDetailController::class, 'update'])->name('update');
            Route::delete('/{detail}', [PackageDestinationDetailController::class, 'destroy'])->name('destroy');
        });
    });
});
