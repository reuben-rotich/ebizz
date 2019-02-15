<?php
include 'header.php';
include 'dbcon.php';
include 'navbar.php';
//session_start();
?>
<body class="metro" style="background-color:#fffccc">
	<div class="grid"> 
		<div class="mynavbar span12 offset1">
			<div class="toolbar transparent fg-white">
				<span class="divider"></span>
				<button onclick="refresh()"><i class="icon-spin on-left large"></i>Refresh</button>
				<span class="divider"></span>
				<button onclick="logs()"><i class="icon-console large"></i>&nbsp System logs</button>
				<span class="divider"></span>
				<button onclick="home()"><i class="icon-home large"></i>&nbsp Home</button>
				<span class="divider"></span>
				<button onclick="police_password()"><i class="icon-key large"></i>&nbsp  Reset user passwords</button>
				<span class="divider"></span>
				<button onclick="history.back();"><i class="icon-arrow-left large"></i>&nbsp Back</button>
			</div>
		
		</div>  
		<div class="grid"><div class="row offset1">
			<div class="span12" id="myTable">
				<table class="table hovered bordered" style="overflow:auto;" >
					<tr class="info"><td>Full Names</td><td>Username</td><td>email</td><td>Member since</td><td>Place of birth</td></tr>
					 <?php
						$query=mysql_query("SELECT Name,Username,Email,Member_since,POB FROM members") or die(mysql_error());
						while($result=mysql_fetch_array($query)){
						echo "<tr><td>";
						echo $result['Name'];
						echo "</td><td>";
						echo $result['Username'];
						echo "</td><td>";
						echo $result['Email'];
						echo "</td><td>";
						echo $result['Member_since'];
						echo "</td><td>";
						echo $result['POB'];
						echo "</td></tr>";
						}
					?>
				</div></div>
				<div class="span4"><form method="post" onSubmit="">
					<legend>Enter the username here</legend>
					<label> Username </label>
						<div class="input-control text" data-role="input-control">
							<input type="text" placeholder="type username" name="username" onfocus="input_hover();">
							<button class="btn-clear" tabindex=""></button>
						</div>
					<input type="submit" value="reset" name="submit" class="success">
				</form><hr>
				</div><?php
				if(isset($_POST['submit'])){
					$username=$_POST['username'];
					$query=mysql_query("UPDATE members SET Password=null WHERE Username='$username'") or die(mysql_error());
				}?>
		</table></div>
		</div>
	</div>
		<script type="text/javascript">
				function log_out(){
					var ask = confirm("Are you sure you want to log out");
					if(ask==true){
					document.location.href="logout.php";
					}
				}
				function refresh(){
					location.reload();
				}
				function home(){
					location.href="homepage.php";
				}
				function logs(){
					location.href="all_admin_logs.php";
				}
				function police_password(){
					location.href="admin_reset_police.php";
				}
			</script>
</body>
</html>