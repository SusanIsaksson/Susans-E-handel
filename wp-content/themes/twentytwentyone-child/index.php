<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
get_header();
?>
</head>
<body>
<p>banan</p>

<?php 
        while(have_posts()) { //starta loopen
            the_post();    
    
    ?>
   
    <h2><?php
        the_title();
    ?></h2>
    
      
            <img src="<?php the_post_thumbnail_url(); ?>" alt="en bild">
            
        <p><?php
            the_content();
        ?></p>
        </a>             
    </div>
    <?php
    } //avsluta loopen
    ?>



<?php
get_footer();
?>