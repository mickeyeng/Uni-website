<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
        <br>
        <br>
            <h1  id="heading"><strong>Add new service</strong></h1>
            <hr id ="hr_main">

          <?php
            require('../db_handler.php');
            //include("../auth.php");

             $query = 'SELECT interface_link FROM services';
            $result = mysqli_query($conn, $query);
            $options = "";
            $loop = 1;

            while ($row = mysqli_fetch_array($result)) {
                $options = $options . "<option value='$loop'>$row[0]</option>";
                $loop++;
            }

            if (isset($_POST['Heading'])) {
                $service_name = stripslashes($_REQUEST['service_name']);
                $service_description = stripslashes($_REQUEST['service_description']);
                $service_url = stripslashes($_REQUEST['service_url']);
                $interface_link = stripslashes($_REQUEST['interface_link']);
                $service_heading = stripslashes($_REQUEST['Heading']);   /// Fix to make sure it's an int
                $service_tile_colour = stripslashes($_REQUEST['Colour']);   /// Fix to make sure it's an int

                $query = " INSERT INTO `services` (`service_id`, `service_name`, `service_description`,  `interface_link`, 'Heading', 'Colour') VALUES (NULL, '$service_name', '$service_description', '$interface_link', '$service_heading', '$service_tile_colour')";



				$result = mysqli_query($conn, $query);
                if ($result) {

                    echo "<div class='form-horizontal'> <h3>You have successfully added the interface: " . $service_heading. "</h3>";
                }

            }

            ?>

            <div class="form1">
                <form  class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="service_name" class="col-sm-2 control-label">Service Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="service_name"
                                   placeholder="Service Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service_type" class="col-sm-2 control-label">Service Heading</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="type" name="Heading"
                                   placeholder="Service Heading" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service_type" class="col-sm-2 control-label">Service Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="type" name="service_description"
                                   placeholder="Service Description" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service_type" class="col-sm-2 control-label">Service URL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="type" name="service_url"
                                   placeholder="Service URL" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="test" class="col-sm-2 control-label">Interfaces Linked To:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="select[ ]" multiple>
                                <?php
                                echo $options;
                                ?>
                            </select>
                        </div>
                    </div>
        
                     <div class="form-group">
                        <label for="service_type" class="col-sm-2 control-label">Tile Colour</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="type" name="service_url"
                                   placeholder="Tile Colour" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
                            <input id="edit" name="edit" type="" value="Edit" class="btn btn-primary" onclick="document.location.href='service-eddit-button.php';">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <!--                             Will be used to display an alert to the user-->
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