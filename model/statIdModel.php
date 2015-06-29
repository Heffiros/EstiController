<?php

function addBystanders($dbh, $data)
{	
	$stmt = $dbh->prepare("INSERT INTO estistat (userId, estiId, date_pass) VALUES (:userId, :estiId, NOW()) ");
	$stmt->bindParam(':userId', $data['userId']);
	$stmt->bindParam(':estiId', $data['estiId']);
	$stmt->execute();
	return 0;
}

function addTimeStamp($dbh, $data)
{
	$stmt = $dbh->prepare("INSERT INTO estiTime (userId, estiId, time_connect) VALUES (:userId, :estiId, :time_connect) ");
	$stmt->bindParam(':userId', $data['userId']);
	$stmt->bindParam(':estiId', $data['estiId']);
	$stmt->bindParam(':time_connect', $data['time_connect']);
	$stmt->execute();
}

