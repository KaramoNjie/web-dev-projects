<?php   

/**
* 
*/
 
/**
* 
*/


//require 'bootstrap.php';
$query = require 'bootstrap.php';

 

$tasks = $query->selectAll('todos');



/*

//USING THE ARRAY_MAP FUNTION TO values OF THE DATABASE OUTPUT
$tasks = array_map(function ($task){
//return 'foobar';
//return new Task();
return new Task();
}, $tasks);


*/  



//die(var_dump($tasks));
   
   
 
require 'index.view.php';


