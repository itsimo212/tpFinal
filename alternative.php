<?php

$mail = $_POST["mail"];
$pass = $_POST["pass"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
        $sql = "SELECT * FROM inscription WHERE email='$mail' LIMIT 1";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row['password'])) {
            // get id of created user
            $reg_user_id = $row['id'];
            echo "login successfull";
            } else {
           echo "Identifiants incorrects";
        }
}


?>