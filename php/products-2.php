<?php

	$localhost="localhost";
	$root="root";
	$password="";
	$database="test_database";
	$connect=new MYSQLI($localhost,$root,$password,$database);
	
	if($connect){
		$data_arr=$connect->query("select * from products");
		while($result=$data_arr->fetch_object()) {
		echo "<pre>";
		print_r($result);
			echo "tittle= ".$result->tittle ."</br>";
			echo "desc= ".$result->description."</br>";
			echo "====================</br>";
		}
		
	}else{
		echo"not ok";
	}

	if($_SERVER['REQUEST_METHOD']=="POST"){
	
		echo"id:".$_POST['id']."</br>";
		echo"title:".$_POST['title']."</br>";
		echo"description:".$_POST['description']."</br>"; 
		echo"price:".$_POST['price']."</br>";
		echo"size:".$_POST['size']."</br>";
		echo"color:".$_POST['color']."</br>";
				
	}else{
		
		echo"test";
	}
?>