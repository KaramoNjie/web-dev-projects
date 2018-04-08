<?php 


/**
* 
*/
class Student
{
	
	 
}



$myclass = get_declared_classes();

echo "myclass: " .implode(',', $myclass) . "br";



$class_names = ['product', 'Student', 'student'];

foreach ($class_names as $class_name) {



	if (class_exists($class_name)) {

		echo "{$class_name} is declared class.<br>" 	;
		# code...
	} else{
		echo "{$class_name} not a declared class.<br />";
	}
	# code...
}


















 ?>