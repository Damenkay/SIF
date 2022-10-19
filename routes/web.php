<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::get('/', [StudentController::class, 'index']);
// Route::get('/create', [StudentController::class, 'create']);
// Route::post('/create', [StudentController::class, 'store']);

Route::get('/', 'StudentController@index')->name('index');
Route::get('/create', 'StudentController@create')->name('create')-> middleware('user.auth');
Route::group (['middleware'=>'user.auth'], function(){
    Route::post('/create', 'StudentController@store')->name('store');
    Route::get('show/{id}', 'StudentController@show')->name('show');
    Route::get('edit/{id}', 'StudentController@edit')->name('edit');
    Route::post('update/{id}', 'StudentController@update')->name('update');
    Route::get('delete/{id}', 'StudentController@delete')->name('delete');
});

Route::get('register', [UserController::class, 'index'])->name('index');
Route::post('register', [UserController::class, 'postRegister'])->name('postRegister');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'postLogin'])->name('postLogin');
