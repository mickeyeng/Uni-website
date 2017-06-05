
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/style-mickey.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 

    <title>Home</title>
  </head>
  <?php include "includes/navbar.inc.php";?>


	<ul class="pager">
  		<button onclick="goBack()" class="button">Go Back</button>
			<script>
			function goBack() {
			    window.history.back();
			}
			</script>
  	</ul>
  
  <div class="container">
            <div class="col-md-12">
                <h1 id="heading"><strong>Welcome to UEL IT Services</strong></h1>
            </div>
    <div class="form-box">
        <div class="row">
        <div class="col-md-12">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" name="search_text" id="search_text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info2 btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <br>
            <div id="result"></div>
        </div>
        </div>
    </div>
	  <div class="row">
	    <?php

			$conn = mysqli_connect('localhost', 'root', '', 'uel');

			if (!$conn) {
				die("Connection failed: ".mysqli_connect_err());
			}

           $per_page = 10;
            if (isset($_GET["page"])) {

               $page = $_GET["page"];
            } else {
                $page = 1;
            }
            $start_from = ($page - 1) * $per_page;

           $results = $conn->query("SELECT * FROM services LIMIT $start_from, $per_page");

           /***
             * Run through the interface_service_link table and get the keys [interface_id] + [service_id]
             * Once that's done then translate these into readable names.
             */

           $data = array();
            while ($row = $results->fetch_assoc()) {
                $interface_name = $row['service_name'];
                $service_name = $row['service_name'];
                $data[$interface_name][] = $service_name;  // group them
            }

           /** Fetch The colours */
            $result2 = $conn->query("SELECT colour, service_name FROM services");

           /**
             * Loops through the array then retrieves the interface name and the colour from their respective columns
             * These are then used as a key and a value
             * Example $colour_data['Interface Name'] will retrieve a colour for the tiles.
             */
            $colour_data = array();
            while ($row = $result2->fetch_assoc()) {
                $colour_data[$row['service_name']] = $row['colour'];
            }

           $counter = 1;

           foreach ($data as $interface_name => $values) {
           	echo '<a id="link" href="http://localhost:7070/contact/Services/ServiceAboutTest.php" class="link"><div class="col-sm-4">
                         <ul class="trigger' . $counter . ' tile ' . $colour_data[$interface_name] . '"> 
                         <h2 class="title">' . $interface_name . '<p style="font-size: 20px;">Click to read more</p>' .'</h2></a>';

               echo '    </ul>
                                </div>   ';
                $counter++;
            }
            
           ?>
           <style type="text/css">
              
              #link {
                color: #fff;
              }

           		a.link:hover {
           			color: white;
           			text-decoration: none;
           		}
           </style>
	  </div>
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	    	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" style="color: black;"></span>
				<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#myCarousel" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" style="color: black;"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
   <?php include "includes/footer.inc.php";?>
</body>
</html>