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
	<link rel="stylesheet" type="text/css" href="../datatable/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../css/backoffStyle.css">
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="../datatable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../datatable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
    	$('#enregistrement').DataTable();
	} );
</script>
  </head>


  <body>
        <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand text-danger" href="#">Esti Controller</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#section1">Start</a></li>
                <li>&nbsp;</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                
            </ul>
        </div>
    </div>
</nav>

<div class="block-left ">

    <div class="btn-group-vertical btnbtnbtn">
      <button class="btn btn-danger">
       CLICK LA
      </button>
      <br>
      <button class="btn btn-danger">
       CLICK LA
      </button>
      <br>
      <button class="btn btn-danger">
       CLICK LA
      </button>
      <br>
      <button class="btn btn-danger">
       CLICK LA
      </button>
    </div>

</div>

    <div class="tabe col-md-offset-2">
      	 <div class="container">
      	   <table id="enregistrement" class="display" cellspacing="0" width="100%">
      		  <thead>
      			<tr>

      				<th>id</th>
      				<th>title</th>
      				<th>created</th>
      				<th>actions</th>

      			</tr>
      		  </thead>
      	  </table>
        </div>
  </div>


  </body>

