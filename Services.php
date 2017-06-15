
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/style-mickey.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
     <link rel="stylesheet" href="css/bootstrap-treeview.css?<?php echo time(); ?> /">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
    <script src="js/bootstrap-treeview.js"></script> 

    <title>Home</title>
  </head>
  <?php include "includes/navbar.inc.php";?>
  <br>
  <br>



  
  <div class="container">
      <button onclick="goBack()" class="button"><span>Go Back</span></button>
      <button id="show" class="col-md-offset-1 button click"><span>List View</span></button>
       <button id="show1" style="display: none;" class="col-md-offset-1 button click"><span>Tile View</span></button>
      <script>
      function goBack() {
          window.history.back();
      }
      </script>
            <div class="col-md-12">
                <h1  id="heading"><strong>Services</strong></h1>
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
    
    <section id="tree" style="display:none;>
    <div class="container" style="width:900px;">
   <h1 align="center"  id="heading"><strong>List view for Services</strong></h1>
   <!-- <hr id="hr_main"> -->
   <?php
   include "db_handler.php";

    $sql = "SELECT service_name, Heading FROM SERVICES";
    $result = mysqli_query($conn, $sql);


    $row = mysqli_fetch_array($result);

       while($row = $result->fetch_assoc()) {
            // echo "Service Name: {$row['service_name']}  <br> ".
            // "--------------------------------<br>";


            // echo "<div class='panel panel-default'>
            // <div class='panel-heading'>
            //   <h3 class='panel-title'>{$row['service_name']}</h3>
            // </div>
            //   <div class='panel-body'>
            //     <a href='./home.php'{$row['service_name']}</a>
            //   </div>
            // </div>";

            echo "<div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>{$row['Heading']}</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>{$row['service_name']}</a>
          </div>
        </div>";





        }

   ?>
  </div>
  </section>


<!--   echo "<div class='list-group'>
  <a href='' class='list-group-item active'>
    <h4 class='list-group-item-heading'>{$row['Heading']}</h4>
    <p class='list-group-item-text'>{$row['service_name']}</p>
  </a>
</div>"; -->

  <!-- <div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
 -->

<!-- 
            echo "<div class='list-group'>
              <a href='' class='list-group-item'>
              {$row['service_name']}
              </a>
            </div>"; -->


<!--   <div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
 -->

 <section id="content">

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
    </section>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
	</div>
   <?php include "includes/footer.inc.php";?>
</body>
</html>






<script>
  // var element = document.getElementById('content');
  // element.style.visibility = 'hidden';




// $('#show').click(function() {
//   $('#tree').slideToggle();
// });






$('#show').click(function() {
  $('#tree').slideToggle();
  $('#show').hide();
  $('#content').hide();
  $('#myCarousel').hide();
  $('#show1').show();


});

$('#show1').click(function() {
  $('#tree').hide();
  $('#content').slideToggle();
});











</script>



<!-- script for search  -->
<script>
$(document).ready(function(){
 
 $('#search_text').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"./search-services2.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>