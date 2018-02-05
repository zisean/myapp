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

Route::get('/division/create', 'DivisionController@create')->name('division.create');

Route::post('/division/store', 'DivisionController@store')->name('division.store');

Route::get('/division', 'DivisionController@index')->name('division.index');

Route::get('/division/show/{id}', 'DivisionController@show')->name('division.show');

Route::get('/division/edit/{id}', 'DivisionController@edit')->name('division.edit');

Route::post('/division/update/{id}', 'DivisionController@update')->name('division.update');

// Routes for members

Route::get('/member', 'MemberController@index')->name('member.index');

Route::get('/member/create', 'MemberController@create')->name('division.create');

Route::post('/member/store', 'MemberController@store')->name('member.store');

Route::get('/memeber/update/{id}', 'MemberController@edit')->name('member.edit');

Route::post('/member/update/{id}', 'MemberController@update')->name('member.update');

Route::get('/member/show/{id}', 'MemberController@show')->name('member.show');