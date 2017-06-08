
<?php 
include "db_handler.php";
$add = $_POST['add_service_test'];

 $number = count($_POST['name']);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $query_string = "INSERT INTO test_table($add) VALUES ('".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";
                $query = $query_string;  
                $row = $conn->query($query);
           }  
      }  
      echo "Data Inserted";  
      /*echo $query;*/
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  

   


;




 ?>