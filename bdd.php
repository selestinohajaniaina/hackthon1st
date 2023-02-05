<?php
    $host="localhost";
    $bdd = "bdduniv";
    $user ="root";
    $pass = "";
    try{
        $connection = new PDO("mysql:host=".$host.";dbname=".$bdd,$user,$pass);
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Erreur ".$e -> getMessage();
    }
?>