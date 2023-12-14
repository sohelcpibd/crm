@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
      <form method="post" action="{{url('addproduct')}}" enctype="multipart/form-data">
        @csrf
        @method('post')
            <div class="card-details">
            <h3 class="title">Add New Product </h3>
                <div class="row">     
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Product Code</label>
                            <input id="card-holder" type="text" name="product_id"  class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product Name</label>
                            <input id="card-holder" type="text" name="product_name" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Product Catagory</label>
                            <input id="card-holder" type="text" name="product_catagory" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product Supplier</label>
                            
                            <select value="" id="card-holder" type="text" name="product_supplier" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">

                            @foreach ($supplier as $supplier)
                                 
                                <option  value='{{ $supplier->supplier_name }}'>{{ $supplier->supplier_name }}</option>
                                @endforeach  
                            </select>
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Origin</label>
                            <input id="card-holder" type="text" name="product_origin" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product Color</label>
                            <input id="card-holder" type="text" name="product_color" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>  
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Product image</label>
                            <input id="card-holder" type="file" name="image" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Product size</label>
                            <input id="card-holder" type="text" name="product_size" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>  
                   
                              
                    <div class="form-group col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </div>
            </div>
      </form>
    </div>
  </section>
</div>


@endsection