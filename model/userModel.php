<?php

function getIdUser($dbh, $email)
{
	$stmt = $dbh->prepare("SELECT * FROM estiuser WHERE email = :email");
	$stmt->bindParam(':email', $email);
	$stmt->execute();
	$row = $stmt->fetch();
	return $row['id'];
}