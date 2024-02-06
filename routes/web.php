<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\PegawaiController;
use App\Http\Controllers\Backend\AlatFilmController;
use App\Http\Controllers\Backend\CategoriesController;

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

Route::get('/', [FrontendController::class, 'home']);
Route::get('/detail/{id}', [FrontendController::class, 'show']);
Route::get('/login', [FrontendController::class, 'login']);
Route::post('/login', [FrontendController::class, 'auth']);
Route::get('/logout', [FrontendController::class, 'logout']);

Route::get('/404', function () {
    return view('errors.404');
});

Route::fallback(function () {
    return redirect('/404');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::post('/categories/store', [CategoriesController::class, 'store']);
    Route::post('/categories/update', [CategoriesController::class, 'update']);
    Route::get('/categories/kofrmDelete/{id}', [CategoriesController::class, 'kofrmDelete']);
    Route::get('/categories/delete/{id}', [CategoriesController::class, 'destroy']);

    Route::middleware([Admin::class])->group(function () {
        Route::get('/pegawai', [PegawaiController::class, 'index']);
        Route::post('/pegawai/store', [PegawaiController::class, 'store']);
        Route::post('/pegawai/update', [PegawaiController::class, 'update']);
        Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);
    });

    Route::get('/postingan/{id}', [AlatFilmController::class, 'index']);
    Route::post('/postingan/{id}', [AlatFilmController::class, 'store']);
    Route::get('/postingan/create/{id}', [AlatFilmController::class, 'create']);
    Route::get('/postingan/edit/{id}', [AlatFilmController::class, 'edit']);
    Route::post('/postingan/update/{id}', [AlatFilmController::class, 'update']);
    Route::get('/postingan/delete/{id}', [AlatFilmController::class, 'destroy']);
    Route::get('/postingan/p/{id}', [AlatFilmController::class, 'publish']);
    Route::get('/postingan/d/{id}', [AlatFilmController::class, 'draft']);
});
