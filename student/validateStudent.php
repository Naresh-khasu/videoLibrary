	<?php
	session_start();
	$username="";
	$fname="";
	$lname="";
	$errors=array();

	$con=mysqli_connect('localhost','root','','project5');
//STUDENT LOGIN AND REGISTRATION
		//registration
	if(isset($_POST['registerStudent'])){
		
		$username=$_POST['username'];
		$password1=$_POST['password1'];	
		$password2=$_POST['password2'];	
		$reg=$_POST['registration'];
		
//check if empty

		/*if(empty($fname)){
			array_push($errors,"First Name");
		}
		if(empty($lname)){
			array_push($errors,"Last Name");
		}
		*/
		
/*
			if(empty($username)){
			array_push($errors,"Username");
		}

		
		if(empty($password1)){
			array_push($errors,"Password");
		}

			if(empty($reg_no)){
			array_push($errors,"Registration");

		}*/

		
        if($password1!=$password2){
		array_push($errors,"The two password did not matched");
	}
    $sql="select *from student_accounts where registration='$reg'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
        $regf=$row['registration'];
        
        
    }
    
    if($regf=$reg){
        if(count($errors)=='0'){
            $password=md5($password1);
            $sql="update student_accounts set username='$username' where registration='$reg'";
            $result=mysqli_query($con,$sql); 
            $sql="update student_accounts set password='$password' where registration='$reg'";
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
			$sql="INSERT INTO student_accounts(fname,lname,username,password,batch,faculty,registration) VALUES('$fname','$lname','$username','$password','$batch','$faculty','$reg_no')";

			mysqli_query($con,$sql);

			$_SESSION['username']=$username;
			$_SESSION['success']="Now you are registered, login from here";
			header('location:studentLogin.php');//redirect to login page
		}*/
	}

		//log in student
		if(isset($_POST['login'])){
			
			
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
			$query="SELECT *FROM student_accounts WHERE username='$username' AND password='$password'";

			$result=mysqli_query($con,$query);
				if(mysqli_num_rows($result)==1){
					session_start();
					$_SESSION['username']=$username;
                     $_SESSION['faculty']=$faculty;
					$_SESSION['success']="you are logged in";
					header('location:student/sdashboard.php');//redirect to home page
				}else{
					array_push($errors,"wrong username/ password combination");
				}

		}


			   }


//log out student

if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:../login.php');
}



		
	?>