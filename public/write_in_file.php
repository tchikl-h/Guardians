<?php
header('Location: http://localhost/landingPage.html#contact');
$file =$_GET['Email'].'.txt';
// Ajoute une personne
$current = "From : ".$_GET['Name']."\nEmail : ".$_GET['Email']."\nMessage : ".$_GET['Message'];
// Écrit le résultat dans le fichier
file_put_contents($file, $current);
echo "Merci de message"
?>
