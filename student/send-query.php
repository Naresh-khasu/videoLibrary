<?php  
session_start();
$con=mysqli_connect('localhost','root','',project5);

$username=$_SESSION['username'];
if(isset($_POST['send'])){
	$id=$_GET['id'];
	$question=$_POST['text'];
	$query1="update videos set question='$question' where id='$id'";
	$query2="update videos set username='$username' where id='$id'";
	if(!empty($question)){
		$sucess1=mysqli_query($con,$query1);
		$sucess2=mysqli_query($con,$query2);
			
		
	}
	
}
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form method="post">
	
	<textarea name="text"></textarea><br><br>
	<input type="submit" name="send" value="send">
</form>
<?php 
	if($sucess){
	echo'<h2 style="color:antiquewhite">Your question is send successfully!!</h2>';}
?>
</body>
</html>