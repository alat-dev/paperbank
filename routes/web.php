<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaperController;
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

Route::get('/', [PaperController::class,'index']);
// Route::get('/login',[LoginController])
Route::get('/login',[LoginController::class,'loginIndex']);
Route::get('/register',[LoginController::class,'registerIndex']);
Route::post('/register',[LoginController::class,'register']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/papers',[PaperController::class,'viewPapers']);
Route::get('/try', function(){

    return view('jumbotron');
});

Route::get('/createpaper',[PaperController::class,'viewCreate']);

Route::post('/createpaper',[PaperController::class,'create']);
Route::get('/papers/{paper}', [PaperController::class, 'show']);