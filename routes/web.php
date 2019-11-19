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

//RouteJobsController
Route::resource('Jobs', 'JobsController');

//RouteSignup
Route::get('signup', 'UsersController@signup')->name('signup');
Route::post('signup', 'UsersController@signup_store')->name('signup.store');

//RouteLogin
Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');

//RouteLogout
Route::get('logout', 'SessionsController@logout')->name('logout');

//RouteAdminDashboard Sementara
Route::get('dashboard', 'Admin\DashboardAdminController@index')->name('admin.dashboard');

//RoutePelamarDashboard Sementara
Route::get('profile', 'Pelamar\DashoardPelamarController@index')->name('pelamar.dashboard');