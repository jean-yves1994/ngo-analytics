<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApprovedViewController;
use App\Http\Controllers\DeniedViewController;
use App\Http\Controllers\PendingViewController;
use App\Http\Controllers\RequestViewController;
use App\Models\Application;
use App\Http\Controllers\EditController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/apply',[ApplicationController::class,'create'])->name('apply');
Route::post('/store_application',[ApplicationController::class,'store'])->name('store-application')->middleware('auth');
Route::get('/all-requests',[RequestViewController::class,'index'])->name('all-request');
Route::get('/pending-requests',[PendingViewController::class,'index'])->name('pending-request');
Route::get('/approved-requests',[ApprovedViewController::class,'index'])->name('approved-request');
Route::get('/denied-requests',[DeniedViewController::class,'index'])->name('denied-request');
Route::get('/editView',[EditController::class,'index'])->name('editView');
Route::get('/edit{id}', [ApplicationController::class,'edit'])->name('edit-route');
Route::get('/show{id}', [ApplicationController::class,'show'])->name('show-route');
Route::post('update-application{id}',[ApplicationController::class,'update'])->name('update-application');

Route::get('/map-view', function () {
    return view('auth.maps');
});