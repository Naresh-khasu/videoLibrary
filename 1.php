<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <style>
        h2{
            text-transform: uppercase;
            color: antiquewhite;
        }
        #question {
            border: 2px solid blue;
            background-color: rgb(200, 207, 238);
            color: rgb(26, 23, 20);
            border-radius: 4px;
            width: 20%;
            margin-left: 700px;
        }
        
        #reply {
            border: 2px solid green;
            background: rgb(127, 194, 118);
            color: antiquewhite;
            border-radius: 4px;
            width: 20%;
            margin-left: 950px;
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

<?php $con=mysqli_connect('localhost','root','','project5');
	$id='';
	$name='';

	if(isset($_GET['id'])){
		
		$id=$_GET['id'];
		
		
		$sql="select name from videos where id=$id";
		$result=mysqli_query($con,$sql);
		
		while($row=mysqli_fetch_assoc($result)){
			$name=$row['name'];
			echo'<h2>'.($name).'</h2>';
				echo "<video width='600'  height='500' controls >
		<source src='videos/".$name."' >
		</video>";
		}
        
        
        $sql="select *from query where vid=$id";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($reult);
        if($count=='0'){
            echo '<div> No Queries to show</div>';
        }
        else{
            while($row=mysqli_fetch_array($result)){
                echo '<div id="question">';
                echo $row['question'];
                echo '<br><i><u>';
                echo 'By &nbsp';
                echo $row['username'];
                echo '</i></u>';
                echo '</div>';
                
                  echo '<div id="reply">';
                echo $row['reply'];
                echo '<i><u>';
                
                echo '</i></u>';
                echo '</div>';
                
            }
            include('student/send-query.php');
        }
		
	
	}
	else{
		echo('novideos');
				/*echo "<video width='200'  height='300' controls >
		<source src='teacher/videos/computer/1/".$name."' >
		</video>";*/
		
	}
	
	
	?>
</body>
</html>