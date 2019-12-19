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
			<div class="col-md-12"><div class="wrapper">
    <!-- Sidebar -->
			    <nav id="sidebar">
			        <div class="sidebar-header">
			            <h3>Menu Administrator</h3>
			        </div>

			        <ul class="list-unstyled components">
			            <li class="active">
			                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Module Management</a>
			            </li>
			            <li>
			                <a href="#">Project Management</a>
			            </li>
			            <li>
			                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Partner Management</a>
			            </li>
			            <li>
			                <a href="#">Customer Management</a>
			            </li>
			            <li>
			                <a href="#">User Management</a>
			            </li>
			            <li>
			                <a href="#">Master Data Management</a>
			            </li>
			        </ul>
			    </nav>

			</div>
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