<?php
	include 'header.php';
	session_start();
?>
<!-- noticeboard -->
<!-- for members -->
<body class="metro">
<div class="tile-area tile-area-dark">
	<h1 class="tile-area-title fg-white">Noticeboard</h1>
	<div class="user-id">
		<div class="user-id-image">
			<span class="icon-user no-display1"></span>
			<img src="images/Battlefield_4_Icon.png" class="no-display">
		</div>
		<div class="user-id-name">
			<span class="first-name"><?php echo $_SESSION['id'];?></span>
			<span class="last-name">Member</span>
		</div>
	</div>
	<div class="tile-group-four">
		<a class="tile double double-vertical bg-magenta" data-click="transform" >
			<div class="tile-content icon">
				<span class="icon-calendar"></span>
			</div>
			<div class="brand">
				<div class="label"><h3 class="no-margin fg-white"><span>View Notices</span></h3></div>
			</div>
        </a>
		<!-- end tile -->
		<a class="tile double double-vertical bg-darkGreen" data-click="transform" id="add">
			<div class="tile-content icon">
				<span class="icon-calendar"></span>
			</div>
			<div class="brand">
				<div class="label"><h3 class="no-margin fg-white"><span>Add Notice</span></h3></div>
			</div>
        </a>
		<!-- end tile -->
		<!-- end tile -->
		<a class="tile double double-vertical bg-darkRed" data-click="transform" href="view_events.php">
			<div class="tile-content icon">
				<span class="icon-calendar"></span>
			</div>
			<div class="brand">
				<div class="label"><h3 class="no-margin fg-white"><span>View Events</span></h3></div>
			</div>
        </a>
		<!-- end tile -->
		<a class="tile double double-vertical bg-blue" data-click="transform" id="event">
			<div class="tile-content icon">
				<span class="icon-calendar"></span>
			</div>
			<div class="brand">
				<div class="label"><h3 class="no-margin fg-white"><span>Add Event</span></h3></div>
			</div>
        </a>
		<script>
			$("#event").on('click', function(){
				$.Dialog({
					overlay: true,
					shadow: true,
					flat: false,
					draggable: false,
					icon: false,
					title: '',
					content: '',
					padding: 15,
					onShow: function(_dialog){
						var content = '<div class="span5" style="padding-bottom:35px;"><form method="post" action="add_event.php"><table cellpadding="5" cellspacing="5"><tr><td align="right">Date<td><div class="input-control text" data-role="datepicker" data-date="2013-11-13" data-effect="slide" data-other-days="1"   data-format="yyyy:mm:dd"><input type="text" name="date" placeholder="select" id="datepicker"></div> </tr>'+
											'<tr><td align="right">Event<td><input type="text" class="input-control" placeholder="event" name="event"> </tr>'+
											'<tr><td align="right">Venue<td><input type="text" class="input-control" placeholder="where" name="venue"> </tr>'+
											'<tr><td></td><td><input class="command-button primary medium icon icon-cancel" type="submit" value="Add" name="submit"></td></tr>'+
											'<br></table></form><br><br></div>';
					$.Dialog.content(content);
					$.Dialog.title("Add Event");
					}
				});
			});
			$("#add").on('click', function(){
				$.Dialog({
					overlay: true,
					shadow: true,
					//flat: true,
					draggable: false,
					icon: false,
					title: '',
					content: '',
					padding: 0,
					onShow: function(_dialog){
						var content = '<div class="span5"><form method="post" action="add_notice.php" enctype="multipart/form-data" class="span2">'+
										'<input type="hidden" name="MAX_FILE_SIZE" value="3000000">'+
										'<table cellpadding="5" cellspacing="5">'+
										'<tr><td align="right"><div class="balloon-right">Attach a poster</div></td><td><input name="posta" type="file"></td> </tr>'+
										'<tr><td align="right">Info<td><textarea cols="25px" rows="8" name="details"></textarea></tr>'+
										'<tr><td><span class="icon"><input class="command-button primary medium  icon-cancel" type="submit" value="Add" name="submit"></span></tr>'+
										'</table></form><br></div>';
					$.Dialog.content(content);
					$.Dialog.title("Add notice");
					}
				});
			});
		</script>
		<!-- end tile -->
		  <a class="tile quadro bg-darkCobalt" data-click="transform" href="my-start-screen.php">
                <div class="tile-content icon">
                    <span class="icon-undo"></span><!--<img src="docs/images/clouds.jpg"> -->
                </div>
                <div class="brand icon">
                    <div class="label"><h3 class="no-margin fg-white"><span>Go back</span></h3></div>
                </div>
            </a> <!-- end tile -->
	</div>

</div>
</body>
</html>
