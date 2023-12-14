<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Orderitems;
use App\Models\Product;

class SalesController extends Controller
{
    //Add new customer Form
    public function newcustomer(){

        return view('sales.addcustomer');
    }
    //Save new customer
    public function addcustomer(request $request){
        $data=$request->validate([
            'customer_name'=>'required',
            'contact_no'=>'required',
            'email'=>'required',
            'address'=>'required',
            'contact_person'=>'required',
            'origin'=>'required'
           
        ]);
        $newcustomer= Customers::create($data);
        return redirect('addnewcustomer');
       
    }
    //

  
    //New order Form
    public function createorder(){

        $customer = Customers::all(); // get all teams 
        return view('sales.createorder',['customer' => $customer]);
    
       
    }
    // Save order Form
    public function createneworder(request $request){
        $data=$request->validate([
            'order_no'=>'required',
            'date'=>'required',
            'title'=>'required',
            'description'=>'required'
           
        ]);
         $addorder= Orders::create($data);
         return redirect('createcustomersales');
        
    
    
       }
       // Open sales form with order number
       public function createnewsales(){
        $orderid= Orders::all()->last();
        $product = Product::all(); // get all teams 
        // $orderlist= Orderitems::all()->where('orderid', $orderid->order_no)->get();
        
        return view('sales.createcustomersales',['product' => $product],['orderid'=>$orderid],);

        
         }
        
       public function salesproductlist(request $request){
        $data=$request->validate([
            'order_no'=>'required',
            'product_name'=>'required',
            'unit_price'=>'nullable',
            'quantity'=>'required',
            'total'=>'required',
            
           
         ]);
       
            $neworder= Orderitems::create($data);
            return redirect('createcustomersales');
            
  
    }
    

}
