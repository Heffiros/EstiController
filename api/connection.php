<?php

require_once "../model/userModel.php";
require_once "../php/connectdb.php";

$row = access($dbh, $_GET);
$co = array('idUser' => 0);
if ($row['nb'] == 1) {
	$co['idUser'] = getIdUser($dbh, $_GET['email']);;
	echo json_encode($co, true);
}
else
	echo json_encode($co, true);