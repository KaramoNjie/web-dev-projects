<?php   

$dbhost="localhost";
$dbuser="root";
$dbpass="root";
$dbname="crudapp";


$dbconn = mysqli_connect($dbhost,$dbuser, $dbpass,$dbname);
 

if(!$dbconn){
    die("could not connect to the database " .mysqli_connect_error($dbconn));
} 









?>