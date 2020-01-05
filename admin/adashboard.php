<?php 
$con=mysqli_connect('localhost','root','','project5');
include('admin-login.php');

?>
<?php $username=$_SESSION['username']; ?>



<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <style>
        body{
            background-color: -webkit-linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
            background-color: linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
        }
        table {
            color: white;
        }
        
        table th {
            color: black;
        }
        
        .id {
            background: #A86F70;
        }
        
        .fname {
            background: #709853;
        }
        
        .lname {
            background: #709853;
        }
        
        .faculty {
            background: #84A5C3;
        }
        
        .batch {
            background: #D6D95E;
        }
        
        input[type=text],
        select,
        input[type=password],
        input[type=submit] {
            border: 0;
            border-radius: 4px;
            padding: 10px 10px 10px 50px;
            display: block;
            margin: 10px auto;
        }
        
        input[type=submit] {
            color: azure;
            background-color: darkolivegreen;
            padding: 10px 10px 10px 10px;
            border: 0px;
            border-radius: 4px;
            margin-top: 20px;
            margin-bottom: 10px;
            letter-spacing: 0.2em;
            box-shadow: 1px 7px 12px rgb(0, 0, 0);
            align-items: center;
        }
        
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;
            /*display: block;*/
        }
        #container{
            width: 100%;
        }
    </style>

    <title>Admin home page</title>
    <link type="text/css" rel="stylesheet" href="adashboard.css">
    <style>
        .msg {
            color: white;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="profile">

                <div id="logo"></div>
                <article id="info" style="color:white;text-align:right;">
                    <?php if(isset($_SESSION['username'])): ?>
                    <strong><?php echo $_SESSION['username']; ?></strong>

                    <?php endif ?>
                    <i>(ADMIN)<ip>
            </article>
		
			
		</div><div id="nav">
		<nav>
			<ul id="menu">
			   <li><a href="#my-uploads student">add student</a></li>
				<li><a href="#new teacher">add teacher</a></li>
				
				<li><a href="#query admin">add new admin</a></li>
				
			</ul>
			<ul>
			<li><a href="#setting">setting</a></li>
				<li><a  href="adashboard.php?logout='1'">logout</a></li>
			</ul>
		</nav>
		</div>
		<div class="banner"></div>
	</div>
	
	<div id="contents">
	
		<div id="my-uploads student">
        <fieldset><legend style="color: antiquewhite">LIST OF STUDENTS</legend>
       <?php
        $query="select *from student_accounts";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count==0){
	echo 'no records';
	
		
}
else {
	echo '<table  width="100%" cellspacing="4" cellpadding="4">';
     echo '<tr>';
    echo '<th class="id">REGISTRATION NO.</th>';
    echo '<th class="fname">FIRST NAME</th>';
    echo '<th class="lname"> LAST NAME</th>';
    echo '<th class="faculty"> FACULTY</th>';
    echo '<th class="batch"> BATCH</th>';
    echo '</tr>';
    echo '<br>';
	while($row=mysqli_fetch_array($result)){
		
		 echo "<tr>";
    echo '<td class="id">';echo $row[registration]; echo'</td>';
    echo '<td class="fname">';echo $row[fname]; echo '</td>';
    echo '<td class="lname">';echo $row[lname]; echo '</td>';
    echo '<td class="faculty">';echo $row[faculty]; echo '</td>';
    echo '<td class="batch">';echo $row[batch]; echo '</td>';
 
        echo "</tr>";
       

		
		}echo'</table>';

		
}


?>    
                
            </fieldset>
		<form method="post" action="adashboard.php" enctype="multipart/form-data">
            <fieldset><legend style="color: antiquewhite">ADD NEW STUDENT</legend>
                <input type="text" name="registration" placeholder="student's reg_no." required/>
                <input type="text" name="fname" placeholder="student's first name" required/>
                <input type="text" name="lname" placeholder="student's last name " required/>
                <select name="faculty" required>
                    <option value="0">--FACULTY--</option> 
                    <option value="architecture">architecture</option>
                    <option value="civil">civil</option>
                    <option value="computer">computer</option>
           
				</select>
                <select name="batch" required >
                    <option value="0" >--BATCH--</option>
                    <option value="2010"> 2010</option>
                    <option value="2011"> 2011</option>
                    <option value="2012"> 2012</option>
                    <option value="2013"> 2013</option>
                    <option value="2014"> 2014</option>
                    <option value="2015"> 2015</option>
                    <option value="2016"> 2016</option>
                    <option value="2017"> 2017</option>
			    </select>
                <input type="submit" name="studentadd" value="ADD STUDENT">
                
            </fieldset>
           
            </form> <div class="msg">
            <?php 
            
            if(isset($_POST['studentadd'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $reg=$_POST['registration'];
                $faculty=$_POST['faculty'];
                $batch=$_POST['batch'];
                
                $sql="insert into student_accounts(fname,lname,registration,batch,faculty) values ('$fname','$lname','$reg','$batch','$faculty') ";
                $result=mysqli_query($con,$sql);
                if($result){
                    echo('New student record added successfully');
                    header('location:adashboard.php');
                }
                else{
                    echo('Failed to add student records');
                }
                
                    
            }
            
            
            ?>
            
            </div>
		</div>
			
		<div id="new teacher">
        <fieldset><legend style="color: antiquewhite">LIST OF TEACHERS</legend>
       <?php
        $query="select *from teacher_accounts";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count==0){
	echo 'no records';
	
		
}
else {
	echo '<table  width="100%" cellspacing="4" cellpadding="4">';
     echo '<tr>';
    echo '<th class="id">TEACHER ID</th>';
    echo '<th class="fname">FIRST NAME</th>';
    echo '<th class="lname"> LAST NAME</th>';
    echo '</tr>';
    echo '<br>';
	while($row=mysqli_fetch_array($result)){
		
		 echo "<tr>";
    echo '<td class="id">';echo $row[teacherId]; echo'</td>';
    echo '<td class="fname">';echo $row[fname]; echo '</td>';
    echo '<td class="lname">';echo $row[lname]; echo '</td>';
            echo "</tr>";
       

		
		}echo'</table>';

		
}


?>    
                
            </fieldset>
		
		<form action="adashboard.php" method="post" enctype="multipart/form-data">
            <fieldset>
              <legend style="color: antiquewhite">ADD TEACHER</legend>
               <input type="text" name="fname" placeholder="Teacher's first name" required/>
                <input type="text" name="lname" placeholder="Teacher's last name" required/>
                <input type="text" name="teacherid" placeholder="Teacher ID" required/>
            <input type="submit" name="teacheradd" value="ADD TEACHER">
			</fieldset>
            
        </form><div class="msg">
               <?php 
            
            if(isset($_POST['teacheradd'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $id=$_POST['teacherid'];
                
                $sql="insert into teacher_accounts(fname,lname,teacherId) values ('$fname','$lname','$id') ";
                $result=mysqli_query($con,$sql);
                if($result){
                    echo('New teacher record added successfully');
                }
                else{
                    echo('Failed to add teacher records');
                }
                
                    
            }
            
            
            ?>
            </div>
       
        
        </div>
        <div id="query admin">
        		
		<form action="adashboard.php" method="post" enctype="multipart/form-data">
            <fieldset>
              <legend style="color: antiquewhite">ADD NEW ADMIN</legend>
               <input type="text" name="username" placeholder="new admin username" required/>
                <input type="password" name="password" placeholder="password" required/>
            <input type="submit" name="adminadd" value="ADD ADMIN">
			</fieldset>
            
        </form><div class="msg">
               <?php 
            
            if(isset($_POST['adminadd'])){
                $username=$_POST['username'];
                $password=md5($_POST['password']);
               
                
                $sql="insert into admin(username,password) values ('$username','$password') ";
                $result=mysqli_query($con,$sql);
                if($result){
                    echo('New admin added successfully');
                }
                else{
                    echo('Failed to add admin');
                }
                
                    
            }
            
            
            ?>
            
            </div>
        </div>
        	
        </div>
		<!--<div id="setting">
			<h4 style="color:white">Change password</h4>
          
            <form method="post" action="adashboard.php">
            <input type="password" name="current" placeholder="current password"><br>
            <input type="password" name="password1" placeholder="new password"><br>
            <input type="password" name="password2" placeholder="confirm new password"><br>
                <input type="submit" name="change" value="change">
            </form>
            <div class="msg">
            <?php 
             if(isset($POST['change'])){
                 $new1=$_POST['password1'];
                 $new2=$_POST['password2'];
                 $cp=md5($_POST['current']);
                 
                 if($new1==$new2){
                     $password=md5($new1);
                     $sql="select *from admin where username LIKE $username";
                     $result=mysqli_query($con,$sql);
                     while($row=mysqli_fetch_array($result)){
                         $row['password'];
                      }
                            if($cp==$row['password']){
                             $sql="update admin set password='$password' where username LIKE $username";
                                $result=mysqli_query($con,$sql);
                                if($result){
                                    echo('Password changed successfully');
                                    }
                                else{
                                    echo('Failed to change');
                                    }

                     }
                 }
             }
            
            ?>
        </div>
			
				
			
		</div>
	</div>


</body>
</html>