<?php  if(count($errors)>0): ?>
<div class="error">
	<p class="msg"><?php echo ''; ?></p>
	<?php foreach($errors as $error): ?>
	<p class="msg">

		<?php echo $error; ?>
	</p>
	
	<?php endforeach ?>
</div>
<?php endif ?>
<style>
	.error{
		width: 80%;
		margin: 0px auto;
		  padding: 10px 10px 10px 50px;
		border: 1px solid #110F0F;
		border-radius: 5px;
		text-align: center;
		background-color: bisque;
	
	}
	.msg{
			color: #710507;
	}
</style>