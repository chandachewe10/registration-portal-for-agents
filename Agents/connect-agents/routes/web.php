<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsTransactions;
use App\Http\Controllers\Clients\Invoice;
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
/*
Route::post('save_data', [AgentsTransactions::class, 'insert_transactions'])->middleware(['auth'])->name('insert');
*/


// Store and Download Clients Invoice
Route::post('store_invoice', [Invoice::class, 'clients_invoice'])->middleware(['auth','Clients'])->name('store_invoice');





Route::get('/', function () {
    return view('welcome');
});






// Agents Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.agents');
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
