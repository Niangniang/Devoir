<?php
session_start();
require('connection.php');
//Reception des donnes du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ville = $_POST['ville'];
$adress= $_POST['adress'];
$code = $_POST['code'];
echo "Votre prenom est:".$prenom."<br>Votre nom est :".$nom."<br>Votre ville est:".$ville."<br>Votre adress est:".$adress."<br>Votre code postal est:".$code."<br>";
$insert= $db->prepare("INSERT INTO Employer(nom, prenom,ville, adress, code) VALUES(?,?,?,?,?)");
$insert->execute(array($nom,$prenom, $ville, $adress, $code));


 header('Location:formulaire.php');




?> 