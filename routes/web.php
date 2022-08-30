<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HyipController;

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

Route::get('/', [HyipController::class, 'index']);
Route::post('/add-hyip', [HyipController::class, 'addHyip']);
