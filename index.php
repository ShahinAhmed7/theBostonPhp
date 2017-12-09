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

            $beautifull = 'rajshahi';

            $cities = array('dhaka', 'khulna', 'kushtia');


            if($beautifull == 'rajshahi') {
              echo '<h1>Most beautifull city '.$beautifull.'</h1>';
            } else{
              echo '<h1>We don\'t know</h1>';
            }

            echo '<h1>Second city is '.$cities[0].'</h1>';


              if($cities[1] == 'khulna'){
                echo '<h1>true</h1>';
              } else{
                echo '<h1>false</h1>';
              }

         ?>

<!--         <?php if($beautifull == 'rajshahi') : ?>
            <h1>Most beautifull city rajshahi</h1>
          <?php else : ?>
            <h1>We don't know</h1>
        <?php endif; ?>
 -->

        


  


       </div>
</body>
</html>













