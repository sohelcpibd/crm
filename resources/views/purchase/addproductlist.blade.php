@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container"  >
     
      
    <form method="post" method="{{url('purchase-listing')}}">

            @csrf
            @method('post')
            <div class="card-details">
            <h3 class="title">Create Product listing  </h3>
                <div class="row">  
                      
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">ORDER NUMBER</label>
                            <input id="card-holder" name="order_no" type="text" class="form-control" value="{{ $orderid->order_no }}" aria-label="Card Holder" aria-describedby="basic-addon1">
                  
                        </div>
                        <div class="form-group col-sm-5">
                             <label for="card-holder">DATE</label>
                            <input id="card-holder" name="" type="text" class="form-control" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                      <div class="input-group col-sm-12">	
                      <div class="form-group col-sm-7">
                            <label for="card-holder">SUPPLIER NAME</label>
                            <input id="card-holder" name="" type="text" class="form-control"  value="{{ $orderid->title }}" aria-label="Card Holder" aria-describedby="basic-addon1">

                           
                                </div>
                        <div class="form-group col-sm-5">
                          
                        </div>
                    </div> 
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-3">
                            <label for="card-holder">SELECT PRODUCT</label>
                            <select value="" id="card-holder" type="text" name="product_name" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">

                                    @foreach ($product as $product)
                                        
                                        <option  value='{{ $product->product_name }}'>{{ $product->product_name }}</option>
                                        @endforeach  
                            </select>        
                            </div>
                      
                        <div class="form-group col-sm-2">
                            <label for="card-holder">Unit Price</label>
                            <input  type="text" name="unit_price" id="n1"   class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        
                        <div class="form-group col-sm-2">
                            <label for="card-holder">QTY</label>
                            <input  name="quantity" id="n2" type="text" onchange="mult();" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="card-holder">Total</label>
                            <input  name="total" id="n3" type="text"  class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-3">
                        <label for="card-holder"></label>
                         
                         </div>
                    </div> 
                   
                        <div class="container col-sm-12">	
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">CODE</th>
                                    <th scope="col">INTEM NAME</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">UNIT PRICE</th>
                                    <th scope="col">TOTAL</th>
                                    
                                    
                                    </tr>
                                </thead>
                                    <tbody>
<!--                                         -->
                                    </tbody>
                            </table>
                
                
                    </div>  
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                           
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">TOTAL AMOUNT</label>
                            <input id="card-holder" type="text" class="form-control" placeholder="AUTO FROM DATABASE" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>    
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            </div>
                        <div class="form-group col-sm-5">
                            <!-- <label for="card-holder">DISCOUNT</label>
                            <input id="card-holder" type="text" class="form-control" placeholder="AUTO FROM DATABASE" aria-label="Card Holder" aria-describedby="basic-addon1"> -->
                        </div>
                    </div> 
                    <div class="input-group col-sm-12">	
                             <div class="form-group col-sm-7">
                                   </div>
                        <div class="form-group col-sm-5">
                            <!-- <label for="card-holder">GRAND TOTAL</label>
                            <input id="card-holder" type="text" class="form-control" placeholder="AUTO FROM DATABASE" aria-label="Card Holder" aria-describedby="basic-addon1"> -->
                        </div>
                    </div>        
                    <div class="form-group col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">Add Product</button>
                    </div>
                </div>
            </div>
      </form>
    </div>
  </section>
</div>



                        <script>

                            function mult(){
                               
                                
                            
                            var  n1=  document.getElementById("n1").value;
                              var  n2 = document.getElementById("n2").value;
                             
                              var  n3=parseFloat(n1)*parseFloat(n2);
							  
                              
                                document.getElementById("n3").value= n3;
                               
                            }
                         
                            </script>


@endsection
