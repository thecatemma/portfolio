<?php
// NE PAS MODIFIER 
// permet la connection à la base de donnée

$bdd = new PDO('mysql:host=localhost;dbname=id6720639_hemasn;charset=utf8', 'id6720639_hemasn', '12Emma78');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>