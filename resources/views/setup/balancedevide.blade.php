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
                            <label for="card-holder">TODAYS DATE</label>
                            <input id="card-holder" type="text" name="invest_amount" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                        </div>
                    </div> 
                
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">Investor Name</label>
                            <input id="card-holder" type="text" class="form-control" name="investor_name" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">PERCENTAGE</label>
                            <input id="card-holder" type="text"  name="contact_number" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">CURRENT INVESTMENT</label>
                            <input id="card-holder" type="text" class="form-control" name="investor_name" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">PROFIT RATE PER PERCENT TODAY</label>
                            <input id="card-holder" type="text" name="email_address" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                            
                           </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">TOTAL AMOUNT</label>
                            <input id="card-holder" type="text" name="" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">TOTAL AMOUNT WITH PROFIT</label>
                            <input id="card-holder" type="text" name="" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
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