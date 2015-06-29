<?php

function getIdUser($dbh, $email)
{
	$stmt = $dbh->prepare("SELECT * FROM estiuser WHERE email = :email");
	$stmt->bindParam(':email', $email);
	$stmt->execute();
	$row = $stmt->fetch();
	return $row['id'];
}


function access($dbh ,$data)
{
	$stmt = $dbh->prepare("SELECT COUNT(*) as nb FROM estiuser WHERE email=:email AND password=:password");
	$stmt->bindParam(':email', $data['email']);
	$stmt->bindParam(':password', $data['password']);
	$stmt->execute();
	$row = $stmt->fetch();
	return $row;
}