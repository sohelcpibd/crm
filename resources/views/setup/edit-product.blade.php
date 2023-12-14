@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
      <form method="POST" action="/update-product/{{$product->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="card-details">
            <h3 class="title">Edit Product Details and Stock  </h3>
                <div class="row">   
                <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Product Code</label>
                            <input id="card-holder" value="{{$product->product_id}}" type="text" name="product_id"  class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product Name</label>
                            <input id="card-holder" type="text"value="{{$product->product_name}}" name="product_name" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Product Catagory</label>
                            <input id="card-holder" type="text" value="{{$product->product_catagory}}" name="product_catagory" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product Supplier</label>
                            <input id="card-holder" type="text" value="{{$product->product_supplier}}" name="product_supplier" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                       
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Origin</label>
                            <input id="card-holder" type="text" value="{{$product->product_origin}}" name="product_origin" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product Color</label>
                            <input id="card-holder" type="text" value="{{$product->product_color}}" name="product_color" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>  
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Product image</label>
                            <input id="card-holder" type="file" name="image" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product size</label>
                            <input id="card-holder" type="text" name="product_size" value="{{$product->product_size}}" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>  
                    
                    
                

                <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Cost Price</label>
                            <input id="card-holder" type="text" name="cost_price" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>                      
                    </div> 
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Sale Price</label>
                            <input id="card-holder" type="text" name="sale_price" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Added Quantity</label>
                            <input id="card-holder" type="text" name="added_quantity" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Sold Quantity</label>
                            <input id="card-holder" type="text"  name="sold_quantity" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Return Quantity</label>
                            <input id="card-holder" type="text" name="return_quantity" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Damaged Quantity</label>
                            <input id="card-holder" type="text"name="damage_quantity" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Stock Quantity</label>
                            <input id="card-holder" type="text" name="stock_quantity" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
            </div>
      </form>
    </div>
  </section>
</div>


@endsection