<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Check Detail</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

  <!--Replace with your tailwind.css once created-->


</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://cdn-cms.pgimgs.com/static/2020/09/Mengenal-Bonsai-Beringin-Jenis-Cara-Menanam-dan-Merawatnya-2.png');">



  <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-left">
		
			<h2 class="font-semibold break-normal  text-gray-600 text-base md:text-xl">{{$products['name']}}</h2>
			<h3>Price : {{$products['harga']}}</h3>
			<h4>Detail : {{$products['detail']}}</h4>
			<div class="max-w-4xl w-full lg:w-1/3">
				<!-- Big profile image for side bar (desktop) -->
				<img class="detail-img" src="/img/{{$products['image']}}" class="rounded-none lg:rounded-lg shadow-3xl hidden lg:block">
				<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
				
			</div>
		
		

			
			
			<div class="pt-12 pb-8">
				 
				<br>
				<button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
					<a href="{{ route('add_to_cart', $products->id) }}">Add to cart</a>
				</button>
				
                <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
				
				
			    </div>
			</div>
			

			
			
			<!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 

		</div>

	</div>
	
	
	
	<!-- Pin to top right corner -->
	  <div class="absolute top-0 right-0 h-12 w-18 p-4">
		<button class="js-change-theme focus:outline-none">🌙</button>
	  </div>

</div>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.link',{
		  placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});
		
    </script>
	
</body>

</html>