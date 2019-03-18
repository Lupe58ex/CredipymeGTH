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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('assitances', 'AssistanceController');
Route::resource('schedules', 'ScheduleController');
Route::resource('employees', 'EmployeeController');
Route::resource('employee_schedules', 'EmployeeScheduleController');



Route::get('/home', 'HomeController@index')->name('home');
