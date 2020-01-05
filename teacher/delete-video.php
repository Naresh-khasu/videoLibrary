<?php 

$con=mysqli_connect('localhost','root','','project5');
	if(isset($_GET['id'])){
		
		$id=$_GET['id'];
		
		
		$sql="delete from videos where id=$id";
		$result=mysqli_query($con,$sql);
		if($result){
			echo'deleted';
		}
		
	

		
	
	}
?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>