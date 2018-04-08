<?php


$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';


//$pdo = Connection::make();



//$query = new QueryBuilder($pdo);


//$query = new QueryBuilder($pdo);



/*
$query = new QueryBuilder(

	Connection::make()

);

*/



return  new QueryBuilder(

DatabaseConnectionClass::make($config['database'])

);