<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransbankController;


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

Route::get('/',[TransbankController::class,"inicio"]);



Route::post('/iniciar_pago',[TransbankController::class,"iniciar_pago"]);



Route::get('/confirmar_pago',[TransbankController::class,"confirmar_pago"]);
// Route::post('/confirmar_pago',[TransbankController::class,"confirmar_pago"]);
// Route::post('/confirmar_pago',[TransbankController::class,"confirmar_pago"]);
// Route::get('/confirmar_pago2',[TransbankController::class,"confirmar_pago"]);
