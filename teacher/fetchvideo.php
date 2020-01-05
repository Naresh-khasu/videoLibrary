<?php 
include('delete-video.php');
$author=$_SESSION['username'];
$delete='DELETE VIDEO';
$con=mysqli_connect('localhost','root','','project5') or die("Cannot connect to database");


$query="select *from videos where author LIKE '$author' ";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count=="0"){
	echo 'no records';
	
}
else {
	
	while($row=mysqli_fetch_array($result)){
		$name=$row['name'];
		
		$id=$row['id'];
		
		echo '<abbr title="click to view video"><a href="../newwatch.php?id='.$id.'">' .$name. '</a></abbr>';
		echo '<a href="delete-video.php?id='.$id.'">' .$delete. '</a><br>';
		
	
		
		
		
			
		
		}
}
			
			



?>

