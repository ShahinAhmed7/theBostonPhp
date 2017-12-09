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
        <h2><?php echo "PHP Basic Class" ;?></h2>
            <?php 

            echo '<h1>Hello php</h1>';
   		// 1 .String
   		// 2 .integer
   		// 4 .float
   		// 5 .boolean
   		// 6 .array
   		// 7 .object


            echo 'hello world how are you';

            $x = 27;

            var_dump($x) ;



         ?>
       </div>
</body>
</html>













