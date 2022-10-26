
<?php

    $conn = new mysqli('localhost', 'root', '','test1');
    if($conn->connect_error){
        die('Connection failed: '.$cconn->connect_error);
    }else{ 
    
        $email = $_POST["email"];
        $code = uniqid(true);
        $query = mysqli_query($conn, "INSERT INTO resetpwd (code, email) VALUES ('$code', '$email')");
        if(!$query){
            exit("Code generation error");
        }
        if (isset($email)){
            $url="http://localhost/tpFinal"."/resetPassword.php?code=$code";
            $texte = 'Here your reset link : "$url"';
            include "phpMail.php";
        }
     }
     ?>