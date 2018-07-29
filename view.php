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


<body  class="bg-light-gray"> 
     <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mt-3">
                <table class="table table-striped table-bordered">
                   <thead>
                       <tr class="bg-dark text-light text-center">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>City</th>
                          <th>Update</th>
                          <th>Delete</th>
                           
                       </tr>
                   </thead>
                   
                   <tbody>
                       <?php
                       
                       include 'dbconfig.php';
                       $sql="SELECT * FROM users";
                       $result=mysqli_query($dbconn,$sql);
                       if(mysqli_num_rows($result)>0){
                           while($row=mysqli_fetch_assoc($result)){
                      
                       ?>
                       
                       <tr class="text-center">
                           <td><?= $row['id']; ?></td>
                           <td><?= $row['name']; ?></td>
                           <td><?= $row['email']; ?></td>
                           <td><?= $row['phone']; ?></td>
                           <td><?= $row['city']; ?></td>
                           <td><a class="btn btn-primary" href="update.php?id=<?= $row['id']; ?>">Update</a>
                           </td>
                           <td>
                           <a  class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>">Delete</a>
                       </td>
                       </tr>
                       <?php }}?>
                       
                     
                   </tbody>
                    
                    
                </table>
            </div>
            
        </div>
         
     </div>

</body>
</html>