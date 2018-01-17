<?php
    header('Content-Type: text/html;charset=UTF-8');
    $to = "lise.p.poirier@gmail.com";
    $name = $_POST['name'];
    $sujet = $_POST['objet'];
    $message = $_POST['message'];
    $email = $_POST['mail'];
    $header = 'From: lise.p.poirier@gmail.com'."\r\n" .
                  'Reply-To: lise.p.poirier@gmail.com'."\r\n" .
                  'X-Mailer: PHP/' .  phpversion();
    mail($to, $sujet, $message, $email);
    header('Location: confirmation.php');
?>