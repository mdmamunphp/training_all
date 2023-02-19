 <?php
		$localhost="localhost";
		$root="root";
		$password="";
		$database="test_database";
	$connect= new MYSQLI($localhost,$root,$password,$database);

	if($connect){
		echo "ok";
		
	}else{
		echo "not ok";
	}
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
			$firstname=$_POST['first_name'];
			$lastname=$_POST['last_name'];
			$departmentid=$_POST['department_id'];
			$joiningdate=$_POST['joining_date'];
			$salary=$_POST['salary'];
			$commission=$_POST['commission'];
			$joiningmonth=$_POST['joining_month'];
		$data=$connect->query("insert into employee set first_name='$firstname',last_name='$lastname'");
	
		if($data){
			echo "insert done";
			
		}else{
			echo "insert not done";
		}
	
	}else{
		echo "test";
	}
	
?>