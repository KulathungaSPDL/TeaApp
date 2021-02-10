<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [Controllers\HomeController::class, 'profile'])->name('admin.profile');
Route::get('/updateAdminProfile', [Controllers\HomeController::class, 'adminProfile'])->name('admin.updateAdminProfile');
Route::get('/collectorRegistation', [Controllers\HomeController::class, 'collecttorReg'])->name('admin.collectorRegistation');
Route::get('/customerRegistation', [Controllers\HomeController::class, 'customerReg'])->name('admin.customerRegistation');
Route::post('/AdminProfUpdate', [Controllers\AdminUpdateController::class, 'updateAdmin'])->name('admin.updateAdminProfile');
Route::post('/adminPicUpdate', [Controllers\AdminUpdateController::class, 'adminpicUp'])->name('admin.updateAdminProfile');
Route::get('/createDailyInfo', [Controllers\HomeController::class, 'dailyInfo'])->name('admin.createDailyInfo');
Route::get('/collectorDet', [Controllers\HomeController::class, 'collecDet'])->name('admin.collectorDet');
Route::get('/customerDet', [Controllers\HomeController::class, 'customerDet'])->name('admin.customerDet');

Route::post('/collectorRegistation', [Controllers\CollectorCreateController::class, 'collecterRegister'])->name('admin.collectorRegistation');

Route::post('/newCustomerReg', [Controllers\CustomerCreateController::class, 'customerRegister'])->name('admin.customerRegistation');
 
Route::post('/saveDailyInfo', [Controllers\DailyCollectInfoController::class, 'insertdailyInfo'])->name('admin.createDailyInfo');

Route::get('/autocomplete', [Controllers\DailyCollectInfoController::class, 'autocomplete'])->name('admin.createDailyInfo');

//return value to collector table
Route::get('/collectorDet', [Controllers\CollectorCreateController::class, 'collectDet'])->name('admin.collectorDet');

//return value to customer table
Route::get('/customerDet', [Controllers\CustomerCreateController::class, 'customerDet'])->name('admin.customerDet');

//delete customer details
Route::get('/deleteCustomer/{id}', [Controllers\CustomerCreateController::class, 'customerDelete']);

//edit customer details
Route::get('/editCustomer/{id}', [Controllers\CustomerCreateController::class, 'customerEdit']);

//update customer
Route::post('/updateCustomer', [Controllers\CustomerCreateController::class, 'customerUpdate'])->name('admin.customerDet');

//delete collector details
Route::get('/deleteCollector/{id}', [Controllers\CollectorCreateController::class, 'collectorDelete']);

//edit collector details
Route::get('/editCollector/{id}', [Controllers\CollectorCreateController::class, 'collectorEdit']);

//update collector details
Route::get('/updateCollector', [Controllers\CollectorCreateController::class, 'collectorUpdate'])->name('admin.collectorDet');
