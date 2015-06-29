<?php

require_once "connectdb.php";
require_once "../model/userModel.php";

$row = 	access($dbh, $_POST);
if ($row['nb'] == 1) {
	//Ok on est redirige sur le backoffice
	session_start();
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['id'] = getIdUser($dbh, $_POST['email']);
	header('Location: ../backoffice/firstpage.php');
} else {
	// Faut redirige sur une page pour re essayer
	header("location: wrongaccount.php");
	return -1;
}