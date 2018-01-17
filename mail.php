<?php
header('Content-Type: text/html;charset=UTF-8');
$nom = $_POST['name'];
$prenom = $_POST['firstname'];
$email = $_POST['mail'];
$message = $_POST['sujet'];
$expediteur = 'From: lise.p.poirier@gmail.com'."\r\n" .
              'Reply-To: lise.p.poirier@gmail.com'."\r\n" .
              'X-Mailer: PHP/' .  phpversion();
mail ($nom, $prenom, $email, $message, $expediteur);
echo "Votre message à bien été envoyé.";
header('Location: confirmation.php');
 ?>