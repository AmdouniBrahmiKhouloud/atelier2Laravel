<?php

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

/*
 * Routing simple
 */
Route::get('/page1', function () {
    echo "my first page";
})->name("page1");
/*
 * Routing paramétrés
 * */
Route::get('/page2/{name}', function ($name) {
    echo "<h1> Welcome ".$name. "</h1>";
})->name("page2");
Route::get('/page3/{name}/{age}', function ($name,$age) {
    echo "<h1> Welcome ".$name. " your age is ".$age."</h1>";
});
/*
 * Routing paramétrés optionnel
 * */
Route::get('/page4/{name?}', function ($name="user") {
    echo "<h1> Welcome ".$name. "</h1>";
});
/*
 * Route: Redirection des routes
 * */
Route::get('/redirect', function () {
    return redirect('/page4');
});
