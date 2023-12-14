@extends('layout.app')

@section('content')

    <div class="container">
      <h5 href="">Recieving Payment list</h5>
     
    <table class="table table-bordered">
  <thead>
    <tr>
   
    <th scope="col">SL</th>
      <th scope="col">Order No</th>
      <th scope="col">Date</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Total</th>
      <th scope="col">Discount</th>
      <th scope="col">Paid</th>
      <th scope="col">Due</th>
      <th scope="col">Payment_type</th>
      
   
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach($orders as $orders)
    <tr>
     <td>{{ $loop->index +1 }}</td>
      <td>{{ $orders['order_no'] }}</td>
         <td>{{ $orders['date'] }}</td>
      <td>{{ $orders['title'] }}</td>
      <td>{{ $orders['description'] }}</td>
      <td>{{ $orders['total'] }}</td>
      <td>{{ $orders['discount'] }}</td>
      <td>{{ $orders['paid'] }}</td>
      <td>{{ $orders['due'] }}</td>
      <td>{{ $orders['payment_type'] }}</td>
      
     
      <td><a href="edit-product/{{$orders->id}}" type="submit" class="btn btn-sm btn-success btn-block">Edit</a>
      <a href="delete-product/{{$orders->id}}" type="submit" class="btn btn-sm btn-danger btn-block">Delete</a>
       </td>

    

    
    </tr>
    @endforeach
        
  </tbody>
</table>
    </div>
  
</div>


@endsection