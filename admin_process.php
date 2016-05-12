<?php
	include 'includes/db_connect.php';

	// print_r($_POST);

	$db_columns = '';
	$values = '';
	foreach($_POST as $key=>$value){
		$db_columns .= $key.',';
		$values .= "'".$value."',";
	}

	$trimmed_values = rtrim($values, ",");
	$trimmed_db_columns = rtrim($db_columns, ",");

	$query = 'INSERT INTO promos 
		('.$trimmed_db_columns.') 
		VALUES 
		('.$trimmed_values.')';

		$result = mysql_query($query);

		header('Location: admin.php?updated=true');

?>









