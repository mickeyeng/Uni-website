<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Add Interface</h1>
			<hr>



   <?php
            require('../db_handler.php');
            //include("../auth.php");


            if (isset($_POST['interface_name'])) {
                $interface_name = stripslashes($_REQUEST['interface_name']);
                $interface_type = stripslashes($_REQUEST['interface_type']);
                $interface_description = stripslashes($_REQUEST['interface_description']);
                $interface_mechid = stripslashes($_REQUEST['interface_mechid']);   /// Fix to make sure it's an int

                $query = " INSERT INTO `interfaces` (`Interface_ID`, `Interface_Name`, `Interface_Description`, `Interface_Type`, `Mechanism_ID`) VALUES (NULL, '$interface_name', '$interface_description', '$interface_type', '$interface_mechid')";

                $result = mysqli_query($conn, $query);
                if ($result) {

                    echo "<div class='form-horizontal'> <h3>You have successfully added the interface: " . $interface_name . "</h3>";
                }

            }

            ?>


            <div class="form1">
                <form class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="interface_name" class="col-sm-2 control-label">Interface Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="interface_name"
                                   placeholder="Interface Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="interface_type" class="col-sm-2 control-label">Interface Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="type" name="interface_type"
                                   placeholder="Interface Type" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="interface_mechid" class="col-sm-2 control-label">Interface Mechanism ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mechid" name="interface_mechid"
                                   placeholder="Mechanism ID" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="interface_description" class="col-sm-2 control-label">Interface Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="interface_description"></textarea>
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
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>