<?php
require_once "../php/connectdb.php";
require_once "../model/enregistrementModel.php";
session_start();
$all_enregistrement = getAllEnregistrement($dbh, $_SESSION['id']);
?>

<html>
  
  <head>
    <meta charset="utf-8">
    <title>Section scroller one-page template</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body >

  </body>


