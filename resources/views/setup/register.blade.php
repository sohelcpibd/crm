@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
      <form method="post" action="{{route('save')}}">
        @csrf
        @method('post')
            <div class="card-details">
                <h3 class="title">Register Your Company </h3>
                <div class="row">     
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Company Name</label>
                            <input id="card-holder" type="text" name="company_name" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Contact Number</label>
                            <input id="card-holder" type="text" name="contact_number" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Email Address</label>
                            <input id="card-holder" type="text" name="email_address" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Address</label>
                            <input id="card-holder" type="text" name="company_address" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div> 
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Account Details</label>
                            <input id="card-holder" type="text" name="account_details" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">TRN Number</label>
                            <input id="card-holder" type="text" name="trn_no" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>   
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Company logo</label>
                            <input id="card-holder" type="file" name="logo" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
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



@endsection