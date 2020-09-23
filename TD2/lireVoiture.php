<?php

require_once 'Model.php';
require_once 'Voiture.php';

$rep = Model::$pdo->query('SELECT * FROM Voiture');
$tab_voit = Voiture::getAllVoitures();
foreach ($tab_voit as $voit) {
    $voit->afficher();

?>