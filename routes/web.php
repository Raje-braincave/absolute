<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserManagementController;

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
Route::post('/register_save',[App\Http\Controllers\Auth\RegisterController::class,'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/admin',function(){
//     return view('admin.index');
// })->middleware(['auth','role:admin'])->name('admin.index');

//Role
Route::get('/role',[RoleController::class,'role']);
Route::post('/create',[RoleController::class,'createrole']);
Route::get('/editrole/{id}',[RoleController::class,'editrole']);
Route::post('/updaterole/{id}',[RoleController::class,'updaterole']);
Route::get('/deleterole/{id}',[RoleController::class,'delete']);

//Service Management
Route::get('/serive-management',[ManagementController::class, 'serviceindex']);


//finance
Route::get('/finance',[FinanceController::class, 'finance']);



//leads
Route::get('/leads',[LeadsController::class, 'leads']);

//crm
Route::get('/crm',[CrmController::class, 'crm']);

//User Manage management
Route::get('/usermanagement',[UserManagementController::class, 'user_management']);
Route::post('/addusermanagement',[UserManagementController::class, 'create_management']);
Route::get('/deleteusermanagement/{id}',[UserManagementController::class, 'delete_management']);
Route::get('/vieweusermanagement/{id}',[UserManagementController::class, 'edit_management']);
Route::post('/updatemanagement/{id}',[UserManagementController::class, 'update_management']);
Route::get('/role',[UserManagementController::class, 'role_management']);

