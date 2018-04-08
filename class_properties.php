<?php 
/**
* 
*/
class Student
{

var $first_name;
var $last_name;
var $country;


	 
	 
}


$student1 = new Student;
$student1->first_name = 'Jarmila';
$student1->last_name = 'baloghova';
$student1->country = 'Slovakia';









$student2 = new Student;
$student2->first_name = 'karamo';
$student2->last_name = 'njie';
$student1->country = 'The Gambia';



echo "My name is " . $student1->first_name . " " . $student1->last_name .  "<br />";
echo "My name is " .  $student2->first_name . " " . $student2->last_name .  "<br />";



$class_variables = get_class_vars('Student');
echo "The class variables are: <br />";

echo "<pre>";

print_r($class_variables);

echo "</pre>";




$object_variables = get_object_vars($student1);
echo "The object variables are: <br />";

echo "<pre>";

print_r($object_variables);

echo "</pre>";


if (property_exists('Student', 'first_name')) {
	echo "Property first_name in student class exist. <br /> ";
}else{

	echo "Property first_name in student class does not exist. <br /> ";

}




?>