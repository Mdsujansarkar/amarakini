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


Route::get( '/',     			            'LandingPageController@index' )				->name('land.index');
Route::get( '/shop', 			            'ShopController@index' )					->name('shop.index');
Route::get( '/shop/{product}',              'ShopController@show' )						->name('shop.show');

Route::get( '/cart',  			            'CartController@index' )					->name('cart.index');

Route::post( '/cart',  			            'CartController@store' )					->name('cart.store');

Route::delete( '/cart/{product}',  			'CartController@destroy' )					->name('cart.destroy');
Route::patch( '/cart/{product}',  			'CartController@update' )					->name('cart.update');

Route::post( '/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater' )->name('cart.switchToSaveForLater');
Route::get( '/checkout', 'CheckOutController@index' )                   ->name('checkout.index');
Auth::routes();

Route::get( '/home', 			            'HomeController@index' )					->name('home');
