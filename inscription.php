<!-- ICI DOIT APPARAITRE LE CODE PHP CONTENANT
    LA LIAISON AVEC LA BASE DE DONNEES
    LA DECLARATION DES VARIABLES
    ET LA GESTION DES ERREURS
-->



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel="stylesheet" href="assets/all.min.css">
	<title>Home</title>
</head>
<body background="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">société general</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">inscription</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<form action="" method="post">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
      
       	  	<img src="assets/images/t.png" class=" =  rounded-circle mx-auto d-block" style="width: 140px;">
       	  	<h3>creation de compte</h3>
       	  	 <input type="text" class="my-2 form-control" placeholder="Nom" name="nom">
       	  	 <input type="text" class="my-2 form-control" placeholder="Prénom" name="prenom">
				  <input type="email" class="my-2 form-control" placeholder="Email" name="email">
				  <input type="password" class="my-2 form-control" placeholder="Mot de passe" name="password">
				
       	   
       	  	 <button class=" btn btn-primary" type="submit" name="enregistrer">Enregistrer</button>
       	  </div>
		
       </div>
	   </form>
	   <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html> 