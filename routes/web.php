<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TemplateController::class,'index']);
Route::get('/about', [TemplateController::class,'about']);
Route::get('/destination', [TemplateController::class,'destination']);
Route::get('/destination_plane', [TemplateController::class,'destination_plane']);
Route::get('/single_destination', [TemplateController::class,'single_destination']);
Route::get('/gallery', [TemplateController::class,'gallery']);
Route::get('/contact', [TemplateController::class,'contact']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.backend.dashbord');
    });

    // Add more protected routes hersdfdse
});

