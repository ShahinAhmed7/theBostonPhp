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

        $day = '15';
        $month = '10';
        $year = '2017';

        echo 'today is '.$day.' '.$month.' '.$year.'';

           ?>

  


       </div>
</body>
</html>













