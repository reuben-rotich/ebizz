<?php
include 'header.php';
include 'dbcon.php';
?>
<html>
<head>

</head>
<body class="metro">
	<div class="grid">
		<div class="row">
			
				<?php
					if (isset($_POST['submit'])){
						$username=$_POST['username'];
						$password=$_POST['password'];
						$query1=mysql_query("INSERT INTO logs(ID,Activity,User,Time) VALUES(null,'login','Admin',null)") or die(mysql_error());
						$query=mysql_query("SELECT * FROM admin WHERE Username='$username' AND PASSWORD='$password'") or die(mysql_error());
						$results=mysql_fetch_array($query);
						$count=mysql_num_rows($query);
						if($count==1){
							session_start();
							$_SESSION['id']=$username;
							header('location:admin_panel.php');		
						}
						if ($count != 1){ 
							//echo "<div class='notice span2 marker-on-top fg-white bg-red'>";
							//echo "You have entered incorrect username or password";
							//echo "</div>";
							echo "<script>alert('You have entered incorrect username or password');</script>";
						}
					}
				?>
		</div>
		
	</div>
</body>
</html>