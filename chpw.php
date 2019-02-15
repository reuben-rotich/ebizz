<?php
	include 'dbcon.php';
	include 'header.php';
	?>
<!-- This script changes the password of a given user -->
<body class="metro">
	<?php
		$username=$_POST['username'];
		$password=$_POST['password'];
		$newpassword=$_POST['newpassword'];
		
		$query=mysql_query("SELECT * FROM members WHERE Username='$username'") or die(mysql_error());
		$result=mysql_fetch_array($query);
		$count=mysql_num_rows($query);
		$user=$result['Name'];
		if ($count==1){
			mysql_query("UPDATE members SET Password='$newpassword' WHERE Username='$username'") or die(mysql_error());
			mysql_query("INSERT INTO logs(ID,Activity,User,Time) VALUES(null,'Password change','$user',null)") or die(mysql_error());
			?>
			<script>
				var inform = alert("You have successfully changed your password. You can now log in with your new password");
					location.href="login.php";
			</script>
	<?php }
	else { ?> <div class="grid"><div class="notice fg-white bg-red"> <?php echo 'you have entered invalid username or email'; echo $count;?></div> </div>
	<?php } ?>
</body>
</html>
