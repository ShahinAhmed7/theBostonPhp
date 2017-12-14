<?php 
	$fonts = "arial";
	// $color = "#dc1d00";

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello php</title>
    <link rel="stylesheet" href="style.css">

    <style>
		body{
		  font-family: <?php echo $fonts;?>;
		 /* color: <?php echo $color; ?>*/
		}
    </style>


</head>
<body>

    <div class="php-style">
        <h2><?php echo "The Boston Basic PHP" ;?></h2>
           
           <?php 

            $village = 'madhukhali';

            $others = array('$s', 'j', 'h');

            if($village =='madhukhali'){
              echo "hello";
            } else{
              echo "nothing";
            }


           ?>

  


       </div>
</body>
</html>













