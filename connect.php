<?php
$db_host = "localhost";
$db_user ="root";
$db_password = "";
$db_name ="Pathway_system";

$connect = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$connect){
    die("Couldnot connect to database".mysqli_error($connect));
};
?>