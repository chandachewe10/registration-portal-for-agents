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

Route::get('/elianaconnect', function () {
    return view('welcome');
})->name('welcomee');


Route::get('/agency', function () {
    return view('registerr');
})->name('signup');

Route::get('/addord', function () {
    return view('vendor.voyager.addord');
})->name('addord');

Route::get('/home', function () {
    return redirect()->route('voyager.dashboard');
})->name('HOME');

Route::get('/referal', 'App\Http\Controllers\ReferralController@index');
Route::post('/referral', 'App\Http\Controllers\ReferralController@ord')->name('referral');

Route::group(['prefix' => 'ecagency'], function () {
    Voyager::routes();
});

Auth::routes();


