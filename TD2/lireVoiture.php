<?php

require_once 'Model.php';

$rep = Model::$pdo->query('SELECT * FROM Voiture');
	$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach ($tab_obj as $voit) {
	echo "<p> Voiture immatriculée $voit->immatriculation de marque $voit->marque (couleur $voit->couleur) </p>"; }

?>