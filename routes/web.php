<?php

use App\Http\Controllers\ProfileController;
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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/sample',[\App\Http\Controllers\Sample\IndexController::class,'show']);
Route::get('/jscode',[\App\Http\Controllers\Sample\IndexController::class,'showJsCode']);


Route::get('csv', 'App\Http\Controllers\English\importCsvController@index')->name('csv');
Route::post('csv/upload', 'App\Http\Controllers\English\importCsvController@upload');



// Route::get('/english/question','\App\Http\Controllers\English\IndexController@randomSelect')->name('english.question');
// Route::get('/english/myword','\App\Http\Controllers\English\IndexController@myWords')->name('english.myword');

Route::controller('\App\Http\Controllers\English\IndexController')->group(function(){
    Route::get('/english','__invoke')->name('english.index');
    Route::get('/english/question','randomSelect')->name('english.question');
    Route::get('/english/myword','myWords')->name('english.myword');

    Route::get('/english/hoge','selectQuestions')->name('english.hoge');
});

Route::middleware('auth')->group(function(){
    Route::get('/english/create','\App\Http\Controllers\English\CreateController@show');
    Route::post('/english/create','\App\Http\Controllers\English\CreateController@add')->middleware('auth')->name('english.create');
    Route::get('/english/update/{wordId}','\App\Http\Controllers\English\UpdateController@show')->name('english.update');
    Route::post('/english/update/{wordId}','\App\Http\Controllers\English\UpdateController@update')->name('english.updateProcess');
    Route::delete('/english/delete/{wordId}','\App\Http\Controllers\English\DeleteController@delete')->name('english.delete');
});

Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('list', function () {
    return view('list');
})->name('list');