<?php

include 'dbconfig.php';

if(isset($_POST['submit'])){
    
    $name  =  test_input($_POST['name']);
    $email =  test_input($_POST['email']);
    $phone =  test_input($_POST['phone']);
    $city  =  test_input($_POST['city']);
    
    $sql="INSERT INTO users(name,email,phone,city)VALUES('$name','$email','$phone','$city')";
    
    if(mysqli_query($dbconn, $sql)){
        
        $result="Record successfully added!";
         
    
    }else{
        $result="oops something went wrong!!" . mysqli_error($dbconn);
    }
        
}


function test_input($data){
    
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
  
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Karamo Njie">
    <link rel="icon" href="">

    <title>PHP CRUD APPLICATION</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    
</head>


<body  class="bg-secondary"> 
     <div class="container">
        <div class="row p-2">
           <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
               <h4 class="text-center text-info p-2">CREATE DATABASE RECORD</h4>
               <form action="" method="POST">
                 <div class="form-group">
                    <label for="name" class="text-info">Name</label>
                    <input type="text" name="name"  class="form-control" placeholder="name" reguired> 
                 </div>
                 <div class="form-group">
                    <label for="email" class="text-info">Email Address</label>
                    <input type="text" name="email"  class="form-control" placeholder="email" reguired> 
                 </div>
                 <div class="form-group">
                    <label for="phone" class="text-info">Phone</label>
                    <input type="tel" name="phone"  class="form-control" placeholder="phone" reguired> 
                 </div>
                 <div class="form-group">
                    <label for="city" class="text-info">City</label>
                    <input type="text" name="city"  class="form-control" placeholder="city" reguired> 
                 </div>
                 <div class="form-group">
                    <input type="submit" name="submit" value="CREATE" class="btn btn-info btn-block"> 
                 </div>
                 <div class="form-group text-center">
                     <a href="view.php" class="text-dark lead  font-weight-bold">Display Records</a>
                 </div>
                 <div class="form-group text-center">
                     <p class="lead" ><?= $result ?></p>
                 </div>
                 
                  
                   
                   
               </form>
           </div>
            
        </div>
     </div>

</body>
</html>