<?php

function getAllEnregistrement($dbh, $iduser)
{
	$stmt = $dbh->prepare("SELECT * FROM estienregistrement WHERE iduser = :iduser");
	$stmt->bindParam(':iduser', $iduser);
	$stmt->execute();
	$all_enregistrement =  array();
	while ($row = $stmt->fetch())
	{
		$all_enregistrement[] = $row;
	}
	return $all_enregistrement;
}

