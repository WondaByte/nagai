<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Geodata;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminindex', [AdminController::class,'index']);
Route::get('/client', [AdminController::class,'redirect']);
Route::get('/addGeodata', [AdminController::class,'addGeodata']);
Route::get('/showGeodata', [AdminController::class,'showGeodata']);
Route::get('/updateGeodata', [AdminController::class,'updateGeodata']);
Route::get('/dashboard', [AdminController::class,'dashboard']);
Route::get('/addGeo', [AdminController::class,'addGeo']);
Route::post('/upload', [AdminController::class,'uploadimage']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
