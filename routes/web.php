<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Controller;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'IndexController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::match(['get', 'post'], 'produit', 'IndexController@listeProduit');
    Route::match(['get', 'post'], 'fiche', 'IndexController@ficheProduit');
    Route::match(['get', 'post'], 'produit/add', 'IndexController@ajouterProduit');
    Route::match(['get', 'post'], 'produit/upd', 'IndexController@modifierProduit');
    Route::get('produit/del', 'IndexController@supprProduit');
});

//Route::get('cat', 'DataController@getCategory');
//Route::get('prod', 'DataController@getProduct');



