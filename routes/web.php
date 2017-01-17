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

// explicitne routes + named routes to za as je meno a potom sa to da pouzit za pomocou metody route('xxxx') a najde spravnu cestu :D
Route::get('user/login', [
    'as' => 'login',
    'uses' => 'UserController@getLogin'
]);

Route::get('user/register', [
    'as' => 'register',
    'uses' => 'UserController@getRegister'
]);

//toto sa vola implicitne routes
//Route::controller('user', 'UserController');


//toto je vychytavka..hodi ti vsetky routes podla RESTFUL metod, ktore mas v danom controlleri
//Route::resource('post', 'PostController');