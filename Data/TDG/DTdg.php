<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/Tdg.php";
class DTdg extends Tdg{
	
	public function get($id){
		//sql statments to get laptop with ID
		//return $resultSet; if found
		//or null if not found;
		/*$qry = "SELECT  FROM  WHERE";
		$result = mysql_query($qry);
		if ($result){
			//return resultset ;
		}
		else{
			return "Operation Unsuccessful";
		}*/
		
		
	}
	
	public function save($desktop){
		//some database update db statement
		/*$qry = "UPDATE SET WHERE";
		$result = mysql_query($qry);
		if ($result){
			return "Operation Successful";
		}
		else{
			return "Operation Unsuccessful";
		}*/
		//print_r($laptop);
		
		$newArr = array();
		$newArr = (array) $desktop;
		$values = array();
		
		
		echo "array is ";
		$product = array_values($newArr);
		
		$brandname = $product[7];
		$modelNumber = $product[8];
		$price = $product[9];
		$weight = $product[10];
		$processorType = $product[3];
		$ramSize = $product[4];
		$hdSize = $product[5];
		$noCPU = $product[6];
		$height = $product[0];
		$length = $product[1];
		$width=$product[2];
		
			$servername = "localhost";
			$dbname = "pomoroad_myTestDB";
	
			// Create connection
			$conn = new mysqli($servername, 'root', '', $dbname);
			
			$sql = "INSERT INTO Laptop (brandname, modelNumber, price, weight, processorType, ramSize, hdSize, noCPU, width, length, height) VALUES ('$brandname', '$modelNumber', '$price', '$weight', '$processorType', '$ramSize', '$hdSize', '$noCPU', '$width', '$lenght', '$height')";
		   if($conn->query($sql)===TRUE){
			   return "Operation sucessful";
			   
			   
		   }else{
			   echo "Error: " .$sql."<br>".$conn->error;
		   }
		
			$conn->close();
			
	}
	

	public function delete($id){
		//$newArr = (array) $laptop;
		//$modelNumber = $product[8];
		/*
		$qry = "DELETE FROM Laptop WHERE";
		$result = mysql_query($qry);
		if ($result){
			return "Operation Successful";
		}
		else{
			return "Operation Unsuccessful";
		}*/
		
			$servername = "localhost";
			$dbname = "pomoroad_myTestDB";
	
			// Create connection
			$conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog
			
			$sql = "DELETE FROM Desktop WHERE modelNumber ='$id'";
		   if($conn->query($sql)===TRUE){
			   return "Operation sucessful";
			   
			   
		   }else{
			   echo "Error: " .$sql."<br>".$conn->error;
		   }
		
			$conn->close();
		
	}
	
	
	
	
	
	
}


?>