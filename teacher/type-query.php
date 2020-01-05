<?php  

$con=mysqli_connect('localhost','root','','project5');


if(isset($_POST['send'])){
	$id=$_GET['id'];
	$question=$_POST['text'];
	$query="update videos set reply='$question' where id='$id'";
	if(isset($id)&&isset($question)){
		$sucess=mysqli_query($con,$query);
			//echo('send');
	
        
         $query="select *from videos where id LIKE '$id'";
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $vid=$row['id'];
             $question=$row['question'];
             $reply=$row['reply'];
             $username=$row['username'];
            
        }
        
        $query="insert into query (id,vid,question,reply,username) values ('','$vid',
        '$question','$reply','$username')";
        $result=mysqli_query($con,$query);
        
        $query="update videos set question='' where id='$id'";
          $result=mysqli_query($con,$query);
        $query="update videos set reply='' where id='$id'";
        $result=mysqli_query($con,$query);
        $query="update videos set username='' where id='$id'";
        $result=mysqli_query($con,$query);
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
	
	<textarea name="text"></textarea>
	<input type="submit" name="send" value="send">
</form>
<?php 
	if($sucess){
	echo'<h2 style="color:antiquewhite">Reply is send successfully!!</h2>';}
?>
</body>
</html>