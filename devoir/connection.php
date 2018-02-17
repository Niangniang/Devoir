



<?php

try{
$pdo_options[PDO::ATTR_ERRMODE]= PDO ::ERRMODE_EXCEPTION;
$db=new PDO('mysql:localhost;dbname= tp_base/Personne','root','');
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
	die('ERREUR : '.$e->getMessage());




}


?>