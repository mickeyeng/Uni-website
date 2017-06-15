<?php
//fetch.php
include "db_handler.php";
$query = "
 SELECT * FROM services
";
$result = mysqli_query($conn, $query);
//$output = array();
while($row = mysqli_fetch_array($result))
{
 $sub_data["id"] = $row["service_id"];
 $sub_data["name"] = $row["service_name"];
 $sub_data["service_description"] = $row["service_description"];
 $data[] = $sub_data;
}
foreach($data as $key => &$value)
{
 $output[$value["service_id"]] = &$value;
}
foreach($data as $key => &$value)
{
 if($value["service_name"] && isset($output[$value["service_name"]]))
 {
  $output[$value["service_name"]]["nodes"][] = &$value;
 }
}
foreach($data as $key => &$value)
{
 if($value["service_name"] && isset($output[$value["service_name"]]))
 {
  unset($data[$key]);
 }
}
echo json_encode($data);
echo '<pre>';
print_r($data);
echo '</pre>';

?>
