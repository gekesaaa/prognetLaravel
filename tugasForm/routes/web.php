<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userShow;

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




Route::post('/showdata', [userShow::class, 'show']); /* digunakan untuk mengganti  */
