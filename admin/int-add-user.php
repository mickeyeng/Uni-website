<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Add new users</h1>
			<hr>
			<div class="container">
				<form action="../register.php" method="POST" class="register-form">
					<div class="form-group">
						<label for="Name">First name</label>
						<input type="text" name="first" class="form-control" id="Name" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="Name">Last name</label>
						<input type="text" name="last" class="form-control" id="Name" placeholder="Last Name">
					</div>
						<div class="form-group">
							<label for="email" class="control-label">Email Address</label>
								<input type="email" class="form-control" id="email" name="email"
								placeholder="email@email.com" value="">
						</div>
					<div class="form-group">
						<label for="Name">Username</label>
						<input type="text" name="userid"  class="form-control" id="Name" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="Email1">Password</label>
						<input type="password" name="password" class="form-control" id="Email1" placeholder="Password">
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