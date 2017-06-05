<?php
//fetch.php
include "db_handler.php";
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM login 
  WHERE first LIKE '%".$search."%'
  OR last LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
  OR userid LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM login ORDER BY id 
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <div class=""wrapper>
   <div class="col-md-10 custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email address</th>
            <th>Username</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'.$row["id"].'</td>
    <td>'.$row["first"].'</td>
    <td>'.$row["last"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["userid"].'</td>

  

  <td class="text-center">
  <a class="btn-edit btn btn-info btn-xs" href="#">
  <span class=" glyphicon glyphicon-edit "></span> Edit</a>
   <a href="#" class="btn-remove btn btn-danger btn-xs">
   <span class="glyphicon glyphicon-remove"></span> Del</a></td>



   </tr>
</div>
  ';
 }
 echo $output;
}
else


?>