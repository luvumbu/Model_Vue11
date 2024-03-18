<?php
$to = 'luvumbu.n@gmail.com';
$subject = 'Bienvenue sur BOKONZI - Activation de votre compte';

// Obtention de la valeur de time()
$activationTime =  sha1(time());

// Message de bienvenue personnalisé
$messageContent = '<div style="background-color: black; color: white; text-align: center; padding: 10px;"><h1>BOKONZI</h1></div>
<p>Cher utilisateur,</p>
<p>Nous sommes ravis de vous accueillir sur BOKONZI, la plateforme qui vous offre des solutions innovantes pour votre projet.</p>
<p>Votre compte a été créé avec succès. Avant de pouvoir accéder à toutes les fonctionnalités de BOKONZI, veuillez activer votre compte en cliquant sur le lien ci-dessous :</p>
<p>Une fois votre compte activé, vous pourrez explorer toutes les possibilités offertes par BOKONZI, créer et gérer vos projets, et interagir avec notre communauté.</p>
<p>Si vous n\'avez pas créé de compte sur BOKONZI, veuillez ignorer ce message.</p>
<p>Nous vous remercions pour votre confiance en BOKONZI.</p>
<p>Cordialement,<br>L\'équipe BOKONZI</p>
<p><a href="'.$activationTime.'" style="background-color: black; color: white; text-decoration: none; padding: 5px; display: inline-block;">Activer mon compte</a></p>';

// CSS pour le style de l'e-mail
$css = 'body { font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; } p { color: black; }';

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
