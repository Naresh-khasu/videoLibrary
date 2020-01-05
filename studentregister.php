<?php include('student/validateStudent.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
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
  <form class="modal-content animate" action="studentregister.php" method="post">
  
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <!--<img src="1.png" alt="Avatar" class="avatar">-->
      <h1 style="text-align:center">STUDENT REGISTER</h1>
     
    </div>

    <div class="container">

      <input type="text" placeholder="your reg_number" name="registration"  required/> 
      <input type="text" placeholder="Create Username" name="username" required />
      <input type="password" placeholder="Create Password" name="password1"  required/>        
      <input type="password" placeholder="Confirm Password" name="password2"  required/>  
       
        
      

    </div>
    <button type="submit" name="registerStudent">REGISTER</button>
    
  </form>
  
</div>
        <script type="text/javascript">
<?php include('student/errors.php') ?>
			
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