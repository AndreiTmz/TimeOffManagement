<?php
	include "inc/connect.php";
	
	$dbConnection = new dbClass();
	$dbConnection->connect();
	
	$userId = $_SESSION['user_id_concedii'];
	$data_inceput = $_GET['d'];
	
	$deletePeriodQuery = "DELETE FROM concedii WHERE id_angajat=$userId AND data_inceput='$data_inceput'";
	$dbConnection->deleteFromDB($deletePeriodQuery);
	
	header("Location:editare.php");

?>