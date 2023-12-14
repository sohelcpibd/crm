@extends('layout.app')

@section('content')
<section class="payment-form dark">
    <div class="container">
     
    <form method="post" action="{{url('makepayment')}}" >
      @csrf
            @method('post') 
            <div class="card-details">
            <h3 class="title"> Payment Invoice </h3>
                <div class="row">  
                      
                    <div class="input-group col-sm-12">
                            <div class="form-group col-sm-3">
                            <label for="card-holder">ORDER NUMBER</label>
                            <input id="card-holder" type="text" name="order_no" class="form-control" placeholder="Search by number" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="card-holder">DATE</label>
                            <input id="card-holder" type="text" name="date" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-6">
                        <input id="card-holder" type="text" name="title" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        

                        </div>
                        <div class="form-group col-sm-6">
                        </div>
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
                                    
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>                                    
                                        </tr>
                                    
                                            
                                    </tbody>
                            </table>
                
                
                    </div>  
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                                 
                          </div>
                        <div class="form-group col-sm-5">
                            <div>
                            <label for="card-holder">TOTAL AMOUNT</label>
                            <input id="card-holder" type="text" name="total" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>    
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                             </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">DISCOUNT</label>
                            <input id="card-holder" type="text" name="discount" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                        <label for="card-holder">DESCRIPTION</label>
                            <textarea id="card-holder" type="text" name="description" class="form-control" placeholder="AUTO FROM DATABASE" aria-label="Card Holder" aria-describedby="basic-addon1"> </textarea>
                   
                            </div>
                        <div class="form-group col-sm-5">
                        <label for="card-holder"> PAID AMOUNT</label>
                            <input id="card-holder" type="text" name="paid" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                         
                        </div>
                    </div>      
                    <div class="input-group col-sm-12">	
                        <div class="form-group col-sm-7">
                        <label for="card-holder"> PAYMENT TYPE</label>
                            <select id="card-holder" type="text" name="payment_type" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                                <option value="Cash">Cash </option>
                                <option value="Bank">Bank </option>
                                <option value="Credit"> Credit</option>
                            </select>
                                    </div>
                        <div class="form-group col-sm-5">
                            <label for="card-holder">DUE AMOUNT</label>
                             <input id="card-holder" type="text" name="due" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                    </div>  
                    <div class="form-group col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">Proceed</button>
                    </div>
                </div>
            </div>
      </form>
    </div>
  </section>
</div>


@endsection