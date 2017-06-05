<?php
include "db_handler.php";
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM services
  WHERE service_name LIKE '%".$search."%'
  OR service_description LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM services ORDER BY service_id 
 ";


}
$result = mysqli_query($conn, $query);

$json = [];
  while($row = $result->fetch_assoc()){
       $json[] = $row['service_name'];
  }

  echo json_encode($json);


if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <div class="wrapper">
   
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <br>
   <td>'.$row["service_name"].'</td>
   </tr>
</div>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}



?>