<?php

	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		echo"name:".$_POST['name']."</br>";
		echo"email:".$_POST['email']."</br>";
		echo"password:".$_POST['password']."</br>";
		echo"phone:".$_POST['phone']."</br>";
		echo"address:".$_POST['address']."</br>";
		
		}else{
		
		echo"test";
	}
?>