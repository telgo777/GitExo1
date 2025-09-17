<?php
$prenom=$_POST['prenom'];

$nom=$_POST['nom'];
echo "bonjour".$prenom." ".$nom;
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/...");

?>
