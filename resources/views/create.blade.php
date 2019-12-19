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
				<h1>Buat Data User Baru</h1>
				<form action="/simpanUser" method="post">
					{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
				    <input required type="text" name="nama" class="form-control" id="exampleInputEmail1">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Alamat</label>
				    <input required type="text" name="alamat" class="form-control" id="exampleInputEmail1">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Usia</label>
				    <input required type="text" name="usia" class="form-control" id="exampleInputEmail1">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nomor Telepon</label>
				    <input required type="text" name="telepon" class="form-control" id="exampleInputEmail1">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input required type="email" name="email" class="form-control" id="exampleInputEmail1">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Password</label>
				    <input required type="password" name="password" class="form-control" id="exampleInputEmail1">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Role</label>
				    <select class="form-control" name="role">
				    	<option value="administrator">Administrator</option>
				    	<option value="officer">Officer</option>
				    	<option value="user">User</option>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
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