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

Route::view('/', 'welcome')->name('home');

// Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');


Route::get('/user', 'UsersController@dashboard')->name('dashboard');

// Shortening Links
Route::post('/shorten', 'LinksController@store')->name('link.store');

// No Javascript Redirection
Route::view('/nojs', 'errors.nojs');

// Pages
Route::view('/privacy-policy', 'pages.privacy')->name('privacy');
Route::view('/terms-and-conditions', 'pages.terms')->name('terms');



// Admin
Route::prefix('/admin')->group(function(){
    Route::redirect('/', '/admin/dashboard');
    Route::view('/dashboard', 'admin.index')->name('manage.dashboard');
    Route::view('/users', 'admin.users')->name('manage.users');
    Route::view('/pages', 'admin.pages')->name('manage.pages');
    Route::view('/new-page', 'admin.new-page')->name('manage.new-page');
    Route::view('/edit-page', 'admin.edit-page')->name('manage.edit-page');
    Route::view('/settings', 'admin.settings')->name('manage.settings');
});


// Redirect to long url
Route::get('{hash}', 'LinksController@redirect')->name('link.redirect');
