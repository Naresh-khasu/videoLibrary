<?php include('admin/admin-login.php'); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>VIDEO LIBRARY</title>
    <style>
        body {
            background: rgb(167, 134, 134);
        }
        
        * {
            margin: 0;
            font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
            font-size: 20px;
        }
        
        .content a:active {
            color: aqua;
        }
        
        .banner {
            width: 100%;
            height: 10px;
            background: #D0A960;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        nav ul li {
            margin-left: 20px;
        }
        
        nav a {
            text-decoration: none;
            /*text-align: center;*/
            color: aliceblue;
            display: block;
            padding: 10px;
            text-transform: uppercase;
        }
        
        nav a:hover {
            background: aliceblue;
            color: #333333;
        }
        
        .current a {
            background: aliceblue;
            color: #333;
        }
        
        @media screen and (min-width: 500px) {
            nav ul {
                display: flex;
            }
            nav li {
                flex: 1 1 0;
            }
        }
        
        nav {
            display: flex;
            justify-content: space-between;
        }
        
        #head-section {
            height: 150px;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            clear: left;
            /*background-color: rgb(183, 221, 152);*/
        }
        
        #container {
            /*background-color: rgb(183, 221, 152);
            background-color: #FFFFFF;*/
            background: -webkit-linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
            background: linear-gradient(top, #6783e0 0%, #8f8f9b 20%, #d7aaee 100%);
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            border-bottom-width: 0px;
            padding-left: 0px;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            height: 1000px;
        }
        
        .admin li input[type=text],
        .admin li input[type=password] {
            margin: 5px 0px;
        }
        
        * {
            margin: 0px;
            padding: 0px;
            font-family: Helvetica, Arial, sans-serif;
        }
        /* Full-width input fields */
        
        .modal input[type=text],
        .modal input[type=password] {
            width: 90%;
            padding: 12px 20px;
            margin: 8px 26px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }
        /* Set a style for all buttons */
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 26px;
            border: none;
            cursor: pointer;
            width: 90%;
            font-size: 20px;
        }
        
        button:hover {
            opacity: 0.8;
        }
        /* Center the image and position the close button */
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        
        .avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
        /* The Modal (background) */
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        /* Modal Content Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 4% auto 15% auto;
            border: 1px solid #888;
            width: 40%;
            padding-bottom: 30px;
        }
        /* The Close Button (x) */
        
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }
        /* Add Zoom Animation */
        
        .animate {
            animation: zoom 0.6s
        }
        
        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }
        
        #student,
        #teacher {
            float: left;
            background: #eee;
            width: 35%;
            padding: 1%;
            height: 60%;
            margin: 20px 6%;
        }
        
        #logo,
        #banner {
            margin: 0;
            padding: 0;
            float: left;
            height: 100%
        }
        
        #logo {
            width: 100%;
            background-image: url(vlogo.png);
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #banner {
            width: 75%;
            background-image: url(banner2.png);
        }
        
        #admin-text {
            color: aliceblue;
            margin-top: 10px;
        }
        
        h3 {
            text-transform: uppercase;
            border-bottom: 3px dashed black;
        }
        
        #main-content {
            padding: 40px;
        }
        
        abbr {
            text-decoration: none;
        }
    </style>


</head>

<body>
    <div id="container">
        <div id="head-section">
            <div id="logo"></div>
        </div>
        <div id="navbar">
            <nav class="wrapper">
                <ul class="content">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="register.php">register</a></li>


                </ul>
                <ul class="admin">
                    <span id="admin-text">ADMIN LOGIN</span>
                    <li>
                        <form method="post" action="index.php"><input type="text" name="username" placeholder="Admin username" />
                            <input type="password" name="password" placeholder="Admin password" />
                            <input type="submit" value="login" name="admin-login" />
                        </form>
                    </li>
                </ul>
            </nav>
        </div>


        <div id="main-content">

            <h3> recently added video</h3>

            <?php 

$con=mysqli_connect('localhost','root','','project5') or die("Cannot connect to database");


$query="select *from videos order by id desc";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count=="0"){
	echo 'no records';
	
}
else {
	$number='1';
	while($row=mysqli_fetch_array($result)){
        if($number<='10'){
		$name=$row['name'];
		
		$id=$row['id'];
        $author=$row['author'];
        
		
		echo '<br><abbr title="Login to watch video"><ul><li><u>' .$name. '</u> uploaded by '.$author.'</li></ul>
        </abbr>';
        
		
		
	$number=$number+'1';
           
		
		
        }
			
		
		}
}
			
			



?>
        </div>




    </div>
</body>

</html>