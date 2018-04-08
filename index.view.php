 <!doctype html>
<html lang="en">
<head>
    
<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
<meta charset="utf-8">
<title>PHP LEARNING</title>
   
<!-- STYLE SHEETS -->
    <link href="css/styles.css" rel="stylesheet">
    
 <link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet">

 <style type="text/css">
 	
header{
	background: #ffa31a;

 text-align: center;

}

header li{
    color: blue;
}

 nav ul{
	list-style: none; 
}


 </style>

    
</head>
<body>

<!-- PAGE HEADER GOES HERE -->
    <header>
<ul> 



<?php foreach ($tasks as $tas): ?>


<li>

 <?php if ($tas->completed) : ?>

  <strike><?= $tas->description; ?></strike> 
    
  <?php else: ?>

  <?= $tas->description; ?>

   <?php endif; ?>

</li>

  




<?php endforeach ?>

   



</ul>










         
    </header>
    
<!-- PAGE NAVIGATION GOES HERE -->
    <nav>
        <ul>
            <li><a href="index.html">New</a></li>
            <li><a href="used.html">Used</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="location.html">Location</a></li>
        </ul>
    </nav>
    
<!-- PAGE CONTENT GOES HERE -->
    b 
    
<!-- PAGE FOOTER GOES HERE -->
    <footer>
    <p>&copy;2018 Karamo njie &bull; <a href="tel:9875551234">987-555-1234</a></p>
    </footer>
    
</body>
</html>
