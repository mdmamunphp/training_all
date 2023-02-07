<?php
	$localhost="localhost";
	$root="root";
	$password="";
	$database="test_database";
	//creacte connection 
	$connect=new MYSQLI($localhost,$root,$password,$database);
	if ($connect){
			
			$data_arr=$connect->query("select * from products");
			print_r($data_arr);
	}else{
			echo "not ok";
	}
	

	if($_SERVER['REQUEST_METHOD']=="POST"){
	
		echo"id:".$_POST['id']."</br>";
		echo"title:".$_POST['title']."</br>";
		echo"description:".$_POST['description']."</br>";
		echo"price:".$_POST['price']."</br>";
		echo"size:".$_POST['size']."</br>";
		echo"color:".$_POST['color']."</br>";
		echo"discount:".$_POST['discount']."</br>";
		
		}else{
		
		echo"test";
	}
?>