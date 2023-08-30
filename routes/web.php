<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordReset;
use App\Http\Controllers\ExcelImport;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\RoleController;
use App\Http\Middleware\IsLogin;
use App\Http\Middleware\NotLogin;

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

Route::middleware([IsLogin::class])->group(function(){
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('loginPost');
    Route::get('/register',[AuthController::class,'registerIndex']);

});


Route::middleware([NotLogin::class])->group(function (){
    Route::get('/home',[HomeController::class,'Home'])->name('home');
    Route::get('/logout',[AuthController::class,'logout'])->name('logoutt');

});

Route::get('/nicat',[HomeController::class,'nicat'])->name('nicat');

Route::post('/post',[AuthController::class,'registerPost'])->name('registerPost');

Route::get('/reset-password',[PasswordReset::class,'passwordResetIndex'])->name('password-reset');
Route::post('/reset-password',[PasswordReset::class,'passwordResetPost'])->name('password-reset-post');
Route::get('/forget-password/{token}',[PasswordReset::class,'newPasswordPost'])->name('newPassword');
Route::get('/excel',[ExcelImport::class,'excelViewImport']);
Route::post('/excel',[ExcelImport::class,'Import'])->name('import');
Route::resource('devices',DevicesController::class);
Route::get('/all-role',[RoleController::class,'allRole'])->name('allRole');
Route::get('/create-role',[RoleController::class,'createRole'])->name('createRole');
Route::post('/create-role',[RoleController::class,'createFormRole'])->name('createFormRole');

