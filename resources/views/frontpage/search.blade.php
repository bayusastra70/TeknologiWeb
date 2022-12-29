
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hasil Pencarian</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
		
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	
        <div>
            
            <div>
                <div>
                    <h2 class="font-semibold break-normal  text-gray-600 text-base md:text-xl">Hasil Pencarian</h2>
                    @foreach ($products as $key=>$item)

				<div class="py-12">
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					
						<div class="p-6 bg-white border-b border-gray-200">
							<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
								<a href="search/{{$item['id']}}">
									<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Produks</p>
							
										<div class="w-full font-bold text-xl text-gray-900 px-6">{{$item->name}}</div>
										<p class="text-gray-800 font-serif text-base px-6 mb-5">
											{{$item->detail}}</p>
											<div class="md:flex font-sans pt-8">
												<img src="/img/{{$item->image}}" alt="" 
												class="h-38  md:h-full md:w-50 inset-0 h-full object-cover rounded-lg" loading="lazy" />
											</div>
						<div class="w-full flex-none mt-2 order-10 text-3x3 px-6 mb-7 fontbold text-violet-600">
							{{$item->harga}}
						</div>
					            </a>
							
						<div class="flex space-x-4 mb-5 text-sm font-medium">
							<div class="flex-auto flex space-x-4">
						</div>
									</div>
					  
									<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
										<div class="flex items-center justify-between">
											<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
											<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
										</div>
									</div>
								</div>
				  
						</div>
				@endforeach
                </div>
            </div>
        </div>
    
		

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