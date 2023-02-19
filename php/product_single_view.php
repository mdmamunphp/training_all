<?php

	$localhost="localhost";
	$root="root";
	$password="";
	$database="test_database";
	$connect=new MYSQLI($localhost,$root,$password,$database);
	
	if($connect){
		
		echo "ok<br>";
		
	}else{
		echo"not ok <br>";
	}
		
	$update_id=$_GET['data'];;
	
	if($connect){
		$data_arr=$connect->query("select * from products where id=$update_id");
			$html="";
			$html.="<table>";
			$html.="<tr><th>id</th><th>title</th><th>description_id</th><th>price</th><th>size_id</th><th>color_id</th></tr>";
			
		while($result=$data_arr->fetch_object()){
			$html.="<tr>";
				$html.="<td>".$result->id ."</td>";
				$html.="<td>".$result->tittle ."</td>";
				$html.="<td>".$result->description ."</td>";
				$html.="<td>".$result->price ."</td>";
				$html.="<td>".$result->size_id ."</td>";
				$html.="<td>".$result->color_id ."</td>";
			$html.="</tr>";
		}
		
			$html.="</table>";
			 
				echo $html;
				
		}else{
			echo "not ok";
	}
?>