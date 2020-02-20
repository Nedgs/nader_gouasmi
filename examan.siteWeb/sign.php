<?php  

$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','nader','nader',
[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]); 


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nom_uti']) and isset($_POST['password']) and isset($_POST['mail']) and isset($_POST['env']) ) {


	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'] ;
	$utilisateur=$_POST['nom_uti']
	$password=$_POST['password']
	$mail=$_POST['mail'] ;
	
	echo "hohohohho";
	$ins = $bdd->prepare('INSERT INTO utilisateur (nom_uti, pre_uti, nom_utl_uti, mdp_uti, mail_uti ) values(?, ?, ?, ?, ?) ');
    $ins->execute(array($nom, $prenom, $utilisateur, $password, $mail));
    if ($ins) {
    	$message = "Votre message a bien été envoyé !";
    }
	
}
else{
	$message= 'error';
}

echo $message;


?>









<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/90e2b62310.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>


	     
	
				
				<center>
					<div class="container">

						<div>
							<center><i class="fas fa-sign-in-alt" ></i></center>
							
							<form  method="POST" action="sign.html">
								<div style="display: flex;">
									<div class="omrs-input-group1">
										<label class="omrs-input-filled">
										  <input required name="nom" type="text">
										  <span class="omrs-input-label" name >Nom</span>
											<!-- <span class="omrs-input-helper">Helper Text</span> -->
										<i class="fas fa-address-card"></i>
										</label>
									</div>
									<div class="omrs-input-group1" style="margin-left: 55px;">
										<label class="omrs-input-filled">
										  <input required name="prenom" type="text">
										  <span class="omrs-input-label">Prenom</span>
											<!-- <span class="omrs-input-helper">Helper Text</span> -->
										<i class="fas fa-address-card"></i>
										</label>
									</div>
								</div>
								<div class="omrs-input-group">
									<label class="omrs-input-filled omrs-input-danger">
									  <input required name="nom_uti" type="text">
									  <span class="omrs-input-label">Nom d'utilisateur</span>
										<!-- <span class="omrs-input-helper">Helper Text</span> -->
									<i class="fas fa-address-card"></i>
									</label>
								</div>
								<div class="omrs-input-group">
									<label class="omrs-input-filled omrs-input-danger">
									  <input required type="text" name="password">
									  <span class="omrs-input-label">Mot de passe</span>
										<!-- <span class="omrs-input-helper">Helper Text</span> -->
									<i class="fas fa-key"></i>
									</label>
								</div>
								<div class="omrs-input-group">
									<label class="omrs-input-filled">
									  <input required type="text" name="mail">
									  <span class="omrs-input-label">E-mail</span>
										<!-- <span class="omrs-input-helper">Helper Text</span> -->
									<i class="fas fa-envelope"></i>
									</label>
								</div>
								<label for="scales" class="remember" style="margin-top: 20px;">
										<input type="checkbox" id="scales" name="scales"checked> J'ai lu et j'accepte les termes et conditions
								</label>
								<div style="display: flex;">
									
									<div class="sub-main">
	      								<button type="submit" name="env" class="button-three">INSCRIPTION</button>
	    							</div>
									
								</div>
							</form>
								

						</div>

					</div>
				</center>
			
	

</body>
</html>





