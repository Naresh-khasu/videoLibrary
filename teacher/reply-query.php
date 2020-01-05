<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
    #contents{
        text-align: center;
    }
    </style>
       <style>
        h2{
            text-transform: uppercase;
            color: antiquewhite;
        }
    </style>

<title>Teacher home page</title>
<link type="text/css" rel="stylesheet" href="dashboard.css">
</head>

<body>`
<div id="container">
	<div id="header">
		<div id="profile">
			
			<div id="logo"></div>
				<article id="info"><br>
            </article>
				<aside id="img">
			
					
				</aside>
			
		</div><div id="nav">
		<nav>
			<ul id="menu">
			   <li><a href="dashboard.php">home</a></li>
				
				
				
				
			</ul>
			
		</nav>
		</div>
		<div class="banner"></div>
	</div>
	
	<div id="contents">
	
        <?php $con=mysqli_connect('localhost','root','','project5');
	$id='';
	$name='';

	if(isset($_GET['id'])){
		
		$id=$_GET['id'];
		
		
		$sql="select name from videos where id=$id";
		$result=mysqli_query($con,$sql);
		
		while($row=mysqli_fetch_assoc($result)){
			$name=$row['name'];
			echo'<h2>'.($name).'</h2>';
				echo "<video width='600'  height='500' controls >
		<source src='../videos/".$name."' >
		</video>";
		}
		
	
	}
	else{
		echo('novideos');
				/*echo "<video width='200'  height='300' controls >
		<source src='teacher/videos/computer/1/".$name."' >
		</video>";*/
		
	}
	
	
	?>
	
	<?php include('type-query.php'); ?>

	</div>
    
  
        
    </div>
    



</body>
</html>