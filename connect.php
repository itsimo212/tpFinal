<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
    $stmt = $conn->prepare("insert into inscription(nom, prenom, email, password) values (?, ?, ?, ?)");
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt ->bind_param("ssss",$nom, $prenom, $email, $hash);
    $stmt ->execute();
    echo "Submitted";
    $stmt ->close();
    $conn -> close();
}



// Separer password.php et inclure dans les deux fichiers (à tester)
//<?php

// Plaintext password entered by the user
//$plaintext_password = "Password@123";

// The hashed password retrieved from database
// $hash =
//"$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm";

// Verify the hash against the password entered
//$verify = password_verify($plaintext_password, $hash);

// Print the result depending if they match
//if ($verify) {
//	echo 'Password Verified!';
//} else {
//	echo 'Incorrect Password!';
//}
//
?>

