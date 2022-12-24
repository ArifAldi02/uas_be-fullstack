<?php

use App\Http\Controllers\Api\Agama64Controller;
use App\Http\Controllers\api\Detaildata64Controller;
use App\Http\Controllers\api\User64Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::resource('/agama64', Agama64Controller::class);

route::resource('/detaildata64', DetailData64Controller::class);

route::resource('/user64', User64Controller::class);
Route::put('/user64/update/image/{id}', [User64Controller::class, 'editimage'])->name('user64.editimage');
Route::put('/user64/update/password/{id}', [User64Controller::class, 'editpassword'])->name('user64.editpassword');

// detail
route::resource('/detaildata64', Detaildata64Controller::class);
