<?php

function getAllEnregistrement($dbh, $iduser)
{
	$stmt = $dbh->prepare("SELECT * FROM estienregistrement WHERE iduser = :iduser");
	$stmt->bindParam(':iduser', $iduser);
	$stmt->execute();
	return $stmt->fetchAll();
}

