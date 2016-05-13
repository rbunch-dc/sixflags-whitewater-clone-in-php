<?php
	include 'includes/db_connect.php';

	// print_r($_POST);

	if($_GET['task'] == 'update'){
		//We know they got here from teh update form!!!!
		$what_to_update = '';
		foreach($_POST as $key=>$value){
			$what_to_update .= $key."='".$value."',";
		}

		$trimmed_update = rtrim($what_to_update, ",");

		$query = 'UPDATE promos 
			SET ' . $trimmed_update
			. ' WHERE id = ' . $_GET['id'];
		$update_result = mysql_query($query);
		header('Location: admin.php?updated=true');		
	}else if($_GET['task'] == 'insert'){
		//they are at the new prom page!!!!

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
	}else if($_GET['task'] == 'delete'){
		//DELETE THE PROMO!!
		$query = 'DELETE FROM promos WHERE id = '.$_GET['id'];
		$delete = mysql_query($query);
		header('Location: admin.php?deleted=true');
	}

?>









