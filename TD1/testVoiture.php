<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> List of Voiture </title>
    </head>
   
    <body>
    	<?php
    		require_once 'Voiture.php';
    		$car1 = new Voiture('Peugeot','white','AQ12462Q');
    		echo "$car1->afficher()";
    	?>
    </body>
</html> 