<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


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
Route::middleware(['auth'])->name('dashboard.')->group(function (){
    Route::get('admin/dashboard',[DashboardController::class,'home'])->name('home');

    Route::get('/dashboard/user', [DashboardController::class,'user'])->name('users');
    
});

Route::get('/login',[AuthController::class,'login']);
Route::get('/registration',[AuthController::class,'registration']);


Route::resource('blogs', BlogController::class);
Route::get('/blogs',[BlogController::class,'blogs'])->name('blogs');



require __DIR__.'/auth.php';
