<?php
// permet la connexion à la base de donnée

$bdd = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', 'root');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>