<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;

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

Route::get('admin/home', [AdminController::class, 'index']);
Route::get('admin/button', [AdminController::class, 'button']);

Auth::routes();

Route::get('login', function(){
    return view('auth_bs.login');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//Index
Route::get('data-kelas', [KelasController::class, 'index'])->name('data-kelas.index');

//Create
Route::get('data-kelas/create', [KelasController::class, 'create'])->name('data-kelas.create');
Route::post('data-kelas/create', [KelasController::class, 'store'])->name('data-kelas.store');
