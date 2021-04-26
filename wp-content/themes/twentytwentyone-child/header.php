<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
    <?php
    wp_head();
    ?>
</head>

<body>
  

<header class="menybar">
<div>
    <a class="logo" href="index.php">
	    <?php //hämtar in texten SUSAN's E-SHOP
		    dynamic_sidebar('logo');
	    ?>
    </a>
</div>
 
 <div class="meny">
     <?php 
     wp_nav_menu(
         [
           'container' => 'nav',
         ]
     );
     ?>
 </div>
  
 
</header>

