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

// Example Routes
//Route::view('/', 'landing');
//Route::match(['get', 'post'], '/dashboard', function(){
//    return view('dashboard');
//});

Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');

Route::get('/logout' , 'Auth\LoginController@logout');

Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/dashboard', function (){
        return view('dashboard');
    });

    Route::get('/accounts',              'AccountsController@index')->name('accounts');
    Route::get('/accounts/create',       'AccountsController@create')->name('accounts.create');
    Route::get('/accounts/view/{id}',    'AccountsController@show')->name('accounts.show');
    Route::post('/accounts/store',       'AccountsController@store')->name('accounts.store');

    Route::get('/contacts',              'ContactsController@index')->name('contacts');
    Route::get('/contacts/view/{id}',    'ContactsController@show')->name('contacts.show');

    Route::get('/quotes',                'QuotesController@index')->name('quotes');
    Route::get('/quotes/create',         'QuotesController@create')->name('quotes.create');
    Route::get('/quotes/view/{id}',      'QuotesController@show')->name('quotes.show');
    Route::post('/quotes/store',         'QuotesController@store')->name('quotes.store');
    Route::get('/quotes/{id}/download',  'QuotesController@download')->name('quotes.download');
    Route::get('/quotes/{id}/delete',    'QuotesController@destroy')->name('quotes.delete');





