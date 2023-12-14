@extends('layout.app')

@section('content')

    <div class="container">
     
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">INVESTOR NAME</th>
      <th scope="col">CONTACT</th>
      <th scope="col">EMAIL ADDRESS</th>
       <th scope="col">INVEST AMOUNT</th>
      <th scope="col">INVEST IN PERCENTAGE</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($investor as $investor)
    <tr>
      
      <td>{{ $investor['id'] }}</td>
      <td>{{ $investor['investor_name'] }}</td>
      <td>{{$investor['contact_number']}}</td>
      <td>{{$investor['email_address']}}</td>
      <td>{{$investor['invest_amount']}}</td>
      <td>{{$investor['rate']}}</td>
    

    
    </tr>
    @endforeach
        
  </tbody>
</table>
    </div>
  
</div>


@endsection