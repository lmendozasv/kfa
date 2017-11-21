<?php

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

//Route::get('names', function()
//{
//    return array(
//      1 => "John",
//      2 => "Mary",
//      3 => "Steven"
//    );
//});
//
//Route::get('names/{id}', function($id)
//{
//    $names = array(
//      1 => "John",
//      2 => "Mary",
//      3 => "Steven"
//    );    
//    return array($id => $names[$id]);
//});
//

Route::resource('ordenes', 'ordenesController',
                ['only' => [ 'store', 'update', 'destroy', 'show']]);