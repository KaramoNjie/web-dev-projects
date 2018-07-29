<?php
include 'dbconfig.php';

$id=$_GET['id'];
$result=mysqli_query($dbconn,"SELECT * FROM users WHERE id='$id'");
$row=mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    
//    $sql="UPDATE users SET name='$name',email='$email',phone='$phone',city='$city' WHERE id={$id}";
    
     $sql="UPDATE users SET name='$name',email='$email', phone='$phone',city = '$city' WHERE id='$id'";
    
 
    
    
   if(mysqli_query($dbconn,$sql)){
       
       header("location:view.php");
       
   }
    
    
    
    
    
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
               <h4 class="text-center text-info p-2">UPDATE DATABASE RECORD</h4>
               <form action="" method="POST">
                 <div class="form-group">
                    <label for="name" class="text-info">Name</label>
                    <input type="text" name="name"  class="form-control" value="<?= $row['name']; ?>" reguired> 
                 </div>
                 <div class="form-group">
                    <label for="email" class="text-info">Email Address</label>
                    <input type="text" name="email"  class="form-control" value="<?= $row['email']; ?>" reguired> 
                 </div>
                 <div class="form-group">
                    <label for="phone" class="text-info">Phone</label>
                    <input type="tel" name="phone"  class="form-control" value="<?= $row['phone']; ?>" reguired> 
                 </div>
                 <div class="form-group">
                    <label for="city" class="text-info">City</label>
                    <input type="text" name="city"  class="form-control" value="<?= $row['city']; ?>" reguired> 
                 </div>
                 <div class="form-group">
                    <input type="submit" name="submit" value="UPDATE" class="btn btn-info btn-block"> 
                 </div>
                 <div class="form-group text-center">
                     <a href="index.php" class=" text-info text-dark lead  font-weight-bold">Create Records</a>
                 </div>
            
               </form>
           </div>
            
        </div>
     </div>

</body>
</html>