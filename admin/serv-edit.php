<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<br>
            <br>
            <h1  id="heading"><strong>Edit Service</strong></h1>
            <hr id="hr_main">
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
