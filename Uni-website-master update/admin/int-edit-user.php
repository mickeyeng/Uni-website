<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
include "../db_handler.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Edit Users</h1>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Edit Users</h1>
			<hr>
		

        <?php

            if (isset($_GET['id'])) {

                $username = $_GET['id'];
                $query = "SELECT * FROM users WHERE userid='$username'";
                $result = mysqli_query($conn, $query);

                // Retrieve from column and store into an array to be split later...
                while ($row = mysqli_fetch_array($result)) {
                    $the_services = explode(",", $row['services_owned']);
                    $items = array();
                    foreach ($the_services as $services) {
                        $items [] = $services;
                    }
                }

                //  If this the service is already in this users account then, auto select them, else, don't.
                $query = "SELECT * FROM services";
                $result = mysqli_query($conn, $query);
                $options = "";
                $loop = 1;
                while ($row = mysqli_fetch_array($result)) {
                    if (in_array($row[0], $items)) {
                        $options = $options . "<option selected='selected' value='$loop'>$row[1]</option>";
                    } else {
                        $options = $options . "<option value='$loop'>$row[1]</option>";
                    }
                    $loop++;
                }
            } else {
                $query = "SELECT * FROM services";
                $result = mysqli_query($conn, $query);
                $options = "";
                $loop = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $options = $options . "<option value='$loop'>$row[1]</option>";
                    $loop++;
                }
            }

            // <!--POST BEGINS -->

            /***
             * This is where the form data is captured into variables.
             * The way this works is it checks if the page starts with ?id=$username
             * if it does the first and if not it allows the user to use their own input.
             */
            if (isset($_POST['submit'])) {

                // Get the selected items from the list then store in array
                $items = array();
                if (!empty($_POST['select'])) {
                    foreach ($_POST['select'] as $services) {
                        $items[] = $services;
                    }
                }


                $selected_rank = $_POST['rank'];  // Get the selected rank from the option.
                if ($selected_rank == 2) {    // If it's the second option then user has chosen admin
                    $selected_rank = 'admin';
                } else {
                    $selected_rank = 'user';
                }


                $password = stripslashes($_POST['password']);
                $email = stripslashes($_POST['email']);
                $first_name = stripslashes($_POST['first_name']);
                $last_name = stripslashes($_POST['last_name']);
                $rank = stripslashes($selected_rank);
                $services_owned = implode(', ', $items); // <-- Should be an int.
                echo $services_owned;
                if (isset($_GET['id'])) {
                    $username = $_GET['id'];
                } else {
                    $username = $_POST['username'];
                }

                // TODO IF STATEMENTS SUCH AS CHECKING IF ANYTHING IS NULL

                //    $query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name',
                //     `password` = '$password', `rank` = '$rank', `services_owned` = '$services_owned', `email` = '$email' WHERE `users`.`username` = '$username'";

                $query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name',
                          `password` = '$password', `rank` = '$rank',`services_owned` = '$services_owned',  `email` = '$email' WHERE `users`.`username` = '$username'";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                if ($result) {
                    header("Location: view_users.php");
                }

                // TODO IF STATEMENTS TO CHECK IF USER EXISTS GOES HERE
                // TODO Auto fill the form if the page starts with ?id=$username;

            }


            ?>
            <!-- END POST BIT-->


            <div class="form1">
                <form class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <?php
                            // If the url starts with id=?username then disable the text field.
                            if (isset($_GET['id'])) {
                                $username = $_GET['id'];
                                echo '
                                <input type="text" class="form-control" id="name" name="username"
                                   placeholder="Add User Name" value="' . $username . '" disabled>     ';
                            } else {
                                echo ' <input type="text" class="form-control" id="name" name="username"
                                   placeholder="Add User Name" value="">     ';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="type" name="password"
                                   placeholder="Password" value="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="first_name" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" name="first_name"
                                   placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lname" name="last_name"
                                   placeholder="" value="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="email@email.com" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ranks" class="col-sm-2 control-label">Rank</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ranks" name="rank">
                                <option value="1">Regular User</option>
                                <option value="2">Administrator</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="test" class="col-sm-2 control-label">Services Owned:</label>
                        <div class="col-sm-10">
                            <select id="multiple-checkboxes" multiple="multiple" name="select[ ]">
                                <?php echo $options; ?>
                            </select>
                        </div>
                    </div>
 


                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">

                        </div>
                    </div>
                </form>








		</div>
	</div>
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
			<hr>
		</div>
	</div>