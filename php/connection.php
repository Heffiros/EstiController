<?php

require_once "connectdb.php";

$stmt = $dbh->prepare("SELECT COUNT(*) as nb FROM estiuser WHERE email=:email AND password=:password");
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->execute();
$row = $stmt->fetch();
if ($row['nb'] == 1) {
	//Ok on est redirige sur le backoffice
	session_start();
	$_SESSION['email'] = $_POST['email'];
	header('Location: ../backoffice/firstpage.php');
} else {
	// Faut redirige sur une page pour re essayer
	header("location: wrongaccount.php");
	return -1;
}