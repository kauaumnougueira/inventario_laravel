<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/cliente',  [ClienteController::class, 'jsonClientes']);
Route::post('/cliente', [ClienteController::class, 'createCliente']);
Route::put('/cliente', [ClienteController::class, 'updateCliente']);
Route::delete('/cliente', [ClienteController::class, 'deleteCliente']);
