<?php

function connectDB(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bibliotheque";

    //creation de la connexion
    $conn = new mysqli($servername, $username, $password,  $dbname);

    //verifier la connexion
    if($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }
    return $conn;
}
?>