<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>


<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Edit Interface</h1>
			<hr>
			<div class="container">
				<form>
					<div class="form-group">
						<label for="Name">First name</label>
						<input type="name" class="form-control" id="Name" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="Name">Last name</label>
						<input type="name" class="form-control" id="Name" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="Name">Email</label>
						<input type="name" class="form-control" id="Name" placeholder=" Email">
					</div>
					<div class="form-group">
						<label for="Name">Username</label>
						<input type="name" class="form-control" id="Name" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="Email1">Password</label>
						<input type="email" class="form-control" id="Email1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-info">Add User</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>