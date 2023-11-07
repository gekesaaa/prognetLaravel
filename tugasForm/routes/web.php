<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/formData', function () {
    return view('formData');
});

Route::post('/store', [UserController::class, 'store']);
Route::get('/index', [UserController::class, 'index']);
Route::get('/show/{user:nim}', [UserController::class, 'show']);
Route::get('/edit/{user:nim}', [UserController::class, 'edit']);
Route::post('/update/{user:nim}', [UserController::class, 'update']);
Route::post('/delete/{user:nim}', [UserController::class, 'destroy']);
 
/* digunakan untuk mengganti  */
