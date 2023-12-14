@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
      
    <form method="post" action="{{url('neworder')}}" >
           @csrf
            @method('post') 
            <div class="card-details">
            <h3 class="title">CREATE CUSTOMER ORDER  </h3>
                <div class="row">  
                      
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">ORDER NUMBER</label>
                            <input id="card-holder" type="text" name="order_no" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                             </div>
                        <div class="form-group col-sm-5">
                             <label for="card-holder">DATE</label>
                            <input id="card-holder" type="date" name="date" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                      <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                        <select value="" id="card-holder" type="text" name="title" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">

                      @foreach ($customer as $customer)
                          
                          <option  value='{{ $customer->customer_name }}'>{{ $customer->customer_name }}</option>
                          @endforeach  
                      </select>
                           
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">DESCRIPTION</label>
                            <input id="card-holder" type="text" name="description" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
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