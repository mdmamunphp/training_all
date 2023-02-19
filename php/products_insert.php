<?php

	$localhost="localhost";
	$root="root";
	$password="";
	$database="test_database";
	$connect=new MYSQLI($localhost,$root,$password,$database);
	
	if($connect){
		
		echo "ok";
		
	}else{
		echo"not ok";
	}
		
	if($_SERVER['REQUEST_METHOD']=="POST"){
	
	
					$id=$_POST['id'];
					$title=$_POST['title'];
					$desc=$_POST['description'];
					$price=$_POST['price'];
					$size=$_POST['size'];
					$color=$_POST['color'];
					$data=$connect->query("insert into products set tittle='$title',description='$desc',price='$price',size_id='$size',color_id='$color'");
					
			if($data){
				echo "insert done";
			}else{
				echo "insert not done";
			}
		
	}else{
		
		echo"test";
	}
	
	if($connect){
		$data_arr=$connect->query("select * from products");
			$html="";
			$html.="<table>";
			$html.="<tr><th>id</th><th>title</th><th>description_id</th><th>price</th><th>size_id</th><th>color_id</th><th>action</th></tr>";
			
		while($result=$data_arr->fetch_object()){
		
				$html.="<tr>";
				$html.="<td>".$result->id ."</td>";
				$html.="<td>".$result->tittle ."</td>";
				$html.="<td>".$result->description ."</td>";
				$html.="<td>".$result->price ."</td>";
				$html.="<td>".$result->size_id ."</td>";
				$html.="<td>".$result->color_id ."</td>";
				$html.="<td> <a href='product_single_view.php?data=".$result->id ."'>view</a></td>";
			$html.="</tr>";
		}
		
			$html.="</table>";
			 
				echo $html;
				
		}else{
			echo "not ok";
	}
?>