<?php

	$nom = @trim(stripslashes($_POST['nom'])); 
	$email = @trim(stripslashes($_POST['email']));
	$sujet = @trim(stripslashes($_POST['sujet']));
	$lieux = @trim(stripslashes($_POST['lieux']));
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
	$email_to = 'jonathanfournival@gmail.com';//remplacer avec votre email

	$body = 'Nom: ' . $nom . "\n\n" . 'Email: ' . $email . "\n\n" . 'Sujet: ' . $sujet . "\n\n" . 'Lieux: ' . $lieux . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Nom: ' . $nom . "\n\n" . 'Email: ' . $email . "\n\n" . 'Sujet: ' . $sujet . "\n\n" . 'Lieux: ' . $lieux . "\n\n" . 'Message: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<script>alert("Nous vous remercions de nous avoir contacté. Nous vous contacterons au plus vite.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://localhost/addp/web/app_dev.php/contact"> 
</head>