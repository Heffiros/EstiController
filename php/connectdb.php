<?php


try {
	$dbh = new PDO('mysql:host=mysql.hostinger.fr;dbname=u161594212_esti', "u161594212_root", "alex1994");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

