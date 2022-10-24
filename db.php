<?php

$mail = $_POST["mail"];
$pass = $_POST["pass"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
   
   $query = "select * from inscription where email ='$mail' and password = '$pass'";
   $result=mysqli_query($conn,$query);
   $count=mysqli_num_rows($result);
   if($count>0){
      echo "Login Successful";
   }
   else{
      echo "not successful";
   }
}
?>