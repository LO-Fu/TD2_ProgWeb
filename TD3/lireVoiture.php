<?php

require_once 'Model.php';
require_once 'Voiture.php';

/*$tab_voit = Voiture::getAllVoitures();
foreach ($tab_voit as $voit) {
    $voit->afficher();
}

echo Voiture::getVoitureByImmat('AHG46FZ4')->afficher();
*/

$voiture = new Voiture('Renault','Vert','GZTACTIC');
$voiture->save();
?>