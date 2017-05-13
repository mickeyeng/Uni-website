<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<h1>Users</h1>
			<div class="container">
    <div class="row col-md-10  custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email address</th>
            <th>Username</th>
            <th>Password</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
        include "../db_handler.php";
        $query = "select * from login";

        $result = mysqli_query($conn, $query) or die("Error: ".mysqli_error($conn));

        // display all the rows from the table into the form
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["first"]."</td>";
                echo "<td>".$row["last"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["userid"]."</td>";
                echo "<td>".$row["password"]."</td>";


                echo '<td class="text-center">
                <a class="btn btn-info btn-xs" href="#">
                <span class="glyphicon glyphicon-edit"></span> Edit</a>
                 <a href="#" class="btn btn-danger btn-xs">
                 <span class="glyphicon glyphicon-remove"></span> Del</a></td>';
                echo "</tr>";
            
        }
     ?>
    </table>
    <br>
    <div class="row">
        <div class="col-md-8">
            <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
      </a>
    </li>
  </ul>
</nav>
        </div>
        <div class="col-md-4">
            <div class="pull-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
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
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>