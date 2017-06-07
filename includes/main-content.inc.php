
	<div class="container">
     <div class="col-md-12">
                <h1  id="heading"><strong>Welcome to UEL IT Services</strong></h1>
            </div>
            <br>
    <div class="form-box">
        <div class="row">
        <div class="col-md-12">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" name="search_text" id="search_text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
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
   <!--  <hr id="hr_main"> -->
	<div class="row">
            <?php

            include "./db_handler.php";

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
                $interface_name = $row['Heading'];
                $service_name = $row['service_name'];
                $data[$interface_name][] = $service_name;  // group them
            }

            /** Fetch The colours */
            $result2 = $conn->query("SELECT Colour, Heading FROM services");

            /**
             * Loops through the array then retrieves the interface name and the colour from their respective columns
             * These are then used as a key and a value
             * Example $colour_data['Interface Name'] will retrieve a colour for the tiles.
             */
            $colour_data = array();
            while ($row = $result2->fetch_assoc()) {
                $colour_data[$row['Heading']] = $row['Colour'];
            }

            $counter = 1;

            foreach ($data as $interface_name => $values) {
                echo ' <div class="col-sm-4">
                        <ul id="heading" class="dropdown trigger' . $counter . ' tile ' . $colour_data[$interface_name] . '">
                         <h2 class="dropdown-title">' . $interface_name . '</h2>';

                // Drop down
                foreach ($values as $service_name) {
                    echo '          <li class="dropdown-list list' . $counter . '">' . $service_name . '</li>';
                }

                echo '    </ul>
                                </div>   ';
                $counter++;
            }

            ?>


        </div>
            
            <!-- <hr id="hr_main"> -->

        
	</div>
	<div class="container">
<div class="add-next-page">
		<button type="button" class=" add-btn btn btn-success btn-xs">Add <span class="glyphicon glyphicon-plus"></span></button>
	<ul class="pagination pages">
            <li>

         <!--        <?php
                //Now select all from table
                $query = "select * from services";
                $result = mysqli_query($conn, $query);

                // Count the total records
                $total_records = mysqli_num_rows($result);

                //Using ceil function to divide the total records on per page
                $total_pages = ceil($total_records / $per_page);

                //Going to first page
                echo "<a href='home.php?page=1'
                                 aria-label='Previous'>
                            <span aria-hidden='true'>«</span> </a>
                    </li>
                    ";


                //Generating the pages
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "
                    <li><a href='home.php?page=" . $i . "'>" . $i . "</a></li>
                    ";
                };

                // Going to last page
                echo "
                    <li>
                        <a href='home.php?page=$total_pages' aria-label='Next'> <span aria-hidden='true'>»</span>
                        </a>
        
                    </li>
                    ";
                ?> -->

        </ul>
  </div>
  </div>
</div>




<script>
$(document).ready(function(){
var trigger = '.trigger';
var trigger1 = '.trigger1';
var trigger2 = '.trigger2';
var trigger3 = '.trigger3';
var trigger4 = '.trigger4';
var trigger5 = '.trigger5';
var list = '.list';
var list1 = '.list1';
var list2 = '.list2';
var list3 = '.list3';
var list4 = '.list4';
var list5 = '.list5';

function toggleIt() {
$(list).slideToggle(200, 'linear');
}

function toggleIt1() {
$(list1).slideToggle(200, 'linear');
}

function toggleIt2() {
$(list2).slideToggle(200, 'linear');
}

function toggleIt3() {
$(list3).slideToggle(200, 'linear');
}

function toggleIt4() {
$(list4).slideToggle(200, 'linear');
}

function toggleIt5() {
$(list5).slideToggle(200, 'linear');
}

$(trigger).on('click', function () {
toggleIt();
});


$(trigger1).on('click', function () {
toggleIt1();
});

$(trigger2).on('click', function () {
toggleIt2();
});

$(trigger3).on('click', function () {
toggleIt3();
});

$(trigger4).on('click', function () {
toggleIt4();
});

$(trigger5).on('click', function () {
toggleIt5();
});

});
</script>


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