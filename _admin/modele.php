<?php

//Se connecte à la base de données et récupère les billets

error_reporting(E_ERROR | E_WARNING | E_PARSE);

function getBillets()
{
	$bdd = new PDO('mysql:host=localhost;dbname=site_perso;charset=utf8','root','root')
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


?>
