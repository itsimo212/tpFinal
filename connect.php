<?php

$email = $_POST["mail"];
$pass = $_POST["pass"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
    $sql = "SELECT * FROM inscription WHERE email='$email' LIMIT 1"; // Retrieve desired ROW "in this case the row with "$mail" 
    $result = mysqli_query($conn, $sql);  // 
    $row = mysqli_fetch_assoc($result); 
    if (password_verify($pass, $row['password'])) {
        
        echo "login successfull";
    } else {
        echo "Identifiants incorrects";
    }
}

?>