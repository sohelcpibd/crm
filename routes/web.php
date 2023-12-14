<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CompanySetup;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductSController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/companyregister',[CompanySetup::class,'register']);
Route::post('/companyregister',[CompanySetup::class,'save'])->name('save');

// -  - add product
Route::get('/addnewproduct',[ProductSController::class,'view']);
Route::post('/addproduct',[ProductSController::class,'addproduct']);
Route::get('/productlist',[ProductSController::class,'productlist']);
Route::get('/edit-product/{id}',[ProductSController::class,'editingproduct']);
Route::put('/update-product/{id}',[ProductSController::class,'update']);


Route::get('/addnewcustomer',[SalesController::class,'newcustomer']);
Route::post('/addcustomer',[SalesController::class,'addcustomer'])->name('addcustomer');
//
Route::get('/createorder',[SalesController::class,'createorder']);
Route::post('/neworder',[SalesController::class,'createneworder']);

Route::get('/createcustomersales',[SalesController::class,'createnewsales']);
Route::post('/sales-listing',[SalesController::class,'salesproductlist']);



Route::get('/createnewsupplier',[PurchaseController::class,'createnewsupplier']);
Route::post('/createnewsupplier',[PurchaseController::class,'addnewsupplier'])->name('addnewsupplier');

Route::get('/newpurchaseorder',[PurchaseController::class,'newpurchase']);
Route::post('/purchaseorder',[PurchaseController::class,'purchaseorder']);

Route::get('/purchase-listing',[PurchaseController::class,'addporoductlist']);
Route::post('/purchase-listing',[PurchaseController::class,'Orderitems']);

Route::post('/getdata',[PurchaseController::class,'purchaseitems']);

//Reports

Route::get('/orders-list',[ReportController::class,'orderlist']);
Route::get('/payout-list',[ReportController::class,'paid']);
Route::get('/recieving-payment',[ReportController::class,'recieved']);
Route::get('/recieving-payment/{id}',[ReportController::class,'recieved']);





Route::get('/createpayorder',[PaymentController::class,'payorder']);

Route::get('/makepayment',[PaymentController::class,'create']);
Route::post('/makepayment',[PaymentController::class,'savepayment']);
Route::get('/recievingpayment',[PaymentController::class,'getpayment']);
Route::post('/recievingpayment',[PaymentController::class,'recieve']);


Route::get('/addstock',[StockController::class,'addstock']);
Route::get('/stockout',[StockController::class,'stockout']);
Route::get('/stockquery',[StockController::class,'stockinfo']);

Route::get('/investor-info',[InvestorController::class,'investinfo']);


Route::get('/addinvestor',[InvestorController::class,'view']);
Route::post('/addinvestor',[InvestorController::class,'create'])->name('create');




