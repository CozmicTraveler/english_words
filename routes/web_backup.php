<?php

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
Route::get('/sample',[\App\Http\Controllers\Sample\IndexController::class,'show']);
Route::get('/jscode',[\App\Http\Controllers\Sample\IndexController::class,'showJsCode']);
Route::get('/english',\App\Http\Controllers\English\IndexController::class)->name('english.index');

Route::get('csv', 'App\Http\Controllers\English\importCsvController@index')->name('csv');
Route::post('csv/upload', 'App\Http\Controllers\English\importCsvController@upload');

Route::get('/english/create','\App\Http\Controllers\English\CreateController@show');
Route::post('/english/create','\App\Http\Controllers\English\CreateController@add')->name('english.create');

Route::get('/english/question','\App\Http\Controllers\English\IndexController@randomSelect')->name('english.question');