<?php
include 'header.php' ;
include 'dbcon.php';
//include 'js/load-metro.js';
session_start();
?>
<head>
    <title>Portal</title>
</head>
<body class="metro">
    <div class="tile-area tile-area-dark" id="toppage">
        <h1 class="tile-area-title fg-white">Admin panel</h1>
        <div class="user-id">
            <div class="user-id-image">
                <span class="icon-user no-display1"></span>
                <img src="images/passport2.jpg" class="no-display">
            </div>
            <div class="user-id-name">
                <span class="first-name"><?php echo $_SESSION['id']; ?></span>
                <span class="last-name">Admin</span>
            </div>
        </div>

		<div id="stats" class="tile-group-eight ">
            <!--<div class="tile-group-title">Emergency Alerts </div> -->
            <a class="tile bg-darkGreen double double-vertical" data-click="transform" href="admin_reset_password.php">
                <div class="tile-content icon">
                    <span class="icon-key"></span>
                </div>
                <div class="brand">
                    <div class="label">Reset user passwords</div>
                </div>
            </a>
            <a class="tile bg-darkOrange double double-vertical" data-click="transform" href="admin_all_logs.php">
                <div class="tile-content icon">
                    <img src="images/activity1.jpg">
                </div>
                <div class="brand">
                    <div class="label">Logs</div>
                </div>
            </a>
			<a class="tile accordion bg-indigo double double-vertical" data-click="transform" data-role="accordion" onclick="showStats()">
                <div class="tile-content icon">
                    <img src="images/activity2.gif">
                </div>
            </a>
			<script>
				function showStats(){
				var div = document.getElementById("stats");
				div.innerHTML+="<a class='tile double bg-red'><div class='tile-content'><div class='tile-content icon'><span class='icon-stats-2'></span></div><div class='brand'><div class='label'>Suspects</div></div></div></a>"
				div.innerHTML+="<a class='tile double bg-darkTeal' href='#members'><div class='tile-content'><div class='tile-content icon'><span class='icon-stats-up'></span></div><div class='brand'><div class='label'>Members</div></div></div></a>";
				div.innerHTML+="<a class='tile double bg-magenta' href='#participation'><div class='tile-content'><div class='tile-content icon'><span class='icon-stats'></span></div><div class='brand'><div class='label'>User participation</div></div></div></a>";
				div.innerHTML+="<a class='tile double bg-orange' href='#support'><div class='tile-content'><div class='tile-content icon'><span class='icon-stats-up'></span></div><div class='brand'><div class='label'>User Support</div></div></div></a>";
				div.innerHTML+="<a class='tile double bg-lightBlue' href='#hoods'><div class='tile-content'><div class='tile-content icon'><span class='icon-stats-3'></span></div><div class='brand'><div class='label'>Hoods</div></div></div></a>";
				div.innerHTML+="<a class='tile double bg-amber' href='social_links.php'><div class='tile-content icon'><span class='icon-share-2'></span><div class='brand'><div class='label'>Social links</div></div></div></a>";
				}
			</script>
			<a class="tile bg-amber double " data-click="transform" href="admin_reset_user.php">
                <div class="tile-content icon ">
                    <span class="icon-unlocked"></span>
                </div>
                <div class="brand">
                    <div class="label">Reset user passwords</div>
                </div>
            </a>
			<a class="tile bg-lightBlue double " data-click="transform" href="admin_message.php">
                <div class="tile-content icon">
                    <span class="icon-mail"></span>
                </div>
                <div class="brand">
                    <div class="label">messages</div>
                </div>
            </a>
        </div> <!-- End group -->
		<div class="tile-group-two">
			<a class="tile bg-darkRed" data-click="transform" onclick="confirmLogout()">
                <div class="tile-content icon">
                   <span class="icon-switch"></span>
                </div>
                <div class="brand">
                    <div class="label">log out</div>
                </div>
				<script>
					function confirmLogout(){
						var ask = confirm("Are you sure you want to log out?");
						if (ask==true){
							location.href="logout.php";
						}
						if (ask==false){
							window.location.reload();
						}
					}
				</script>
            </a>
			<a class="tile bg-darkCyan" data-click="transform" onclick="history.back();">
                <div class="tile-content icon">
                   <span class="icon-undo"></span>
                </div>
                <div class="brand">
                    <div class="label">Back</div>
                </div>
            </a><br><br>
		</div>
	</div>
	<div class="tile-area bg-white" id="members">
		<section class="span12" >
			<span class="sectionTitle"><h1 class="fg-dark">Members</h1></span>
			<div class="grid">
				<div class="row">
				<hr class="bg-darkCrimson">
				</div>
				<div class="row">
					<div class="balloon top bd-olive" style="padding:10px">
						<span class="header fg-dark">All members:</span>
					</div>
					<a href="sample1.php"><span class="subheader fg-olive">View chart <u>here</u></span></a>
				</div>
				<div class="row">
					<div class="span12" style="height:300px; overflow-y:scroll">
						<table class="table  hovered">
							<thead class="fg-white bg-darkGreen"><tr><td> Name </td><td>National ID</td><td>Marital status</td><td>Spouse</td><td>Place of birth</td><td>Date of birth</td><td>Email</td><td>Member since</td> </tr></thead>
							<tbody class="">
							<?php
								$query=mysql_query("SELECT * FROM members") or die(mysql_error());
								while($result=mysql_fetch_array($query)){
									echo "<tr><td>";
									echo $result['Name'];
									echo "</td><td>";
									echo $result['National_ID'];
									echo "</td><td>";
									echo $result['Marital_status'];
									echo "</td><td>";
									echo $result['Spouse'];
									echo "</td><td>";
									echo $result['POB'];
									echo "</td><td>";
									echo $result['DOB'];
									echo "</td><td>";
									echo $result['Email'];
									echo "</td><td>";
									echo $result['Member_since'];
									echo "</td></tr>"; 
								} 
							?>
						</tbody>
						</table>
					</div>
				</div><hr class="bg-green">
			
		</section>
	</div>
	<div class="tile-area bg-amber">
		<section class="span12" id="support">
			<span class="sectionTitle"><h1 class="fg-white">Support messages</h1></span>
			<ul class="treeview" data-role="treeview">
			<?php
				$me=$_SESSION['id'];
				$query12=mysql_query("SELECT Sender,Message FROM messages WHERE Receipient='Admin' OR Receipient='admin'") or die(mysql_error());
				$query13=mysql_query("SELECT Sender,Message FROM messages WHERE Receipient='$me'") or die(mysql_error());
			?>
				<li class="node collapsed">
					<a href="#"><span class="node-toggle"></span>TO: Admin</a>
					<ul>
					<?php while($result5=mysql_fetch_array($query12)){
						echo "<li><a>FROM: ",$result5['Sender'],"<br>",$result5['Message'],"</a></li>";
					}
					?>
					</ul>
				</li>
				<li class="node collapsed">
					<a href="#"><span class="node-toggle"></span>TO: <?php echo $me; ?></a>
					<ul>
					<?php while($result6=mysql_fetch_array($query13)){
						echo "<li><a>FROM: ",$result5['Sender'],"<br>",$result5['Message'],"</a></li>";
					}
					?>
					</ul>
				</li>
			</ul>
			<a href="" class="chartLink icon "><h3><span class="icon-mail large place-right fg-white">&nbsp Go to inbox</span></h3></a>
		</section><br><br><br>
	</div>
	<div class="tile-area bg-pink" id="participation">
		<section class="span12">
			<span class="sectionTitle"><h1 class="fg-white">User participation</h1></span>
			<?php
				$query5=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Login' OR Activity='login'") or die("The count logs query did not execute:".mysql_error());
				$logins=mysql_result($query5,0);
				$query6=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Registration' OR Activity='registration'") or die("The count logs query did not execute:".mysql_error());
				$registration=mysql_result($query6,0);
				$query7=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Security request'") or die("The count logs query did not execute:".mysql_error());
				$security=mysql_result($query7,0);
				//$query8=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Resident_alarm' OR Activity='login'") or die("The count logs query did not execute:".mysql_error());
				//$alarms=mysql_result($query8,0);
			?>
			<div class="grid">
				<div class="row">
					<div class="span3">
						<div class="listview">
							<a href="#" class="list bg-lightBlue fg-white">
								<div class="list-content">
									<img src="images/nyumbakumi.png" class="icon">
									<div class="data">
										<span class="list-title">Active logins:</span>
										<div class="rating small no-margin fg-yellow" data-score="5" data-role="rating" data-stars="5"><ul style="margin-bottom: 0px;"><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li><li></li></ul></div>
										<span class="list-title" id="logins"><?php echo " ",$logins; ?></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="offset1 span3">
						<div class="listview">
							<a href="#" class="list bg-lightBlue fg-white">
								<div class="list-content">
									<img src="images/hand-to-hand.jpg" class="icon">
									<div class="data">
										<span class="list-title">Registrations</span>
										<div class="rating small no-margin fg-yellow" data-score="4" data-role="rating" data-stars="5"><ul style="margin-bottom: 0px;"><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li><li></li></ul></div>
										<span class="list-remark" id="registration"><?php echo " ",$registration; ?></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="offset1 span3">
						<div class="listview">
							<a href="#" class="list bg-lightBlue fg-white">
								<div class="list-content">
									<img src="images/activity2.gif" class="icon">
									<div class="data">
										<span class="list-title">Private security requests</span>
										<div class="rating small no-margin fg-yellow" data-score="4" data-role="rating" data-stars="5"><ul style="margin-bottom: 0px;"><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li><li></li></ul></div>
										<span class="list-remark" id="security"><?php echo " ",$security; ?></span>
									</div>
								</div>
							</a>
						</div><br>
					</div>
				</div>
			</div>
		</section>
	</div>
	
    <script src="js/hitua.js"></script>
	<button class="command-button" style="position:fixed;bottom:30px;right:20px;" onclick="toppage()">
		<i class="icon-arrow-up on-right"></i>
		Back 
		<small>to top of page</small>
	</button>
	<script>
		function toppage(){
			location.href="#toppage";
		}
	</script>
</body>
</html>
<?php
?>