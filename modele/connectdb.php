<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=c0mvcdb', 'c0mvc', '40@45vrf');
	$bdd->exec('SET NAMES utf8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
