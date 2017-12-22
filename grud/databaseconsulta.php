<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database(){
	try{


// Create connection
$conn = new mysqli("mysql785.umbler.com", "joaoaluz", "joao99945222", "controle_materia");
	return $conn;
	}
	catch(Exception $e){
		echo $e->getMessage;
		return null;
	}

}



function close_database($conn){

	try{
		mysql_close($conn);
	}catch(Exception $e){
		echo $e ->getMessage();
	}
}



//pesquisa registro por id em uma tabela do bbanco de daods

function find($table = null, $id= null){
	$database = open_database();
	$found = null;
	
	try{

		if($id){


		$sql =  "SELECT * FROM " . $table . " WHERE id = " . $id ;
		$result = $database->query($sql);

			if($result->num_rows > 0){
			$found = $result -> fetch_assoc();

			}
		}else{

		$sql = "SELECT * FROM " .$table;
		$result = $database->query($sql);

			if($result->num_rows>0){
			$found = $result->fetch_all(MYSQLI_ASSOC);

			}
		}
	}catch (Exception $e){
	$_SESSION['message'] = $e ->GetMessage();
	$_SESSION['type'] = 'danger';
	}

close_database($database);
return $found;

}



function find_all($table){

	return find($table)
}

?>