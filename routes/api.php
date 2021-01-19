<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Define Controller
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MatakuliahController;
use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\ProdiController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\QrCodeController;


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
Route::get('get_info', [LoginController::class, 'get_user_info']);
// Route Qr
Route::get('create-qr', [QrCodeController::class, 'create']);

Route::get('user/list', [UserController::class, 'list']);
Route::get('user/name/{name}', [UserController::class, 'name']);
// Matakuliah Route ------------------------------------------------------
Route::get('matakuliah', [MatakuliahController::class, 'index']);
Route::get('matakuliah/{id}', [MatakuliahController::class, 'show']);
Route::post('matakuliah', [MatakuliahController::class, 'store']);
Route::put('matakuliah/{id}', [MatakuliahController::class, 'update']);
Route::delete('matakuliah/{id}', [MatakuliahController::class, 'destroy']);
// Dosen Route ------------------------------------------------------
Route::get('dosen', [DosenController::class, 'index']);
Route::get('dosen/{id}', [DosenController::class, 'show']);
Route::post('dosen', [DosenController::class, 'store']);
Route::put('dosen/{id}', [DosenController::class, 'update']);
Route::delete('dosen/{id}', [DosenController::class, 'destroy']);
// Mahasiswa Route ------------------------------------------------------
Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::post('mahasiswa', [MahasiswaController::class, 'store']);
Route::put('mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
// Prodi Route ------------------------------------------------------
Route::get('prodi', [ProdiController::class, 'index']);
Route::get('prodi/{id}', [ProdiController::class, 'show']);
Route::post('prodi', [ProdiController::class, 'store']);
Route::put('prodi/{id}', [ProdiController::class, 'update']);
Route::delete('prodi/{id}', [ProdiController::class, 'destroy']);
// Prodi Route ------------------------------------------------------
Route::get('role', [RoleController::class, 'index']);
Route::get('role/{id}', [RoleController::class, 'show']);
Route::post('role', [RoleController::class, 'store']);
Route::put('role/{id}', [RoleController::class, 'update']);
Route::delete('role/{id}', [RoleController::class, 'destroy']);
