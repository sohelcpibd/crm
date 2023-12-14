<!doctype html>
<html lang="en">
  <head>
  	<title>Enterprenure's log</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('import/assets/css/style.css') }}">
		<link rel="stylesheet" href="{{asset('import/assets/css/payment-form.css') }}">

  </head>
  <body>
		
	<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
					</button>
				</div>
				<div class="p-4 pt-5">
							<h1><a href="index.html" class="logo">LOGO</a></h1>
						<ul class="list-unstyled components mb-5">
						<li class="active">
							<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
							<ul class="collapse list-unstyled" id="homeSubmenu">
							<li>
								<a href="{{ url('/companyregister') }}">Register Company</a>
							</li>
							<li>
								<a href="{{ url('/addinvestor') }}">Create Investor</a>
							</li>
							<li>
								<a href="{{ url('/investor-info') }}">Investor Flow</a>
							</li>
														
                            <li>
								<a href="{{url('/productlist')}}">Product-List</a>
							</li>
							<li>
								<a href="#">Transection list</a>
							</li>
							</ul>
						</li>

						<li >
							<a href="#PurchaseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Purchase</a>
							<ul class="collapse list-unstyled" id="PurchaseSubmenu">
							<li>
								<a href="{{ url('/createnewsupplier') }}">Add Supplier</a>
							</li>
							<li>
								<a href="{{ url('/addnewproduct') }}">Add Products</a>
							</li>
							
							<li>
								<a href="{{ url('/newpurchaseorder') }}">New Purchase Order </a>
							</li>
							<li>
								<a href="{{ url('/purchase-listing') }}">Product Listing</a>
							</li>
							
							<li>
								<a href="#">Product Return</a>
							</li>
						
							</ul>
						</li>

						<li >
							<a href="#SaleSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sales</a>
							<ul class="collapse list-unstyled" id="SaleSubmenu">
							<li>
								<a href="{{ url('/addnewcustomer') }}">Add Customer</a>
							</li>
							<li>
								<a href="{{url('/createorder')}}">Create New Order</a>
							</li>
							
							<li>
								<a href="{{url('/createcustomersales')}}">Add Product in order</a>
							</li>
							<li>
								<a href="#">Goads Return Order</a>
							</li>
							<li>
								<a href="{{ url('/stockquery') }}">Stock Query</a>
							</li>
						
							</ul>
						</li>

						<li >
							<a href="#StockSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Stock</a>
							<ul class="collapse list-unstyled" id="StockSubmenu">
							<li>
								<a href="{{ url('/addstock') }}">Add Stock</a>
							</li>
							<li>
								<a href="{{ url('/stockout') }}">Sales Order Finalize</a>
							</li>
							<li>
								<a href="#">Goads Return Order</a>
							</li>
							<li>
								<a href="{{ url('/stockquery') }}">Stock Query</a>
							</li>
						
							</ul>
						</li>

						
									
						<li>
						<a href="#finSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Finance</a>
						<ul class="collapse list-unstyled" id="finSubmenu">
							<li>
								<a href="{{url('/createpayorder')}}">Create Payment Order</a>
							</li>
							<li>
								<a href="{{url('/makepayment')}}">Make Payment</a>
							</li>
							<li>
								<a href="{{url('/recievingpayment')}}">Recieve Payment</a>
							</li>
						</ul>
						</li>
						<li >
							<a href="#ReportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
							<ul class="collapse list-unstyled" id="ReportsSubmenu">
							
							<li>
								<a href="{{url('/orders-list')}}">Sales Orders Reports</a>
							</li>
							<li>
								<a href="payout-list">Paymeny Reports</a>
							</li>
							<li>
								<a href="{{url('/productlist')}}">Product Stock Report</a>
							</li>
							<li>
								<a href="{{url('/recieving-payment')}}">Recieving Payment Report</a>
							</li>
							<li>
								<a href="#">Customer Report</a>
							</li>
							<li>
								<a href="#">Financial Report</a>
							</li>
						
							</ul>
						</li>

						<li >
							<a href="#statementSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Statements</a>
							<ul class="collapse list-unstyled" id="statementSubmenu">
							<li>
								<a href="#">Customer Statement</a>
							</li>
							<li>
								<a href="#">Supplier Statements</a>
							</li>
						
						
							</ul>
						</li>

						
				</div>
    		</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4"><p><!------></p></h2>
		

    @yield('content')	
        
        </div>

    <script src="{{asset('import/assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('import/assets/js/popper.js') }}"></script>
    <script src="{{asset('import/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('import/assets/js/main.js') }}"></script>
  </body>
</html>