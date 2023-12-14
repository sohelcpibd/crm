@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
      <form method="post" action="{{route('addcustomer')}}">
        @csrf
        @method('post')
            <div class="card-details">
            <h3 class="title">Create New Customer </h3>
                <div class="row">  
                   
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Customer Name</label>
                            <input id="card-holder" type="text" name="customer_name" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Contact Number</label>
                            <input id="card-holder" type="text" name="contact_no" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Email Address</label>
                            <input id="card-holder" type="text" name="email" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Address</label>
                            <input id="card-holder" type="text" name="address" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div> 
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Contact Person</label>
                            <input id="card-holder" type="text" name="contact_person" class="form-control" placeholder="AUTO FROM LOGIN" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Origin</label>
                            <input id="card-holder" type="text" name="origin" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
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