<?php 
include('delete-video.php');
$author=$_SESSION['username'];
$delete='DELETE VIDEO';
$reply='&nbsp REPLY QUERY';
$question='IS NOT NULL';
$con=mysqli_connect('localhost','root','','project5') or die("Cannot connect to database");


$query="select *from videos where NOT (question <=>NULL) AND author LIKE '$author'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count=="0"){
	
	echo'<table border="0" width="50%" cellspacing="4" cellpadding="4">';
	echo '<tr><td>No Videos Uploaded Yet</tr></td>';
    echo'</table>';
}
else {
	/*$query1="select *from videos where author LIKE '$author'";
$result1=mysqli_query($con,$query1);*/
	echo '<table border="0" width="100%" cellspacing="4" cellpadding="4">';
		 echo "<tr>";
  echo '<th class="id">VIDEO ID</th>';
   echo '<th class="name">VIDEO NAME</th>';
 echo '<th class="question"> QUESTION</th>';
	echo '<th class="action"> ACTION</th>';


//echo "<td> <a href=edit.php?id=$row[RollNo]>EDIT</a> <a href=delete.php?id=$row[RollNo]>DELETE</a> <a href=view.php?id=$row[RollNo]>VIEW</a> </td>";
echo "</tr><br>";
	while($row=mysqli_fetch_array($result)){
		
	$id=$row['id'];
		 echo "<tr>";
  echo '<td class="id">';echo $row[id]; echo'</td>';
 echo '<td class="name"><abbr title="click to view video"><a href="../newwatch.php?id='.$row[id].'">' .$row['name']. '</a></abbr></td>';
 echo '<td class="question">';echo $row[question]; 
 if(!empty($row[question])){
	 echo '<i><u>';
echo '&nbsp By &nbsp';
echo $row[username];
echo '</i></u>';
 }
 if(empty($row[question])){
	echo '<i><u>';
echo 'No new questions';
echo '</i></u>';
}
 echo '</td>';
		echo '<td class="action"><a id="delete" href="delete-video.php?id='.$id.'">' .$delete. '</a>';
        if(!empty($row['question'])){
            echo'<a id="reply" href="reply-query.php?id='.$id.'">' .$reply. '</a>';}
        echo '</td>';



echo "</tr>";

		
		}echo'</table>';

		
}


?>
<html>
    <head>
<style>
	table{
		
		color:white;
		
	}
	a{
		color: white;
		text-decoration: none;
		
	}
	table th{
		color: black;
	}
	.id{
		background: #A86F70;
	}
	.name{
		background: #709853;
	}
	.question{
		background: #84A5C3;
	}
	.action{
		background: #D6D95E;
	}
    
    #delete{
        border: 1px solid #709853;
        color: black;
        background: antiquewhite;

    }  
    #reply{
        border: 1px solid #709853;
        color: black;
        background: antiquewhite;

    }  
</style>
    </head>
</html>