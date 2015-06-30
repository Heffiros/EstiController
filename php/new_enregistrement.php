<?php

require_once "connectdb.php";
require_once "../model/enregistrementModel.php";
session_start();

insertNewEnregistrement($dbh, $_POST, $_SESSION['id']);
header('Location: ../backoffice/firstpage.php');