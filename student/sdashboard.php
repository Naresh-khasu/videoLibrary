<?php 
$con=mysqli_connect('localhost','root','','project5');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include('validateStudent.php');?>





<?php $username=$_SESSION['username']; ?>
    <?php $faculty=$_SESSION['faculty']; ?>

<title>Student home page</title>
<link type="text/css" rel="stylesheet" href="sdashboard.css">
    <style>
        th{
            background-color: saddlebrown;
            color: antiquewhite;
            
        }
        td{
            background-color:darkgoldenrod;
        color: antiquewhite;
        }
        
        a{
            text-decoration: none;
            color: antiquewhite;
        }
        abbr{
            text-decoration: none;
		}
		body{
			background: -webkit-linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
            background: linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
		}
		#container{
			width: 100%;
		}
		#profile {
    height: 100px;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    clear: left;
}
    </style>
</head>

<body>
<div id="container">
	<div id="header">
		<div id="profile">
			
			<div id="logo"></div>
				<article id="info" style="color:white;text-align:right;">	<?php if(isset($_SESSION['username'])): ?>
            	 <strong><?php echo $_SESSION['username']; ?></strong>
            	 
            	<?php endif ?>
                    <i>(STUDENT)</i>
            </article>
			
					
			
			
		</div>
		<div id="nav">
		<nav><ul>
			<div class="content search">
            	<li><form action="" method="post" enctype="multipart/form-data">
            		<input type="text" name="keyword" placeholder="keywords" />
            							
					<input type="submit" name="search-video" value="Search Video" />
					</form></li>
					
            </div>
			</ul>
			<ul>
			<li><a href="#setting">setting</a></li>
				<li><a  href="sdashboard.php?logout='1'">logout</a></li>
			</ul>
		</nav>
		</div>
	</div>
	
	<div id="contents">
	<div id="searched-videos">
		<?php include('search-video.php');?>
	</div>
		<div id="recommend">
		<section>
		<article id="video-link">
			<h3 style="color:antiquewhite; text-transform:uppercase; margin:20px; border-bottom:2px dashed antiquewhite">Recommendation videos</h3>
            
            <?php 

$author=$_SESSION['username'];
             $faculty=$_SESSION['faculty'];

$con=mysqli_connect('localhost','root','','project5') or die("Cannot connect to database");

echo $faculty;
$query="select *from videos where faculty LIKE 'computer' ";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count=="0"){
	echo '<p style="color:white">no records</p>';
	
}
else {
	echo'<table border="0" width="100%" cellspacing="4" cellpadding="4"><tr><th>VIDEO NAME</th></tr>';
	while($row=mysqli_fetch_array($result)){
		$name=$row['name'];
		
		$id=$row['id'];
		echo '<tr>';
		echo '<td><abbr title="click to view video"><a href="view.php?id='.$id.'">' .$name. '</a></abbr></td>';
        echo '</tr>';
		
		
	
		
		
		
			
		
		}
    echo'</table>';
}
			
			



?>


			
			</article>
			<aside id="player" name="player">
				
			</aside>
			</section>
		</div>
			
		
		<div id="setting">
		
			
				
			
		</div>
	</div>
	<footer>
		
	</footer>
</div>
</body>
</html>