<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepanController;


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
    return ('home');
});

Route::get('/depan', [DepanController::class, 'index']);

Route::get('/home', function () {
    return ('home');
});
