<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payout;
use App\Models\Receiving;

class PaymentController extends Controller
{
    public function create(){
        return view('finance.payment');
    }
    
    public function savepayment(request $request){
        $data=$request->validate([
            'order_no'=>'required',
            'date'=>'nullable',
            'title'=>'required',
            'description'=>'required',
            'total'=>'required',
            'discount'=>'required',
            'paid'=>'nullable',
            'due'=>'required',
            'payment_type'=>'required'
           
         ]);

            $payment= Payout::create($data);
            return redirect('makepayment');
    
    }

    public function getpayment(){
        return view('finance.recieve');
    }
    public function recieve(request $request){
        $data=$request->validate([
            'order_no'=>'required',
            'date'=>'nullable',
            'title'=>'required',
            'description'=>'required',
            'total'=>'required',
            'discount'=>'required',
            'received'=>'nullable',
            'due'=>'required',
            'payment_type'=>'required'
           
         ]);

            $payment= Receiving::create($data);
            return redirect('recievingpayment');
   
    }

    public function payorder(){
        return view('finance.createpayorder');
    }
}
