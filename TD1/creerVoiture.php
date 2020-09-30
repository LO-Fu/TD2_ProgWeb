<?php
require_once 'formulaireVoiture.html';
foreach ($_POST as $key => $value){
	echo "$key : $value\n";
}
?>