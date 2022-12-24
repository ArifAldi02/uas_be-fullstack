<?php

use App\Http\Controllers\Agama64Controller;
use App\Http\Controllers\Auth64Controller;
use App\Http\Controllers\User64Controller;
use App\Http\Controllers\Detaildata64Controller;
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

Route::get('/', function () {
    return view('welcome', [
        'page' => "Home"
    ]);
})->middleware('auth');


// auth
Route::get('/login64', [Auth64Controller::class, 'login'])->name('login');
Route::get('/register64', [Auth64Controller::class, 'register'])->name('auth64.register');
Route::get('/logout64', [Auth64Controller::class, 'logout'])->name('auth64.logout');

Route::post('/login64', [Auth64Controller::class, 'loginP'])->name('auth64.loginP');
Route::post('/register64', [Auth64Controller::class, 'registerP'])->name('auth64.registerP');

Route::middleware('auth')->group(function () {
    // agama
    Route::resource('/agama64', Agama64Controller::class)->middleware('admin');

    // my
    Route::get('/myprofile64', [User64Controller::class, 'myprofile'])->name('user64.myprofile');
    Route::put('/myprofile64/edit/image/{id}', [User64Controller::class, 'editimage'])->name('user64.editimage');
    Route::put('/myprofile64/edit/password/{id}', [User64Controller::class, 'editpassword'])->name('user64.editpassword');

    // user
    Route::resource('/user64', User64Controller::class)->middleware('admin');

    // detail
    Route::resource('/detaildata64', Detaildata64Controller::class);
});