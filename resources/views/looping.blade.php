<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Document</title>
</head>
<body>
	<div class="container">
		<form action="/Aritmatika" method="post">
			@csrf
		<div class="row">
			<div class="col-md-3">
				<input type="number" name="bil_1" class="form-control" placeholder="masukkan angka pertama" required>
			</div>
			<div class="col-md-3">
				<input type="number" name="bil_2" class="form-control" placeholder="masukkan angka kedua" required>
			</div>
			<div class="col-md-3">
				<select name="operasi" class="form-control">
					<option value="tambah"> + </option>
					<option value="kurang"> - </option>
					<option value="kali"> * </option>
					<option value="bagi"> / </option>
				</select>
            </div>
			<div class="col-md-3">
				<button type="submit" class="btn btn-info">cari hasil</button>
            </div>
        </div>
		</form>

		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-6">
				@if(session('info'))
				    <div class="alert alert-info">
						{{ session('info') }}
					</div>
				@endif
			</div>
			<div class="col-md-2">
			
			</div>
		</div>
    </div>
</body>
</html>