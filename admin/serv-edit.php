<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Edit a service</h1>
			<hr>
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>


<?php
                    if(isset($_SESSION['id'])) {
                      echo '<li><a href="#">Welcome, '. $_SESSION["id"] . '</a></li>';
                      echo '<li><a href="login.php">Log Out</a></li>';
                    } else {
                    //put login form or include here.
                        exit();
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                    }
                    ?>
