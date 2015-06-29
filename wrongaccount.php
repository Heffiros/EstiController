<?php

//Si mec plante de mdp
//Nouveau form plus reset

try {
    $dbh = new PDO('mysql:host=localhost;dbname=esticontroller', $user, $password);
    foreach($dbh->query('SELECT * from estiuser') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    //die();
}
