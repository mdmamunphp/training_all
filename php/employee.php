<?php

	$severname="localhost";                                                                          
	$username="root";
	$password="";
	$database="test_database";                                                                           
	$connect=new MYSQLI($severname,$username,$password,$database);
	
		if($connect){                                                                                                      
		$data_arr=$connect->query("select * from employee");                              
		while($result=$data_arr->fetch_object()) {                                                 
		echo "<pre>";   																					  
		print_r($result);                                                                                  
			echo "id:".$result->id ."</br>";
			echo "first name:".$result->first_name ."</br>";
			echo "last name:".$result->last_name ."</br>";
			echo "department id:".$result->department_id ."</br>";
			echo "joining date:".$result->joining_date ."</br>";
			echo "salary:".$result->salary ."</br>";
			echo "commission:".$result->commission ."</br>";
			echo "joining month:".$result->joining_month ."</br>";
		}
		
	}else{                                                                                                      
		echo"not ok";
	}
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
	
		echo"id:".$_POST['id']."</br>";
		echo"first name:".$_POST['first_name']."</br>";
		echo"last name:".$_POST['last_name']."</br>";
		echo"department id:".$_POST['department_id']."</br>";
		echo"joining date:".$_POST['joining_date']."</br>";
		echo"salary:".$_POST['salary']."</br>";
		echo"commission:".$_POST['commission']."</br>";
		echo"joining month:".$_POST['joining_month']."</br>";
				
	}else{
		
		echo"test";
	}
?>