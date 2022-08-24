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


// EDITAIS

Route::get('/',                         [EditaisPublicController::class, 'formulario']);
Route::post('/',                         [EditaisPublicController::class, 'formularioSave']);
Route::get('/new',         [EditaisAuthController::class, 'new']);
Route::post('/new',        [EditaisAuthController::class, 'newSave']);


//FORMULARIO TA

// Route::get('/formulario',   [EditaisAuthController::class, 'formulario']);
// Route::post('/formulario',  [EditaisAuthController::class, 'formularioSave']);
 