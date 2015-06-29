<?php

require_once "../php/connectdb.php";
require_once "../model/enregistrementModel.php";
require_once "../model/statIdModel.php";

$row = getEnregistrementByEstiID($dbh, $_GET['estiId']);
$return = array("state" => "");
if ($row[0]['type'] == 3) {
	//push notif ou lien vers la pub
	$return['state'] = "lien";
} else if ($row[0]['type'] == 2) {
	addBystanders($dbh, $_GET);	
} else if ($row[0]['type'] == 1) {
	$return['state'] = "timestamp";
	echo json_encode($return, true);
}