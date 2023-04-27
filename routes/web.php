<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\CrmController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Service Management
Route::get('/serive-management',[ManagementController::class, 'serviceindex']);


//finance
Route::get('/finance',[FinanceController::class, 'finance']);



//leads
Route::get('/leads',[LeadsController::class, 'leads']);

//crm
Route::get('/crm',[CrmController::class, 'crm']);
