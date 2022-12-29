<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koleksi Tanaman Bonsai</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://1.bp.blogspot.com/--1s6jki1HVQ/WvPix7DqpLI/AAAAAAAAE08/3lSC6dmGRn0G99z8ww8hdafRCyNFvPFxQCLcBGAs/w1200-h630-p-k-no-nu/6.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						👻BONSAI
</p>
					<p class="text-xl md:text-2xl font-extrabold text-blue-500">Welcome to Our Blog</p>
			</div>
		</div>
    
		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">
				
				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">
						
            


						<div class="flex w-1/7 justify-end content-left">		
							<a href="/login1" class="inline-block no-underline hover:text-black" href="#">
								<svg class="h-16 w-16 text-black-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
								  </svg>
							</a>
							
						</div>

					</div>
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-12">
							<div class="dropdown">
								<button type="button" class="btn btn-primary" data-toggle="dropdown">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
								</button>
				 
								<div class="dropdown-menu">
									<div class="row total-header-section">
										@php $total = 0 @endphp
										@foreach((array) session('cart') as $id => $details)
											
										@endforeach
										<div class="col-lg-12 col-sm-12 col-12 total-section text-right">
											<p>Total: <span class="text-info">$ {{ $total }}</span></p>
										</div>
									</div>
									@if(session('cart'))
										@foreach(session('cart') as $id => $details)
											<div class="row cart-detail">
												<div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
													<img src="{{ asset('img') }}/{{ $details['photo'] }}" />
												</div>
												<div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
													<p>{{ $details['product_name'] }}</p>
													<span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
												</div>
											</div>
										@endforeach
									@endif
									<div class="row">
										<div class="col-lg-12 col-sm-12 col-12 text-center checkout">
											<a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
   
				

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
					<form action="/search" class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" name="query" class="form-control search-box" placeholder="Search">
						</div>
						
					</form>
				
				<!--produk 1-->
				
				<div class="row">
					@foreach($products as $key=>$item)
						<div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
							<a href="detail/{{$item['id']}}">
								<div class="img_thumbnail productlist">
									<img src="/img/{{$item->image}}" class="img-fluid">
									<div class="caption">
										<h4>{{$item->name}}</h4>
										<p>{{$item->detail}}</p>
										<p><strong>Price: </strong> {{$item->harga}}</p>
										<p class="btn-holder"><a href="{{ route('add_to_cart', $item->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
									</div>
								</div>
							</a>
						</div>
					@endforeach
				</div>

        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

						
			</div>
		</div>
	</div>
  <br>


	<footer class="bg-gray-900">	
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
						👻 <span class="text-base text-gray-200">BONSAI</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block py-2 px-3 text-white no-underline" href="#">Active</a>
					  </li>
					</ul>
				</div>
			</div>
        

		
		</div>
	</footer>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.avatar')
	</script>
</body>
</html>





  

        



