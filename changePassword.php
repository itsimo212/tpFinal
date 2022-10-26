<?php 
		$conn = new mysqli("localhost","root","", "test1");
		if($conn->connect_error){
			die('Connection failed: '.$cconn->connect_error);
		}else{
		
		$mail = $_POST['email'];
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		
		$sql = "SELECT * FROM inscription WHERE email='$mail' LIMIT 1"; // Retrieve desired ROW "in this case the row with "$mail" 

        $result = mysqli_query($conn, $sql);  // 
        $row = mysqli_fetch_assoc($result); 

        if (password_verify($old_pass, $row['password'])) {
           
            echo "Passwords match";

            } else {
           echo "Identifiants incorrects";
        }
		if($new_pass==$re_pass){
			$hash= password_hash($new_pass, PASSWORD_DEFAULT);
			$query= "UPDATE inscription set password='$hash' where email ='$mail'";
			$update_pwd=mysqli_query($conn,$query);
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
		}else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
	}
	
		
	?>