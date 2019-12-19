<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="/create" class="btn btn-primary">Tambah Data</a>
				<br>
				<br>
			</div>
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>
							Nama		
						</th>
						<th>
							Alamat		
						</th>
						<th>
							Usia		
						</th>
						<th>
							Telepon		
						</th>
						<th>
							Email		
						</th>
						<th>
							Role		
						</th>
						<th>
							Action		
						</th>
					</tr>
					@foreach($users as $user)
						<tr>
							<td>{{$user->nama}}</td>
							<td>{{$user->alamat}}</td>
							<td>{{$user->usia}}</td>
							<td>{{$user->telepon}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->role}}</td>
							<td><a href="/edit/{{$user->id}}" class="btn btn-warning">Edit</a></td>
							<td><a href="/delete/{{$user->id}}" class="btn btn-danger">Delete</a></td>
						</tr>
					@endforeach

				</table>
			</div>
		</div>
	</div>

	<script>
		@if(Session::has('message'))
		    var type = "{{ Session::get('alert-type', 'info') }}";
		    switch(type){
		        case 'info':
		            toastr.info("{{ Session::get('message') }}");
		            break;

		        case 'warning':
		            toastr.warning("{{ Session::get('message') }}");
		            break;

		        case 'success':
		            toastr.success("{{ Session::get('message') }}");
		            break;

		        case 'error':
		            toastr.error("{{ Session::get('message') }}");
		            break;
		    }
		  @endif
	</script>
</body>
</html>