<?php

$mail = $_POST["mail"];
$pass = $_POST["pass"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
   //$hash = password_hash($pass, PASSWORD_DEFAULT);
   //$verify = password_verify($pass, $hash);
   //if ($verify) {
   //echo 'Password Verified!';
      $query = "SELECT * from inscription WHERE email ='$mail' and password = md5('$pass')";
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