<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Define Controller
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MatakuliahController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => 'auth'], function()
// {
//     Route::post('/login', [
//         'as' => 'po'
//     ])
// });

Route::post('login', [LoginController::class, 'login']);

Route::get('user/list', [UserController::class, 'list']);
Route::get('user/name/{name}', [UserController::class, 'name']);
// Matakuliah Route ------------------------------------------------------
Route::get('matakuliah', [MatakuliahController::class, 'index']);
Route::get('matakuliah/{id}', [MatakuliahController::class, 'show']);
Route::post('matakuliah', [MatakuliahController::class, 'store']);
Route::put('matakuliah/{id}', [MatakuliahController::class, 'update']);
Route::delete('matakuliah/{id}', [MatakuliahController::class, 'destroy']);
