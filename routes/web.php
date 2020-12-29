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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','AdminController@index');

//Users Controller

Route::prefix('users')->group(function(){
    Route::get('/view', 'UsersController@view')->name('users.view');
    Route::get('/add', 'UsersController@add')->name('users.add');
    Route::post('/store', 'UsersController@store')->name('users.store');
    Route::get('/edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::post('/update/{id}', 'UsersController@update')->name('users.update');
    Route::get('/delete/{id}', 'UsersController@delete')->name('users.delete');
});
Route::prefix('profile')->group(function(){
    Route::get('/view', 'ManageProfileController@view')->name('profile.view');
    Route::get('/edit', 'ManageProfileController@edit')->name('profile.edit');
    Route::post('/store', 'ManageProfileController@update')->name('profile.update');
    Route::get('/change/password', 'ManageProfileController@password_change')->name('password.change');
    Route::post('/store/password', 'ManageProfileController@store_password')->name('password.store');
});
Route::prefix('student/class/')->group(function (){
    Route::get('/view', 'StudentClassController@view')->name('class.view');
    Route::get('/add', 'StudentClassController@add')->name('class.add');
    Route::post('/store', 'StudentClassController@store')->name('class.store');
    Route::get('/edit/{id}', 'StudentClassController@edit')->name('class.edit');
    Route::post('/update/{id}', 'StudentClassController@update')->name('class.update');
    Route::get('/delete/{id}', 'StudentClassController@delete')->name('class.delete');
});
Route::prefix('student/year/')->group(function (){
    Route::get('/view', 'StudentYearController@view')->name('year.view');
    Route::get('/add', 'StudentYearController@add')->name('year.add');
    Route::post('/store', 'StudentYearController@store')->name('year.store');
    Route::get('/edit/{id}', 'StudentYearController@edit')->name('year.edit');
    Route::post('/update/{id}', 'StudentYearController@update')->name('year.update');
    Route::get('/delete/{id}', 'StudentYearController@delete')->name('year.delete');
});
Route::prefix('student/group/')->group(function (){
    Route::get('/view', 'StudentGroupController@view')->name('group.view');
    Route::get('/add', 'StudentGroupController@add')->name('group.add');
    Route::post('/store', 'StudentGroupController@store')->name('group.store');
    Route::get('/edit/{id}', 'StudentGroupController@edit')->name('group.edit');
    Route::post('/update/{id}', 'StudentGroupController@update')->name('group.update');
    Route::get('/delete/{id}', 'StudentGroupController@delete')->name('group.delete');
});
Route::prefix('student/shift/')->group(function (){
    Route::get('/view', 'StudentShiftController@view')->name('shift.view');
    Route::get('/add', 'StudentShiftController@add')->name('shift.add');
    Route::post('/store', 'StudentShiftController@store')->name('shift.store');
    Route::get('/edit/{id}', 'StudentShiftController@edit')->name('shift.edit');
    Route::post('/update/{id}', 'StudentShiftController@update')->name('shift.update');
    Route::get('/delete/{id}', 'StudentShiftController@delete')->name('shift.delete');
});
Route::prefix('student/fee/')->group(function (){
    Route::get('/view', 'StudenFeeController@view')->name('fee.view');
    Route::get('/add', 'StudenFeeController@add')->name('fee.add');
    Route::post('/store', 'StudenFeeController@store')->name('fee.store');
    Route::get('/edit/{id}', 'StudenFeeController@edit')->name('fee.edit');
    Route::post('/update/{id}', 'StudenFeeController@update')->name('fee.update');
    Route::get('/delete/{id}', 'StudenFeeController@delete')->name('fee.delete');
});
Route::prefix('student/fee/amount/')->group(function (){
    Route::get('/view', 'FeeAmountController@view')->name('fee_amount.view');
    Route::get('/add', 'FeeAmountController@add')->name('fee.amount.add');
    Route::post('/store', 'FeeAmountController@store')->name('fee.amount.store');
    Route::get('/edit/{id}', 'FeeAmountController@edit')->name('fee.edit');
    Route::post('/update/{id}', 'FeeAmountController@update')->name('fee.update');
    Route::get('/delete/{id}', 'FeeAmountController@delete')->name('fee.delete');
});


