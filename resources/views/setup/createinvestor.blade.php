@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
      <form method="post" action="{{route('create')}}">
      @csrf
        @method('post')
            <div class="card-details">
            <h3 class="title">Create New Investor </h3>
                <div class="row">  
                
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Investor Name</label>
                            <input id="card-holder" type="text" class="form-control" name="investor_name" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Contact Number</label>
                            <input id="card-holder" type="text"  name="contact_number" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Email Address</label>
                            <input id="card-holder" type="text" name="email_address" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">Address</label>
                            <input id="card-holder" type="text" name="" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div> 
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">Investment Amount</label>
                            <input id="card-holder" type="text" name="invest_amount" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder"> Current Rate Per Percentage</label>
                            <input id="card-holder" type="text" name="rate" class="form-control" placeholder="AUTO FROM DATABASE" aria-label="Card Holder" aria-describedby="basic-addon1">
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