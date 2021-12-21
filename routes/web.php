<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\DatabController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/post', function () {
    return view('post');
});



Auth::routes();

Route::get('/listcard',[CardController::class,'showList']);
Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/create', 'CreateController@index')->name('create');
// Route::get('/listcard', 'PostController@listcard')->name('listcard');
//Route::post('/store', 'CreateController@index')->name('store');
//Route::middleware('auth')->post("/result",[DatabController::class,'addd']);

Route::get('/store',[DatabController::class,'index'])->name('store');
Route::post("/result",[DatabController::class,'addd'])->name('result');
Route::get('/delete',[DatabController::class,'del'])->name('delete');

Route::get('cardlist',[DatabController::class,'showLst'])->name('cardlist');

Route::get('/del/{id}',[DatabController::class,'del'])->name('del');
Route::get('/edit/{id}',[DatabController::class,'edit'])->name('edit');
Route::post('/cardupdate/{id}',[DatabController::class,'update'])->name('cardupdate');



