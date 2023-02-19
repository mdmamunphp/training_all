<?php
		$ocalhost="ocalhost";
		$root="root";
		$password=" ";
		$database="test_batabase";
		$connect=new MYSQLI($ocalhost,$root,$password,$database);
		
	if($connect){
		echo "ok";
		
	}else{
		echo "not ok";
	}
?>