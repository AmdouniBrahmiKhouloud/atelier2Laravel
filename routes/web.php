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
/*
 * Les contraintes
 * */
Route::get('/hello/{name}', function ($name) {
    echo  "<h2>Hello, ".$name." </h2>";
})->whereAlpha('name');

Route::get('/user/{id}', function ($id) {
    echo  "<h2>Hello user with id :  ".$id." </h2>";
})->where('id','[0-9]+');
Route::get('/test/{id}', function ($id) {
    echo  "<h2>Hello user with id :  ".$id." </h2>";
});
/*
 * Les réponses
 * */
Route::get('resp',function (){
    return response("hello worls",200)
        ->header('Content_Type','text/plain');
});
Route::get('respJson',function (){
    return response()->json([
        'name'=>'khouloud',
        'age'=>23
    ]);
});
