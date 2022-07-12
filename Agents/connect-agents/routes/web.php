<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsTransactions;
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



// Save Customers Data
Route::post('save_data', [AgentsTransactions::class, 'insert_transactions'])->middleware(['auth'])->name('insert');







Route::get('/', function () {
    return view('welcome');
});

// Agents Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth','Agents'])->name('dashboard');


// Clients Dashboard
Route::get('/clients', function () {
    return view('dashboard.clients');
})->middleware(['auth','Clients'])->name('clients');

// Admin Dashboard
Route::get('/admins', function () {
    return view('dashboard.admins');
})->middleware(['auth','Admins'])->name('admins');

require __DIR__.'/auth.php';
