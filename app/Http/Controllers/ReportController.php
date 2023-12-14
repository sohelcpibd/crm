<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Payout;
use App\Models\Receiving;

class ReportController extends Controller
{
    //Order report
      //order report
      public function orderlist(){
        $orders = Orders::all(); // get all teams 
    return view('reports.orders',['orders' => $orders]);

    }
     //Paid report
     
      public function paid(){
        $orders = Payout::all(); // get all teams 
    return view('reports.paymentreport',['orders' => $orders]);

    }
     //Recieving  report
     
     public function recieved(){
        $orders = Receiving::all(); // get all teams 
    return view('reports.recievingpayment',['orders' => $orders]);

    }
}
