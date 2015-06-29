<?php

require_once "../php/connectdb.php";
require_once "../model/enregistrementModel.php";

$row = getEnregistrementByEstiID($dbh, $_GET['estiId']);
echo $row[0]['contenu'];	