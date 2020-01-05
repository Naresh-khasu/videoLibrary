<?php 
$con=mysqli_connect('localhost','root','','project5');

if(isset($_POST['search-video'])){
	
	$keyword=$_POST['keyword'];
	//echo($keyword);echo($faculty);echo($semester);
	
	$query="select *from videos where keyword LIKE '$keyword' ";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count=="0"){
	echo'<h2 style="color:antiquewhite; text-transform:uppercase; margin:20px; border-bottom:2px dashed antiquewhite; width:50%;">found records</h2>';
    echo'<table border="0" width="50%" cellspacing="4" cellpadding="4">
    <tr><th>VIDEO NAME</th></tr>';
	echo '<tr><td>No Records Found</td></tr>';
    echo'</table>';
}
else {
    echo'<h2 style="color:antiquewhite; text-transform:uppercase; margin:20px; border-bottom:2px dashed antiquewhite; width:50%;">found records</h2>';
	echo'<table border="0" width="50%" cellspacing="4" cellpadding="4"><tr><th>VIDEO NAME</th></tr>';
	while($row=mysqli_fetch_array($result)){
		$name=$row['name'];
		
		$id=$row['id'];
		echo '<tr>';
		echo '<td><abbr title="click to view video"><a href="view.php?id='.$id.'">' .$name. '</a></abbr> </td></tr>';
		}
    echo'</table>';
	}
	
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
    <style>
        th{
            background-color: saddlebrown;
            color: antiquewhite;
            
        }
        td{
            background-color:darkgoldenrod;
        color: antiquewhite;
        }
        
        a{
            text-decoration: none;
            color: antiquewhite;
        }
        abbr{
            text-decoration: none;
        }
    </style>
</head>

<body>
</body>
</html>