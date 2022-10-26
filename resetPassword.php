<?php
$conn = new mysqli('localhost', 'root', '','test1');
    if($conn->connect_error){
        die('Connection failed: '.$cconn->connect_error);
    }else{ 
    if(!isset($_GET["code"])){
        exit ("Can't find page");
    }
    $code = $_GET["code"];
    $getEmailQuery = mysqli_query($conn, "SELECT email FROM resetpwd WHERE code ='$code'");
    if (mysqli_num_rows($getEmailQuery) == 0){
        exit ("Can't find page");
    }
    if (isset($_POST["new_pass"])){
        $pw = $_POST["new_pass"];
        $pw = password_hash($pw,PASSWORD_DEFAULT);
        $row = mysqli_fetch_array($getEmailQuery);
        $email = $row["email"];
        $query = mysqli_query($conn,"UPDATE inscription SET password='$pw' WHERE email='$email' ");
        if($query){
            $query = mysqli_query($conn, "DELETE from resetpwd WHERE code = '$code'");
            exit("Password updated");
        }else{
            exit ("Something went wrong");
        }
        
    }

    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all.min.css">
   <form  method="post">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
            <img src="assets/images/t.png" class=" =  rounded-circle mx-auto d-block" style="width: 140px;">
       	  	<h3>Reset Password</h3>
       	  	<input type="password" class="my-2 form-control" placeholder="Nouveau mdp" name="new_pass">
			<button class=" btn btn-primary" type="submit" name="enregistrer">Update Password</button>
       	  </div>
		
       </div>
</form>
<script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>