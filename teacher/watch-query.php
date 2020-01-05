<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Queries</title>
</head>

<body>
<?php $con=mysqli_connect('localhost','root','','project5');
	

	if(isset($_GET['id'])){
		
		$id=$_GET['id'];
		
		
		$sql="select name from videos where id=$id";
		$result=mysqli_query($con,$sql);
		
		while($row=mysqli_fetch_assoc($result)){
			$name=$row['name'];
			echo'<h2>'.($name).'</h2>';
				echo "<video width='600'  height='500' controls >
		<source src='videos/".$name."' >
		</video>";
		}
		
	
	}
	else{
		//echo('novideos');
		//		echo "<video width='200'  height='300' controls >
		//<source src='teacher/videos/computer/1/".$name."' >
		//</video>";
		
	}
	
	
	?>
</body>
</html>