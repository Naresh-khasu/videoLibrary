<?php
session_start();

$con=mysqli_connect('localhost','root','','project5') or die('could not connect to the database');
//log in
if(isset($_POST['admin-login'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	
		$query="SELECT *FROM admin WHERE username='$username' AND password='$password'";

			$result=mysqli_query($con,$query);
				if(mysqli_num_rows($result)=='1'){
					session_start();
					$_SESSION['username']=$username;
                   
					$_SESSION['success']="you are logged in";
					header('location:admin/adashboard.php');//redirect to home page
				}else{
					array_push($errors,"wrong username/ password combination");
				}
	}


//logout
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:../login.php');
}


?>