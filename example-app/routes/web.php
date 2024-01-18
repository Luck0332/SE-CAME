<?php
use App\Http\Controllers\Mycontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_titles;
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

Route::resource("titles", C_titles::class);

Route::get("/my-controller", [MyController::class, 'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
});


Route::resource('/my-controller',MyController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('home');
});


