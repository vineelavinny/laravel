<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

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

Route::get('/email', function () {
    return new WelcomeMail();
});
route::get('/home','HelloController@index');
route::get('/service','ServiceController@index');
route::post('/ser','ServiceController@store');
//route::view('/sample','sample');
//route::view('/sample2','sample2');
route::get('/customers','CustomerController@index');
route::get('/customers/create','CustomerController@create');
route::post('/customers','CustomerController@store');
route::get('/customers/{customer}','CustomerController@show');
route::get('/customers/{customer}/edit','CustomerController@edit');
route::patch('/customers/{customer}','CustomerController@update');
route::delete('/customers/{customer}','CustomerController@destroy');