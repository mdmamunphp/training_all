<?php
			$localhost="localhost";
			$root="root";
			$password="";
			$database="test_database";
			$connect=new MYSQLI($localhost,$root,$password,$database);

		if($connect){
			echo "ok";
			
		}else{
			echo "not ok";
		}
		
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$fn=$_POST['first_name'];
			$ln=$_POST['last_name'];
			$di=$_POST['department_id'];
			$jd=$_POST['joining_date'];
			$salary=$_POST['salary'];
			$com=$_POST['commission'];
			$jm=$_POST['joining_month'];
			$data=$connect->query("insert into employee set first_name='$fn',last_name='$ln'");
			
		if($data){
			echo "done";
			
		}else{
			echo "not done";
		}
		
	}else{
		echo "test";
	}
	
?>