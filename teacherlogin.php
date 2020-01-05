<?php include('teacher/validateTeacher.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>teacher login</title>
</head>
<div id="modal-wrapper2" class="modal">
   <div class="sucess">            	<?php if (isset($_SESSION['success'])): ?>
            	<div class="success">
            		<?php
						echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
            	</div><?php endif ?></div>
  <form class="modal-content animate" action="teacherlogin.php" method="post">
       <?php include('teacher/errors.php') ?>
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">TEACHER LOGIN</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="username" required />
      <input type="password" placeholder="Enter Password" name="password" id="password1" required/>        
      
<div><input type="checkbox" onchange="showhide1(this)"  style="margin:26px 30px;"/><span id="showhide1">Show Password</span></div>
    </div>
    <button type="submit" name="teacherLogin">LOGIN</button>
    
  </form>
  
</div>
        <script type="text/javascript">
	function showhide1(x)
		{
			var check=x.checked;
			if(check){
				document.getElementById("password1").type="text";
				document.getElementById("showhide1").textContent="Hide Password";
			}
			else{
				document.getElementById("password1").type="password";
				document.getElementById("showhide1").textContent="Show Password";
			}
		}
			
			// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper2');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	</script>

<body>
</body>
</html>