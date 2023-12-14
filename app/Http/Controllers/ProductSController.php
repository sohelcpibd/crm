<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Product;

class ProductSController extends Controller
{
    public function addproduct(request $request){
       $request->validate([
            'product_id'=>'required',
            'product_name'=>'required',
            'product_catagory'=>'required',
            'product_supplier'=>'required',
            'product_origin'=>'required',
            'product_color'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
            'product_size'=>'required'
        ]);
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
     
        $product = NEW Product;
        $product->image=$imageName;
        $product->product_id=$request->product_id;
        $product->product_name=$request->product_name;
        $product->product_catagory=$request->product_catagory;
        $product->product_supplier=$request->product_supplier;
        $product->product_origin=$request->product_origin;
        $product->product_color=$request->product_color;
        $product->product_size=$request->product_size;
        

        $product->save();
        

       
        }
    public function view(){       
    $supplier = Supplier::all(); // get all teams 
    return view('purchase.newproduct',['supplier' => $supplier]);

    }
    public function update(Request $request, $id){
        $request->validate([
            'product_id'=>'required',
            'product_name'=>'required',
            'product_catagory'=>'required',
            'product_supplier'=>'required',
            'product_origin'=>'required',
            'product_color'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'product_size'=>'required'
        ]);
        $product=Product::where('id',$id)->first();
        if(isset($request->image)){
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $product->image=$imageName;
        }
       
        
        $product->product_id=$request->product_id;
        $product->product_name=$request->product_name;
        $product->product_catagory=$request->product_catagory;
        $product->product_supplier=$request->product_supplier;
        $product->product_origin=$request->product_origin;
        $product->product_color=$request->product_color;
        $product->product_size=$request->product_size;
        $product->cost_price=$request->cost_price;
        $product->sale_price=$request->sale_price;
        $product->added_quantity=$request->added_quantity;
        $product->sold_quantity=$request->sold_quantity;
        $product->return_quantity=$request->return_quantity;
        $product->damage_quantity=$request->damage_quantity;
        $product->stock_quantity=$request->stock_quantity;

        

        $product->save();
        return redirect('productlist');
      
    }

    public function editingproduct($id){
   $product=Product::where('id',$id)->first();
   return view('setup.edit-product',['product'=>$product]);
    }
    public function productlist(){
        $product = Product::all(); // get all teams 
    return view('setup.productlist',['product' => $product]);

    }
}
