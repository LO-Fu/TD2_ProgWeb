<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> List of cars </title>
    </head>
   
    <body>
      <ul>
        <?php
        /*$car = array(
          'marque' => 'Renault',
          'couleur' => 'blue',
          'immatriculation' => '256AB34');
        echo "Car $car[immatriculation] of make $car[marque] (color $car[couleur])";*/
        $car1 = array(
          'marque' => 'Renault',
          'couleur' => 'blue',
          'immatriculation' => '256AB34');
        $car2 = array(
          'marque' => 'Peugeot',
          'couleur' => 'white',
          'immatriculation' => 'AQ184A4');
        $cars = array(
          'car1' => $car1,
          'car2' => $car2);
        if (empty($cars)){
          echo "There is no car.";
        }
        foreach ($cars as $key => $value) {
          echo "Car $value[immatriculation] of make $value[marque] (color $value[couleur])\n";
        }
        ?>
      </ul>
    </body>
</html> 