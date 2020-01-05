<?php 
$con=mysqli_connect('localhost','root','','project5');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include('validateTeacher.php');?>

<?php include('upload.php'); ?>
<?php include('changeDP.php'); ?>
<?php $username=$_SESSION['username']; ?>

<title>Teacher home page</title>
<link type="text/css" rel="stylesheet" href="dashboard.css">
<style>
#file {
    padding: 20 30;
    color: rgb(34, 19, 19);
    font-size: 14;
    border-radius: 5px;
    background-color: rgb(99, 59, 8);
}
body{
	background: -webkit-linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
            background: linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
}
#container{
	width: 100%;
}
</style>
</head>

<body>
<div id="container">
	<div id="header">
		<div id="profile">
			
			<div id="logo"></div>
				<article id="info"  style="color:white;text-align:center;">	<?php if(isset($_SESSION['username'])): ?>
            	 <?php echo $_SESSION['username']; ?>
            	 
            	<?php endif ?>
                    <i>(TEACHER)</i>
            </article>
			
			
		</div>
		<div id="nav">
		<nav>
			<ul id="menu">
			   <li><a href="#my-uploads">my uploads</a></li>
				<li><a href="#new">new upload</a></li>
				
				
				
			</ul>
			<ul>
			<li><a href="#setting">setting</a></li>
				<li><a  href="dashboard.php?logout='1'">logout</a></li>
			</ul>
		</nav>
		</div>
		<div class="banner"></div>
	</div>
	
	<div id="contents">
	
		<div id="my-uploads">
		
		
			<h3 style="color:antiquewhite">my uploads</h3>
			<?php include('fetch-query.php');?>
			
		</div>
			
		<div id="new">
		
		<form action="dashboard.php" method="post" enctype="multipart/form-data">
            <fieldset><input type="file" name="fileName" id="file">
              <legend style="color: antiquewhite">UPLOAD NEW VIDEO</legend>
               <select name="department">
    	<option value="0">--DEPARTMENT--</option>
    	<option value="architecture">Architecture</option>
    	<option value="civil">Civil</option>
    	<option value="computer">Computer</option>
    </select>
    <select name="semester">
    	<option value="0">--SEMESTER--</option>
    	<option value="1">First</option>
    	<option value="2">Second</option>
    	<option value="3">Third</option>
    	<option value="4">Fourth</option>
    	<option value="5">Fifth</option>
        <option value="6">Sixth</option>
        <option value="7">Seventh</option>
        <option value="8">Eighth</option>
    </select>
           <input type="text" name="keyword" placeholder="keyword: e.g, subject name or topic name" />
            <input type="submit" name="moveFile" value="Upload">
			</fieldset>
        </form></div>
     
		<!--<div id="setting">
			<h4>Change display picture</h4>
			<form enctype="multipart/form-data" action="dashboard.php" method="post">
				<input type="file" name="file">
				<input type="submit" name="changeDP" value="change">
			</form>
			
				
			
		</div> -->
	</div>

</div>
</body>
</html>