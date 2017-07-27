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
Route::get('/users', function () {
    return 'users';
});
Route::get('/users/{id}/{name}',function($id,$name){
    return 'User id '.$id.$name;
})->where('id','[0-9]+');
Route::get('/contact','UserController@contact');
Route::get('/bootstarp','UserController@bootstarp');
Route::get('/Home',function (){
    return view('Touche.index');
});