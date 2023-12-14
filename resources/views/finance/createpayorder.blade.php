@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
      <form>
            <div class="card-details">
            <h3 class="title">Create General Order </h3>
                <div class="row">  
                      
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-7">
                            <label for="card-holder">ORDER NUMBER</label>
                            <input id="card-holder" type="text" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">DATE</label>
                            <input id="card-holder" type="date" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                            <label for="card-holder">CATAGORY</label>
                            <select id="card-holder"  class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1"></select>
                        </div>
                        <div class="form-group col-sm-5">
                        </div>
                    </div>  
                      
                    <div class="form-group col-sm-4">
                    <button type="button" class="btn btn-primary btn-block">Save</button>
                    </div>
                </div>
            </div>
      </form>
    </div>
  </section>
</div>


@endsection