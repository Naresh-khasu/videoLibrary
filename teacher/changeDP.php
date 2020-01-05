<?php
$con=mysqli_connect('localhost','root','','project5');
//session_start();
$username=$_SESSION['username'];

if(isset($_POST['changeDP'])){

	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	$location='dp/';
	//$dp="localhost/project5/recently/teacher/$location.$name";
	if(isset($name)){
		if(!empty($name)){
			move_uploaded_file($tmp,$location.$name);
			$query="update teacher_accounts set dp='$name' where username='$username'";
			
			$result=mysqli_query($con,$query);
			
		}
	
	}

}
?>


