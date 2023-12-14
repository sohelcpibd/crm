@extends('layout.app')

@section('content')

    <div class="container">
      <h3 href="">Product Stock Report</h3>
     
    <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">CODE</th>
      <th scope="col">IMAGE</th>
      <th scope="col">NAME</th>
      <th scope="col">CATAGORY</th>
      <th scope="col">SUPPLIER</th>
       <th scope="col">ORIGIN</th>
      <th scope="col">COLOR</th>
      <th scope="col">SIZE</th>
      <th scope="col">COST</th>
      <th scope="col">PRICE</th>
       <th scope="col">ADDE QTY</th>
      <th scope="col">SOLD QTY</th>
      <th scope="col">RETURN QTY</th>
      <th scope="col">DAMAGED</th>
      <th scope="col">STOCK QTY</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $product)
    <tr>
    <td>{{ $loop->index +1 }}</td>
      <td>{{ $product['product_id'] }}</td>
      <td><img src="images/{{ $product['image'] }}" style=" height:50px; width:50px;"></td>
      <td>{{ $product['product_name'] }}</td>
      <td>{{ $product['product_catagory'] }}</td>
      <td>{{ $product['product_supplier'] }}</td>
      <td>{{ $product['product_origin'] }}</td>
      <td>{{ $product['product_color'] }}</td>
      <td>{{ $product['product_size'] }}</td>
      <td>{{ $product['cost_price'] }}</td>
      <td>{{ $product['sale_price'] }}</td>
      <td>{{ $product['added_quantity'] }}</td>
      <td>{{ $product['sold_quantity'] }}</td>
      <td>{{ $product['return_quantity'] }}</td>
      <td>{{ $product['damage_quantity'] }}</td>
      <td>{{ $product['stock_quantity'] }}</td>
      <td><a href="edit-product/{{$product->id}}" type="submit" class="btn btn-sm btn-success btn-block">Edit</a>
      <a href="delete-product/{{$product->id}}" type="submit" class="btn btn-sm btn-danger btn-block">Delete</a>
</td>

    

    
    </tr>
    @endforeach
        
  </tbody>
</table>
    </div>
  
</div>


@endsection