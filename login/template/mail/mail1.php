<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BOKOZI</h1>


    <style>
        @font-face {
  font-family: "Magic Retro";
  src: url("Magic Retro.ttf");
}

body{
    font-family:"Magic Retro";
}
    </style>
</body>
</html>


<?php
$to = 'luvumbu.n@gmail.com';
$subject = 'Sujet de l\'e-mail';
$messageContent = '<p>Contenu de l\'e-mail avec une image :</p><img src="https://pbs.twimg.com/media/GItnosZWMAAf6Dj?format=jpg&name=medium" alt="Description de l\'image">';

$css = 'body { font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; } p { color: red; }';

$headers = 'From: contact@bokonzi.com' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Concaténation du HTML avec le CSS
$message = '<html>
<head>
    <style>' . $css . '</style>
</head>
<body>' . $messageContent . '</body>
</html>';

// Utilisation de la fonction mail() pour envoyer l'e-mail
if (mail($to, $subject, $message, $headers)) {
    echo 'L\'e-mail a été envoyé avec succès.';
} else {
    echo 'Erreur lors de l\'envoi de l\'e-mail.';
}
?>
