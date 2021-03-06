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

Route::get('/hsk', function () { return view('hsk.frontpage'); });
Route::get('/hsk/trial', function () { return view('hsk.trial'); });

Route::post('/hsk/trial/email', 'sendEmail@trial');
Route::get('/hsk/join/{classType?}', function ($classType = 'individual')
        { return view('hsk.join', ['type' =>$classType]); });
Route::post('hsk/join/email', 'sendEmail@join');