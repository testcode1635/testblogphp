<?php

$host ="localhost";
$username ="sujon";
$password ="password";
$database ="phpblog";

$con =mysqli_connect("$host","$username","$password","$database");
if(!$con){
    header("Location: ../errors/dberror.php");
    die();
}

?>