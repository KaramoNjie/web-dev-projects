<?php

class Character
{
 
 protected $hp = 100;
 protected $dmg = 10;
 protected $armor  = 147;


protected function __construct()
{

	echo 'The character was created!!';
	
}


public function Attack()
{


echo  $this->dmg. ' POINTS, IS YOUR STRENGHT!!!';



}


	
}