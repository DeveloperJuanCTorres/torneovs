<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Registrar;

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
Route::post('/registrar', [AdminController::class, 'registrar'])->name('registrar');
Route::post('/verificacion', [AdminController::class, 'verificacion'])->name('verificacion');
Route::get('/about', [AdminController::class, 'about'])->name('about');
Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
Route::post('/details', [AdminController::class, 'details'])->name('details');
Route::get('/event', [AdminController::class, 'event'])->name('event');
Route::get('/libro-reclamaciones', [AdminController::class, 'reclamaciones'])->name('libro-reclamaciones');
Route::get('/download/{id}', [AdminController::class, 'download'])->name('download');
Route::get('/product/{product}',[AdminController::class,'productoid'])->name('productid');

Route::post('/enviar', [AdminController::class, 'enviar'])->name('enviar');
Route::post('/correo',[adminController::class,'correo']);
Route::post('/libro',[adminController::class,'libro']);

Route::middleware(['auth'])->group(function(){
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes(); 
});
