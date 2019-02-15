<!DOCTYPE html>
<html>
<?php
	include 'header.php';
?>
<body class="metro" bgcolor="#2E2B21">
	<div class="row" > <br> <br></div>
	<div class="row" >
		<form method="post" action="chpw.php" onSubmit="sure()" class="span8 offset4" style="padding:20px; background-color:white; border-radius:10px;">
			<fieldset>
				<legend> Change your password</legend>
				<label> Username </label>
				<div class="input-control text" data-role="input-control">
					<input type="text" placeholder="type text" name="username">
					<button class="btn-clear" tabindex=""></button>
				</div>
				
				<label> Old Password </label>
				<div class="input-control text" data-role="input-control">
					<input type="password" placeholder="type" name="password">
					<button class="btn-clear" tabindex=""></button>
				</div>
				<label> New Password </label>
				<div class="input-control text" data-role="input-control">
					<input type="password" placeholder="type" name="newpassword">
					<button class="btn-clear" tabindex=""></button>
				</div>
				<label> Confirm Password </label>
				<div class="input-control text" data-role="input-control">
					<input type="password" placeholder="type" name="password">
					<button class="btn-clear" tabindex=""></button>
				</div>
				<input type="submit" value="Change" name="submit">
			</fieldset>
			<script type="text/javascript">
			function sure(){
				var answer=confirm("Are you sure you want to change your password?");
				if (answer==true) {
				location.href="chpw.php";}
				}
		</script>
		</form>
		
	</div>
</body>
</html>