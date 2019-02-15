<!DOCTYPE html>
<html lang="en">
<head>
	<!-- CSS -->
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
	<link href="css/myCustom.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
	<title> jumuika</title>
</head>
<!-- Body -->
<body class="metro" style="background-image: url('images/hood8.jpg'); background-repeat: no-repeat; background-size:cover;">
	<nav class="navigation-bar dark">
		<nav class="navigation-bar-content">
			<a id="admin"><button class="command-button bg-gray fg-blue large place-right"> Admin </button></a>
			<item class="element"> About jumuika </item>
			<item class="element-divider">...</item>
			<item class="element">Online shopping</item>
			
		</nav>
	</nav>
	<div class="grid">
		<div class="row">
			<div class="span8 offset1 bg-blue"> 
				<img src="images/d.jpg"  height="40px"/>
			</div>
			<div class="span4 offset1">
				<p><span style="font-size:60px; font-weight:900; font-family:stencil;"> JUMUIKA </span> </p><br>
				<span class="subheader fg-blue">  Online shopping </span>
			</div>
		<div class="span4 offset1">
		<div class="row">
			
                <div class="tile-content image carousel" id="carousel1">
					<div class="">
						<div class="slide">
							<img src="images/Ezzy.jpg">
						</div>

						<div class="slide">
							<img src="images/jek_vorobey.jpg">
						</div>

						<div class="slide">
							<img src="images/jolie.jpg">
						</div>

						<div class="slide">
							<img src="images/obama.jpg">
						</div>
						<div class="slide">
							<img src="images/shvarcenegger.jpg">
						</div>
					</div>
                </div>
				<script>
					$(function(){
						$("#carousel1").carousel({
							height: 200
						});
					})
				</script>
            </div> 
		</div>
		<br></br>
		</div>
		<div class="grid">
		<div class="row">
			<div class="span12 offset1"> 
		<a href="login.php"><button class="command-button inverse large offset1 icon" onclick="login.php"><i>Login&nbsp </i></button></a>
		<a href="member_registration.php" ><button class="command-button bg-darkGreen fg-white large"> Sign up</button></a>
		<button class="command-button danger large" onclick="login()"> Information</button>
		</div>
		</div>
		<div class="span12 overlay bg-dark offset1" style="opacity:0.5;">
			<marquee>
				<span class="fg-amber" style="font-weight:500; font-size:60px">WELCOME ONE WELCOME ALL </span>
			</marquee>
		</div>
		</div>
	</div>
	<script>
		function login(){
			location.href="police-login.php";
		}		
	</script>
	<script>
				$("#admin").on('click', function(){
					$.Dialog({
						overlay: true,
						shadow: true,
						flat: true,
						draggable: true,
						icon: '<img src="images/burlglar1.png"/>',
						title: '',
						content: '',
						padding: 0,
						onShow: function(_dialog){
							var content = '<div class="span5" style="padding:20px"><form method="post" action="admin_login.php">'+
										'<fieldset><legend> Admin login</legend>'+
										'<label> Username </label><div class="input-control text" data-role="input-control">'+
										'<input type="text" placeholder="type username" name="username" onfocus="input_hover()">'+
										'<button class="btn-clear" tabindex=""></button></div>'+
										'<label> Password </label><div class="input-control text" data-role="input-control">'+
										'<input type="password" placeholder="Enter password" name="password">'+
										'<button class="btn-clear" tabindex=""></button></div>'+
										'<input type="submit" value="Login" name="submit" id="notify_btn_1"></fieldset></form></div>';
						$.Dialog.content(content);
						$.Dialog.title("Request support from the Admins");
						}
					});
				});
			</script>
</body>
</html>