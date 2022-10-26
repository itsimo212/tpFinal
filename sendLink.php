


<?php

    $conn = new mysqli('localhost', 'root', '','test1');
    if($conn->connect_error){
        die('Connection failed: '.$cconn->connect_error);
    }else{ 
    
        $mail = $_POST["email"];
        $code = uniqid(true);
        $query = mysqli_query($conn, "INSERT INTO resetpwd (code, email) VALUES ('$code', '$mail')");
        if(!$query){
            exit("Code generation error");
        }
        if (isset($mail)){
            $url="http://localhost/tpFinal"."/resetPassword.php?code=$code";
            $texte = "Here's your reset link : $url";
            $retour = mail("receveurmailtest@gmail.com",  "Password Reset" , "$texte" , "" );
            if ($retour){
                echo "Mail envoyé";
            }
        }
     }
     ?>