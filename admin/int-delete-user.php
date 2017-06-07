<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<<br>
            <br>
            <h1  id="heading"><strong>Remove user</strong></h1>
            <hr id="hr_main">
			<div class="container">
				<form>
					<div class="form-group">
						<label for="Name">Username</label>
						<input type="name" class="form-control" id="Name" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="Email1">Password</label>
						<input type="email" class="form-control" id="Email1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="Email1">Confirm Password</label>
						<input type="email" class="form-control" id="Email1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-danger btn-info">Delete</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>