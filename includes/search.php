<?php
//fetch.php

include "../db_handler.php";




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
  SELECT * FROM login ORDER BY first
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>Address</th>
     <th>City</th>
     <th>Postal Code</th>
     <th>Country</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>";
    <td>'.$row["last"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["userid"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>