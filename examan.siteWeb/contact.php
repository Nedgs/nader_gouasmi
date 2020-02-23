<?php 

$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','nader','nader',
[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]); 


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['zondet']) ) {


	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'] ;
	$mail=$_POST['mail'] ;
	$zondet=$_POST['zondet'];
	echo "hohohohho";
	$ins = $bdd->prepare('INSERT INTO contact (nom_cnt, pre_cnt, mail_cnt, msg_cnt ) values(?, ?, ?, ?) ');
    $ins->execute(array($nom, $prenom, $mail, $zondet));
    if ($ins) {
    	$message = "Votre message a bien été envoyé !";
    }
	
}
else{
	$message= 'error';
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<title></title>
</head>
<body>
	<center>
		<div class="container">

			<p class="mssg"><?= $message ?></p>	
			<a href="index.html"> HOME</a>		

		</div>
	</center>



</body>
</html>


