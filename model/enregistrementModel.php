<?php

function getAllEnregistrement($dbh, $iduser)
{
	$stmt = $dbh->prepare("SELECT * FROM estienregistrement WHERE iduser = :iduser");
	$stmt->bindParam(':iduser', $iduser);
	$stmt->execute();
	return $stmt->fetchAll();
}

function  getEnregistrementByEstiID($dbh, $estiId)
{
	$stmt = $dbh->prepare("SELECT * FROM estienregistrement WHERE estiId = :estiId");
	$stmt->bindParam(':estiId', $estiId);
	$stmt->execute();
	return $stmt->fetchAll();
}

function insertNewEnregistrement($dbh, $data, $iduser)
{
	$stmt = $dbh->prepare("INSERT INTO estienregistrement (estiId, iduser, type, title, contenu, created, active) VALUES (:estiId, :iduser, :type, :title, :contenu, NOW(), 1)");
	$stmt->bindParam(':estiId', $data['Estimote_Id']);
	$stmt->bindParam(':iduser', $iduser);
	$stmt->bindParam(':type', $data['button']);
	$stmt->bindParam(':title', $data['Title']);
	if ($data["button"] == 3) {
		$stmt->bindParam(':contenu', $data['test']);
	} else {
		$stmt->bindValue (':contenu', NULL);
	}
	$stmt->execute();
}
