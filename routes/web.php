<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ViewController;

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
Route::get('/view', 'ViewController@index')->name('view');
Route::get('/view/create', 'ViewController@create')->name('create');
Route::post('/view/store', 'ViewController@store')->name('store');
Route::get('/view/{id}', 'ViewController@show')->name('show');
Route::get('/view/{id}/edit', 'ViewController@edit')->name('edit');
Route::put('/view/{id}/update', 'ViewController@update')->name('update');
Route::get('/view/{id}/delete', 'ViewController@delete')->name('delete');
