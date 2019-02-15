
<?php
include 'dbcon.php';
include 'header.php' ;
?>
<html>
	<head><title>Log in </title></head>
	<body class="metro" bgcolor="#2E2B21">
		<div class="grid">
			<div class="row"><br><br></div>
			<div class="row"> <form method="post" class="span8 offset4" style="padding:20px; background-color:white; border-radius:10px;">
				<fieldset>
					<legend> You must Login to continue</legend>
					<label> Username </label>
					<div class="input-control text" data-role="input-control">
						<input type="text" placeholder="type" name="username" onfocus="input_hover()">
						<button class="btn-clear" tabindex=""></button>
					</div>
					
					<label> Password </label>
					<div class="input-control text" data-role="input-control">
						<input type="password" placeholder="type" name="password">
						<button class="btn-clear" tabindex=""></button>
					</div>
					<input type="submit" value="Login" name="submit" id="notify_btn_1">
				</fieldset>
			</form> 				
			</div>
			<?php
				if(isset($_POST['submit'])){
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query=mysql_query("SELECT * FROM members WHERE Username='$username' AND Password='$password'") or die(mysql_error());
				$result=mysql_fetch_array($query);
				$count=mysql_num_rows($query);
				$name=$result['Username'];
				if ($count==1){
					session_start();
					$_SESSION['id']=$name;
					header('location:my-start-screen.php');
					//exit();
					}
				else
				{ ?>
					<div class="notice span4 offset4 bg-red fg-white marker-on-top"> You have entered wrong username or password </div>
					<?php } header('refresh:5');}
				?>
			<script type="text/javascript">
				$(document).ready(function(){
					$("input").focus(function(){
						$(this).css("background-color", "#cccccc");
					});
					$("input").blur(function(){
						$(this).css("background-color", "#ffffff");
					});
				});
			</script>
		</div>
	</body>
</html>