	<?php
	session_start();
	$username="";
	$fname="";
	$lname="";
	$errors=array();
	$con=mysqli_connect('localhost','root','','project5');



//TEACHER LOGIN AND REGISTRATION
	//registration
if(isset($_POST['registerTeacher'])){
	
	$username=$_POST['username'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$teacherID=$_POST['teacherID'];
	
	
		/*if(empty($tfname)){
			array_push($errors,"First Name");
		}
	
		if(empty($tlname)){array_push($errors,"Last Name");}
		if(empty($tusername)){array_push($errors,"Username");}
	if(empty($tpassword1)){array_push($errors,"Password");}
		if(empty($teacherID)){array_push($errors,"Teacher ID");}*/
	if($password1!=$password2){
		array_push($errors,"The two password did not matched");
	}
    $sql="select *from teacher_accounts where teacherId='$teacherID'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
        $tid=$row['teacherId'];
       
        
    }
    
    if($tid=$teacherID){
        if(count($errors)=='0'){
            $password=md5($password1);
            $sql="update teacher_accounts set username='$username' where teacherId='$tid'";
            $result=mysqli_query($con,$sql); 
            $sql="update teacher_accounts set password='$password' where teacherId='$tid'";
            $result=mysqli_query($con,$sql);
            $_SESSION['username']=$username;
			$_SESSION['success']="Now you are registered, login from here";
			header('location:login.php');
        }
    }
    else
    {
        array_push($errors,"Cannot be registered, Contact to the admin");
    }
	
	
		/*if(count($errors)==0){
			$password=md5($password1);
			$sql="INSERT INTO teacher_accounts(fname,lname,teacherId,username,password) VALUES('$fname','$lname',$teacherID,'$username','$password')";

			mysqli_query($con,$sql);

			$_SESSION['username']=$username;
			$_SESSION['success']="Now you are registered, login from here";
			header('location:teacherLogin.php');//redirect to teacherlogin page
		}*/
}

			//log in

					if(isset($_POST['teacherLogin'])){
			$username=$_POST['username'];
			$password=$_POST['password'];

			//check if empty
			if(empty($username)){
			array_push($errors,"Username is required");
		}


		if(empty($password)){
			array_push($errors,"Password is required");
		}

			if(count($errors)==0){
			$password=md5($password);
					
			$query="SELECT *FROM teacher_accounts WHERE username='$username' AND password='$password'";

			$result=mysqli_query($con,$query);
				if(mysqli_num_rows($result)==1){
					$_SESSION['username']=$username;
					$_SESSION['success']="you are logged in";
					header('location:teacher/dashboard.php');//redirect to home page
				}else{
					array_push($errors,"wrong username/ password combination");
					header('location:login.php');
				}

		}


			   }
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:../login.php');
}
		
	?>