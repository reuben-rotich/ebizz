<?php
include 'header.php' ;
include 'dbcon.php';
session_start();
?>
<head>
    <title>Portal</title>
</head>
<body class="metro">
    <div class="tile-area tile-area-dark">
        <h1 class="tile-area-title fg-white">Portal</h1>
        <div class="user-id">
            <div class="user-id-image">
                <span class="icon-user no-display1"></span>
                <img src="images/Battlefield_4_Icon.png" class="no-display">
            </div>
            <div class="user-id-name">
                <span class="first-name"><?php echo $_SESSION['id']; ?></span>
                <span class="last-name"> Member</span>
            </div>
        </div>

        <div class="tile-group six">

            <a class="tile double bg-lightBlue live" data-role="live-tile" data-effect="slideUp" data-click="transform" href="message.php">
                <div class="tile-content email">
                    <div class="email-image">
                        <img src="images/passport2.jpg">
                    </div>
                    <div class="email-data">
                        <span class="email-data-title">Stanley Onchari</span>
                        <span class="email-data-subtitle">You have unread messages</span>
                        <span class="email-data-text">shit will hit the fun</span>
                    </div>
                </div>
                <div class="tile-content email">
                    <div class="email-image">
                        <img src="images/jolie.jpg">
                    </div>
                    <div class="email-data">
                        <span class="email-data-title">Jolie &amp; Bred</span>
                        <span class="email-data-subtitle">You're invited</span>
                        <span class="email-data-text">I hope that you can make and make</span>
                    </div>
                </div>
                <div class="tile-content email">
                    <div class="email-image">
                        <img src="images/shvarcenegger.jpg">
                    </div>
                    <div class="email-data">
                        <span class="email-data-title">Arny</span>
                        <span class="email-data-subtitle">You're invited</span>
                        <span class="email-data-text">I hope that you can make and make</span>
                    </div>
                </div>
                <div class="brand">
                    <div class="label"><h3 class="no-margin fg-white"><span class="icon-mail"></span></h3></div>
                    <div class="badge">3</div>
                </div>
            </a> <!-- end tile -->
			<script>
				
			</script>

            <a class="tile double bg-violet" data-click="transform" href="noticeboard.php">
                <div class="tile-content">
                    <div class="text-right padding10 ntp">
                        <h1 class="fg-white no-margin">10</h1>
                        <p class="fg-white">Events and notices</p>
                    </div>
                </div>
                <div class="brand">
                    <div class="label"><h3 class="no-margin fg-white"><span class="icon-calendar"></span></h3></div>
                </div>
            </a> <!-- end tile -->

            <div class="tile bg-red" data-click="transform" onclick="confirmAlert()">
                <div class="tile-content icon">
                    <span class="icon-warning"></span><!--<img src="images/clouds.jpg"> -->
                </div>
                <div class="brand icon">
                    <div class="label fg-white">Alarm</div>
                </div>
				<script>
					function confirmAlert(){
						var ask = confirm("Are you sure about this alert?");
						if (ask==true){
							location.href="alert.php"
						}
						else{
							window.location.reload();
						}
					}
				</script>
            </div> <!-- end tile -->            
			<a class="tile bg-dark" data-click="transform" href="view_logs.php">
                <div class="tile-content icon">
                    <img src="images/log1.jpg">
                </div>
                <div class="brand">
                    <div class="label">Activity log</div>
                </div>
            </a>

            <a class="tile double double-vertical bg-magenta" data-click="transform">
                <div class="tile-content icon" style="background: url(images/clouds2.png)">
                    <div class="padding10">
                            <i class="icon-stats-up on-right on-left"	style="color: white; padding: 10px; border-radius: 50%"></i>
                    </div>

                </div>
                <div class="tile-status">
                    <div class="label">Crime statistics</div>
                </div>
            </a> <!-- end tile -->

            <div class="tile double" data-click="transform">
                <div class="tile-content image-set">
                    <img src="images/Ezzy.png">
                    <img src="images/jek_vorobey.jpg">
                    <img src="images/jolie.jpg">
                    <img src="images/obama.jpg">
                    <img src="images/shvarcenegger.jpg">
                </div>
            </div> <!-- end tile -->

            <a class="tile double bg-lightBlue" data-click="transform" href="community_police.php">
                <div class="tile-content icon">
                    <span class="icon-support"></span>
                </div>
                <div class="brand">
                    <div class="label">Community police</div>
                </div>
            </a>

            <a id="admin" class="tile bg-darkOrange" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-help"></span>
                </div>
                <div class="brand">
                    <div class="label">Help</div>
                </div>
            </a>
			<script>
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

            <a class="tile bg-lightBlue" data-click="transform" href="add_intel.php">
                <div class="tile-content image">
                    <img src="images/nyumbakumi.png">
                </div>
                <div class="brand">
                    <div class="label opacity">Share intel</div>
                </div>
            </a>

            <a class="tile double bg-darkGreen" data-click="transform" href="social_links.php">
                <div class="tile-content icon">
                    <span class="icon-share-2"></span>
                </div>
                <div class="brand">
                    <div class="label">Social links</div>
                </div>
            </a>
        </div> <!-- End group -->

        <div class="tile-group double">
            <div class="tile-group-title">Views </div>
            <a class="tile bg-dark" data-click="transform" href="view_members.php">
                <div class="tile-content icon">
                    <img src="images/avatars/8av.jpg">
                </div>
                <div class="brand">
                    <div class="label">Members</div>
                </div>
            </a>
            
			<div class="tile bg-dark" data-click="transform">
                <div class="tile-content icon">
                    <img src="images/intel2.png">
                </div>
                <div class="brand">
                    <div class="label">Neighborhood</div>
                </div>
            </div>
            <a class="tile bg-dark" data-click="transform" onclick="show_confirm()">
                <div class="tile-content icon">
                    <img src="images/password3.png">
                </div>
                <div class="brand">
                    <div class="label">Change password</div>
                </div>
            </a>
			<script type="text/javascript">
				function show_confirm() { 
				var r=confirm("Are you sure you want to change your password?"); 
				if (r==true) 
				{ 
				location.href="change_password.php";
				} 
				} 

			</script>
			<a class="tile bg-darkRed" data-click="transform" href="logout.php">
                <div class="tile-content icon">
                    <span class="icon-switch"></span>
                </div>
                <div class="brand">
                    <div class="label">Logout</div>
                </div>
            </a>
            <a class="tile double bg-white" data-click="transform" href="view_wanted2.php">
                <div class="tile-content icon">
                    <img src="images/wanted1.jpg">
                </div>
                <div class="brand">
                    <div class="label fg-black">Wanted persons</div>
                </div>
            </a>
        </div> <!-- End group -->

</div>
    <script src="js/hitua.js"></script>

</body>
</html>
<?php
?>