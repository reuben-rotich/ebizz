<?php
	include 'dbcon.php';
	include 'header.php';
	session_start();
	$me=$_SESSION['id'];
?>
	<title> Messages </title>
<body class="metro">
	<nav class="horizontal-menu bg-crimson" id="messageNavbar">
		<ul>
			<li class="fg-white"><a href="admin_panel.php">CPanel</a></li>
			<li class="fg-white"><a href="homepage.php">Home</a></li>
			<li class="disabled"><a id="admin">Support</a></li>
			<li class="fg-white"><a href="#">Contact user</a></li>
			<li class="place-right"><a href="#"> <img src="images/passport2.jpg" height="5px" width="30px"/>&nbsp<?php echo $_SESSION['id'];?> </a></li>
		</ul>
	</nav>
	<div class="grid">
		<div class="row">
			<div class="span2">
				<nav class="sidebar light">
					<ul>
						<li class="title">Inbox</li>
						<li class="active"><a href="#unread"><i class="icon-mail"></i>Unread</a></li>
						<li class="stick bg-red"><a href="#read"><i class="icon-mail-2"></i>Read</a></li>
						<li class="disabled"><a href="#">Spam</a></li>
				 
						<li class="title">Feedback</li>
						<li><a href="#outbox">All</a></li>
						
						<li class="title">Compose</li>
						<li  id="sendMsg"><a><i class="icon-pencil"></i>New</a></li>
					</ul>
				</nav>
			</div>
			<?php
					$query=mysql_query("SELECT Sender,Subject,Message FROM messages WHERE Receipient='$me' OR Receipient='Admin' AND Seen='NO'") or die(mysql_error());
					$query2=mysql_query("SELECT Sender,Subject,Message FROM messages WHERE Receipient='$me' OR Receipient='Admin' AND Seen='YES'") or die(mysql_error());
					//$result=mysql_fetch_array($query);
					//$result2=mysql_fetch_array($query2);
					$query3=mysql_query("SELECT Receipient,Subject,Message FROM messages WHERE Sender='$me'") or die(mysql_error());
					$count=mysql_query("SELECT COUNT(ID) AS Count FROM messages WHERE Receipient='$me' OR Receipient='Admin' AND Seen='NO'") or die(mysql_error());
					$count2=mysql_query("SELECT COUNT(ID) AS Count FROM messages WHERE Receipient='$me' OR Receipient='Admin' AND Seen='YES'") or die(mysql_error());
					$count3=mysql_query("SELECT COUNT(ID) AS Count FROM messages WHERE Sender='$me'") or die(mysql_error());
					$unread=mysql_result($count,0);
					$read=mysql_result($count2,0);
					$outbox=mysql_result($count3,0);
					$all=$count + $count2 + $count3;
				?>
			<div class="span12">
			<div class="row">
			<div class="span5">
				<div class="listview">
					<a href="#" class="list shadow">
						<div class="list-content">
							<img src="images/passport2.jpg" class="icon">
							<div class="data">
								<span class="list-title"><h3>Welcome back <br><?php echo $_SESSION['id'];?></h3></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="span5">
				<div class="listview">
					<a href="#" class="list shadow  selected">
						<div class="list-content">
							<img src="images/outlook.png" class="icon">
							<div class="data">
								<span class="list-title"><h3><?php echo "All messages:\n ",$all;?></h3></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			</div>
			<div class="row">
				<section id="unread">
					<div class="panel" style="border-radius:10px; height:250px;">
						<div class="panel-header bg-orange fg-white">
							<?php echo "You have ", $unread," unread messages"; ?>
						</div>
						<div class="panel-content" style="overflow-y:scroll;">
								<?php
									while($result=mysql_fetch_array($query)){
										echo "<div id='unread'><div class='listview-outlook'><a href='#' class='list'><div class='list-content'>";
										echo "<span class='list-title'>".$result['Sender']."</span>";
										echo "<span class='list-subtitle'>".$result['Subject']."</span>";
										echo "<span class='list-remark'>".$result['Message']."</span></div></a></div></div>";
									}
								?>
						</div>
					</div>
				</section><br>
				<section id="read">
					<div class="panel" style="border-radius:10px; height:250px;">
						<div class="panel-header fg-white bg-darkBlue">
							<?php echo "Read messages: ", $unread; ?>
						</div>
					<div class="panel-content" style="overflow-y:scroll;">
							<?php while($result2=mysql_fetch_array($query2)){
									echo "<div class='listview-outlook'><a href='#' class='list'><div class='list-content'>";
									echo "<span class='list-title'>".$result2['Sender']."</span>";
									echo "<span class='list-subtitle'>".$result2['Subject']."</span>";
									echo "<span class='list-remark'>".$result2['Message']."</span></div></a></div>";
								}
							?>
					</div>
					</div>
				</section><br>
				<section id='outbox'>
					<div class="panel" style="border-radius:10px; height:220px;">
						<div class="panel-header fg-white bg-violet">
							<?php echo "You sent: ", $outbox," messages"; ?>
						</div>
						<div class="panel-content" style="overflow-y:scroll;height:170px;">
								<?php while($result3=mysql_fetch_array($query3)){
										echo "<div class='listview-outlook'><a href='#' class='list'><div class='list-content'>";
										echo "<span class='list-title'>",$result3['Receipient'],"</span>";
										echo "<span class='list-subtitle'>",$result3['Subject'],"</span>";
										echo "<span class='list-remark'>",$result3['Message'],"</span></div></a></div>";
									}
								?>
						</div>	
					</div>
				</section>
			</div>
		</div>
	</div><br><br><br>
	<div class="bg-dark fg-white" style="position:relative; bottom:0px;height:50px;">
			
</div>
<script>
		$("#sendMsg").on('click', function(){
			$.Dialog({
				overlay: true,
				shadow: true,
				//flat: true,
				draggable: true,
				icon: false,
				title: '',
				content: '',
				padding: 0,
				onShow: function(_dialog){
					var content = '<div class="span6"><form method="post" class="myWindow" action="send_message.php"><table cellpadding="5" cellspacing="5">'+
						'<tr><td align="right">To<td><input type="text" class="input-control" placeholder="type" name="receipient"> </tr>'+
						'<tr><td align="right">Subject<td><input type="text" placeholder="type" name="subject" > </tr>'+
						'<tr><td align="right">Message<td><textarea cols="25px" rows="8" name="message"></textarea></tr>'+
						'<tr><td><input type="hidden" name="delivered" > </tr>'+
						'<tr><td><input class="command-button primary medium icon icon-cancel" type="submit" value="send" name="submit"></tr>'+
						'</table></form></div>';
				$.Dialog.content(content);
				$.Dialog.title("Send message");
				}
			});
		});
				$("#admin").on('click', function(){
			$.Dialog({
				overlay: true,
				shadow: true,
				//flat: true,
				draggable: true,
				icon: false,
				title: '',
				content: '',
				padding: 0,
				onShow: function(_dialog){
					var content = '<div class="span6"><form method="post" class="myWindow" action="send_message.php"><table cellpadding="5" cellspacing="5">'+
						'<tr><td align="right">To<td><input type="text" value="Admin"class="input-control" placeholder="type" name="receipient"> </tr>'+
						'<tr><td align="right">Subject<td><input type="text" placeholder="type" name="subject" > </tr>'+
						'<tr><td align="right">Message<td><textarea cols="25px" rows="8" name="message"></textarea></tr>'+
						'<tr><td><input type="hidden" name="delivered" > </tr>'+
						'<tr><td><input class="command-button primary medium icon icon-cancel" type="submit" value="send" name="submit"></tr>'+
						'</table></form></div>';
				$.Dialog.content(content);
				$.Dialog.title("Request support from the Admins");
				}
			});
		});
</script>
</body>
</html>