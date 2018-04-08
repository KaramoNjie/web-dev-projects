
<!doctype html>
<html lang="en">
<head>
    
<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
<meta charset="utf-8">
<title>Object-Oriented PHP! </title>
   
<!-- STYLE SHEETS -->
    <link href="css/styles.css" rel="stylesheet">
    
 <link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet">

    
</head>
<body>

<!-- PAGE HEADER GOES HERE -->
    <header>
        <h1> OBJECT-ORIENDTED PHP </h1>
        
    </header>



<?php  

				class Animal
				{


					protected $name;
					protected $favorite_food;
					protected $sound;
					protected $id;


					public static $number_of_animals = 0;

                    const PI = "3.14159";
					



					function getName(){
	
		// To refer to data stored in an object you proceed the name
		// of the attribute with $this->yourAttribute
	
		return $this->name;
	
	}
	



					 

                 function __construct(){
	
		// Generate a random id between 1 and 1000000
		
		$this->id = rand(100, 1000000);
		
		echo $this->id . " has been assigned " . "<br />";
		
		// You access static attributes with Class::$static_att
		
		Animal::$number_of_animals++;
	
	}




















					public function __destruct(){


						echo $this->name ."has been destroyed :(";




					}




					function __get($name){

						echo "Ask for " . $name. "<br />";

						return $this->name;

					}



					function __set($name, $value)

					{



						switch ($name) 

						{

							case "name" : 
							$this->name = $value;
							break;


							case "favorite_food" :
							$this->favorite_food = $value;
							break;

							case "sound": 
							$this->sound = $value;
							break;


							default :
							echo $name . "Not Found";
							break;



						}


						echo "Set " . $name ." to ". $value . "<br />";


					}



					function run(){

						echo $this->name . "runs <br />";
					}

                 }



              /**
              * 

               CREATING A SUB CLASS TO IONHERITE FROM THE ANIMAL CLASS
              */
                class Dog Extends Animal
	            {

	         
	              
	              function run(){

						echo $this->name . "runs like crazy<br />";
					}


	            }



	            $animal_one = new Animal();

	            $animal_one->name = "Lilly";
                $animal_one->favorite_food = "cashew!";
                $animal_one->sound = "Ruff";


               echo $animal_one->name . " says ".
				" give me some " . $animal_one->sound . $animal_one->favorite_food . " my id is " .
				$animal_one->id . "<br />". " Total animals = " . Animal::$number_of_animals .
				"<br /><br />";
				



 


	         
        		
        	
        	
  ?>





 
    
</body>
</html>