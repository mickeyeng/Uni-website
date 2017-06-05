<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1>Users</h1>
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <br><br><br>
                    <div id="custom-search-input">
                        <div class="input-group col-md-8">
                            <input type="text" name="search_text" id="search_text" class="form-control input-lg" placeholder="Search" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                <!-- id result creates the table in search.php for the live search -->
                <div id="result"></div> 
                <br><br>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <nav>
  <ul class="pagination">
<li>
  <?php
            include "../db_handler.php";

             $per_page = 2;
                if (isset($_GET["page"])) {

                    $page = $_GET["page"];
                } else {
                    $page = 1;
                }
                $start_from = ($page - 1) * $per_page;


                $query = "SELECT * FROM login LIMIT $start_from, $per_page";

        $result = mysqli_query($conn, $query) or die("Error: ".mysqli_error($conn));
            //Now select all from table
            $query = "select * from login";
            $result = mysqli_query($conn, $query);

            // Count the total records
            $total_records = mysqli_num_rows($result);

            //Using ceil function to divide the total records on per page
            $total_pages = ceil($total_records / $per_page);

            //Going to first page
         echo "<a href='view-user.php?page=1' 
         aria-label='Previous'> 
        <span aria-hidden='true'>«</span> </a>
         </li>";


            //Generating the pages
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li><a href='view-user.php?page=" . $i . "'>" . $i . "</a></li> ";
            };

            // Going to last page
  echo "<li>
      <a href='view-user.php?page=$total_pages'  aria-label='Next'> <span aria-hidden='true'>»</span> </a>

    </li>"; ?>
            
  
  </ul>
</nav>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-offset-2">
                            <button id="add-user" href="int-add-user.php" type="button" class="btn btn-primary">
                            <span class="glypicon glyphicon glyphicon-plus"></span>
                            Add User
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
load_data();
function load_data(query)
{
$.ajax({
url:"../search.php",
method:"POST",
data:{query:query},
success:function(data)
{
$('#result').html(data);
}
});
}
$('#search_text').keyup(function(){
var search = $(this).val();
if(search != '')
{
load_data(search);
}
else
{
load_data();
}
});
});
</script>

<script>
    $(function(){
    $('#add-user').click(function(){
        window.location='int-add-user.php'
    });
});
</script>
