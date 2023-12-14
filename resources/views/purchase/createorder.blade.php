@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
    <form method="post" action="{{url('purchaseorder')}}" >
      @csrf
            @method('post') 

            <div class="card-details">
            <h3 class="title">CREATE SUPPLIER ORDER  </h3>
                <div class="row"> 
                
        
                      
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">ORDER NUMBER</label>
                            <input id="card-holder" name="order_no" type="text" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                             </div>
                        <div class="form-group col-sm-5">
                             <label for="card-holder">DATE</label>
                            <input id="card-holder" name="date" type="date" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                      <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                        <label for="card-holder">SELECT SUPPLIER</label>
                        <select value="" id="card-holder" type="text" name="title" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">

                                @foreach ($supplier as $supplier)
                                    
                                    <option  value='{{ $supplier->supplier_name }}'>{{ $supplier->supplier_name }}</option>
                                    @endforeach  
                                </select>
                           
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">DESCRIPTION</label>
                            <input id="card-holder" name="description" type="text" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
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