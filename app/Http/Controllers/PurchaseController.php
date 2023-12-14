<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Orders;
use App\Models\Product;
use App\Models\Orderitems;

class PurchaseController extends Controller
{
    public function createnewsupplier(){


        return view('purchase.addsupplier');
    }
    public function addnewsupplier(request $request){
        $data=$request->validate([
            'supplier_name'=>'required',
            'contact_no'=>'required',
            'email_address'=>'required',
            'address'=>'required',
            'origin'=>'required',
            'contact_person'=>'required'
           
        ]);
        $newsupplier= Supplier::create($data);
        return redirect('createnewsupplier');


       
    }
    public function newpurchase(){
        $supplier = Supplier::all(); // get all teams 
    return view('purchase.createorder',['supplier' => $supplier]);

      
    }

    public function addporoductlist(){
     
        $orderid= Orders::all()->last();
        $product = Product::all(); // get all teams 
        return view('purchase.addproductlist',['product' => $product],['orderid'=>$orderid],);
    
    }
   // purchaseitems
   public function purchaseitems(request $request){
    
    }
    

    public function purchaseorder(request $request){
        $data=$request->validate([
            'order_no'=>'required',
            'date'=>'required',
            'title'=>'nullable',
            'description'=>'required',
           
         ]);
       
            $neworder= Orders::create($data);
            return redirect('purchase-listing');
  
    }

    public function Orderitems(request $request){
        $data=$request->validate([
            'order_no'=>'required',
            'product_name'=>'required',
            'unit_price'=>'nullable',
            'quantity'=>'required',
            'total'=>'required',
            
           
         ]);
       
            $neworder= Orderitems::create($data);
            return redirect('purchase-listing');
  
    }




}
