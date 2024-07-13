<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'home'])->name('home');
Route::get('/about', [AdminController::class, 'about'])->name('about');
Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
Route::post('/details', [AdminController::class, 'details'])->name('details');
Route::get('/event', [AdminController::class, 'event'])->name('event');
Route::get('/download/{id}', [AdminController::class, 'download'])->name('download');

Route::post('/enviar', [AdminController::class, 'enviar'])->name('enviar');
Route::post('/correo',[adminController::class,'correo']);

Route::middleware(['auth'])->group(function(){
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes(); 
});
