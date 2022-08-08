<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;

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
    return view('welcome');
});
Route::get('/main', [PanelController::class, 'index']);
Route::post('/main/checklogin', [PanelController::class, 'checklogin']);
Route::get('main/successlogin', [PanelController::class, 'successlogin']);
Route::get('main/logout', [PanelController::class, 'logout']);
