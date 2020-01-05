<?php
$con=mysqli_connect('localhost','root','','project5');

if(isset($_POST['moveFile']))
	
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
	$dept=$_POST['department'];
	$sem=$_POST['semester'];
	$key=$_POST['keyword'];
	$author=$_SESSION['username'];
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
			
            $location = "../videos/";
           
            
            if(move_uploaded_file($tempName, $location.$fileName)){
				$sql="INSERT INTO videos(id,name,keyword,author,faculty,sem) VALUES('','$fileName','$key','$author','$dept','$sem')";

			mysqli_query($con,$sql);		
        }
			
				
    }
}
}
?>