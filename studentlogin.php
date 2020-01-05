<?php include('student/validateStudent.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div id="modal-wrapper" class="modal">
        <div class="sucess">            	<?php if (isset($_SESSION['success'])): ?>
            	<div class="success">
            		<?php
						echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
            	</div><?php endif ?></div>
  <form class="modal-content animate" action="studentlogin.php" method="post">
  
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">STUDENT LOGIN</h1>
     
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="username" required />
      <input type="password" placeholder="Enter Password" name="password" id="password" required/>        
      
<div><input type="checkbox" onchange="showhide(this)"  style="margin:26px 30px;"/><span id="showhide">Show Password</span></div>
    </div>
    <button type="submit" name="login">Login</button>
    
  </form>
  
</div>
        <script type="text/javascript">
	function showhide(x)
		{
			var check=x.checked;
			if(check){
				document.getElementById("password").type="text";
				document.getElementById("showhide").textContent="Hide Password";
			}
			else{
				document.getElementById("password").type="password";
				document.getElementById("showhide").textContent="Show Password";
			}
		}
			
			// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	</script>
</body>
</html>