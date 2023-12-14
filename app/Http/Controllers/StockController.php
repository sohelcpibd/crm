<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class StockController extends Controller
{
    //
    public function newproduct(){
        return view('purchase.newproduct');
    }

    //
    public function newsale(){
        return view('sales.createsales');
    }
    public function newcustomer(){
        return view('sales.addcustomer');
    }
   
    public function addstock(){
        return view('stock.add-stock');
    }
    public function stockout(){
        return view('stock.order-prep');
    }
    public function stockinfo(){
        return view('stock.stock-query');
    }
   
  
    public function addinvestor(){
        return view('setup.createinvestor');
    }

}