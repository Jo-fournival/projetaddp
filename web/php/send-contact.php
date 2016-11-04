<?php

if (!array_key_exists('lieu', $_POST) || $_POST['lieu'] == 0) {
    $errors['lieu'] = "Veuillez choisir un lieu";
}


$nom = @trim(stripslashes($_POST['nom']));
$email = @trim(stripslashes($_POST['email']));
$sujet = @trim(stripslashes($_POST['sujet']));
$message = @trim(stripslashes($_POST['message']));



$email_from = $email;
$email_to = 'jonathanfournival@gmail.com'; //remplacer avec votre email

$body = 'Nom: ' . $nom . "\n\n" . 'Email: ' . $email . "\n\n" . 'Sujet: ' . $sujet . "\n\n" . 'Lieux: ' . $lieux . "\n\n" . 'Message: ' . $message;

$success = @mail($email_to, $body, 'Nom: ' . $nom . "\n\n" . 'Email: ' . $email . "\n\n" . 'Sujet: ' . $sujet . "\n\n" . 'Lieux: ' . $lieux . "\n\n" . 'Message: ' . $message);
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <script>alert("Nous vous remercions de nous avoir contacté. Nous vous contacterons au plus vite.");</script>
        <meta HTTP-EQUIV="REFRESH" content="0; url=http://localhost/auDelaDesPensees/web/app_dev.php/contact"> 
        <meta charset="utf-8"> 
    </head>