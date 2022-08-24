<?php

use App\Http\Controllers\SSOController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\EditaisPublicController;
use App\Http\Controllers\EditaisAuthController;
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
    return redirect('/login');
});

Route::get('/dashboard', [SSOController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store']);
Route::get('/users/show', [UserController::class, 'show']);
Route::post('/users/show', [UserController::class, 'update']);
Route::post('/users/delete', [UserController::class, 'delete']);
Route::post('/users/grantPermission', [UserController::class, 'permission_store']);
Route::post('/users/deletePermission', [UserController::class, 'permission_delete']);
Route::get('/permissions', [PermissionController::class, 'index']);



// EDITAIS

Route::get('/',                         [EditaisPublicController::class, 'formulario']);
Route::post('/',                         [EditaisPublicController::class, 'formularioSave']);
Route::get('/detail/{uuid}',            [EditaisPublicController::class, 'detail']);
Route::get('/detail/{uuid}/{file}',  [EditaisPublicController::class, 'file']);
Route::get('/subscribe/{uuid}',           [EditaisAuthController::class, 'subscribe']);
Route::get('/new',         [EditaisAuthController::class, 'new']);
Route::post('/new',        [EditaisAuthController::class, 'newSave']);
Route::get('/publish',      [EditaisAuthController::class, 'publish']);
Route::get('/publish/detail/{uuid}',      [EditaisAuthController::class, 'publishDetail']);
Route::get('/ordinances',    [EditaisAuthController::class, 'ordinances']);
Route::get('/legislation',  [EditaisAuthController::class, 'legislation']);
Route::get('/accountability/{publish}/{uuid}',  [EditaisAuthController::class, 'legislation']);
Route::get('/rating/{publish}/{uuid}',  [EditaisAuthController::class, 'rating']);
Route::get('/ranking/{publish}/{uuid}',  [EditaisAuthController::class, 'ranking']);
Route::get('/license/{publish}/{uuid}',  [EditaisAuthController::class, 'license']);


//FORMULARIO TA

// Route::get('/formulario',   [EditaisAuthController::class, 'formulario']);
// Route::post('/formulario',  [EditaisAuthController::class, 'formularioSave']);
 