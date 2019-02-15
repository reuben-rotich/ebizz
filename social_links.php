<html>
<?php
include 'header.php';
?>
<body class="metro">
	<div class="tile-area tile-area-darkViolet">
		<h1 class="tile-area-title fg-white">Social</h1>
        <div class="user-id">
            <div class="user-id-image">
                <span class="icon-user no-display1"></span>
                <img src="images/Battlefield_4_Icon.png" class="no-display">
            </div>
            <div class="user-id-name">
                <span class="first-name">Reuben</span>
                <span class="last-name">Bomett</span>
            </div>
        </div>
		<div class="tile-group eight">
            <div class="tile-group-title">Quick links</div>
            <a class="tile bg-darkBlue double double-vertical" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-facebook"></span><!--<img src="docs/images/word.png"> -->
                </div>
            </a>
            <a class="tile bg-orange double" data-click="transform" href="change_password.php">
                <div class="tile-content icon">
                    <span class="icon-tumblr"></span><!--<img src="docs/images/excel.png"> -->
                </div>
            </a>
            <a class="tile bg-darkPink" data-click="transform" href="http://mail.yahoo.com">
                <div class="tile-content icon">
                    <span class="icon-yahoo"></span><!--<img src="docs/images/onenote.png"> -->
                </div>
            </a>
            <a class="tile bg-darkGreen" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-android"></span><!--<img src="images/powerpoint.png"> -->
                </div>
            </a>
            <a class="tile double bg-lightBlue" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-instagram"></span><!--<img src="images/outlook.png"> -->
                </div>
            </a>
            <a class="tile bg-darkRed" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-feed"></span>
                </div>
            </a>
			<a class="tile bg-gray" data-click="transform" onclick="sure()">
                <div class="tile-content icon">
                    <span class="icon-switch">
					</span>
                </div>
            </a>
			<!-- small tiles -->
            <a href="http://twitter.com" class="tile double bg-blue" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-twitter"></span>
                </div>
            </a>

            <a href="http://plus.google.com" class="tile double bg-crimson" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-google-plus"></span>
                </div>
            </a>
			
            <a href="#" class="tile double bg-red" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-youtube"></span>
                </div>
            </a>
			<a href="http://facebook.com" class="tile bg-darkBlue" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-wordpress"></span>
                </div>
            </a>
			<a onclick="history.back();" class="tile bg-darkOrange double offset1" data-click="transform">
                <div class="tile-content icon">
                    <span class="icon-arrow-left"></span>
                </div>
				<div class="brand overlay">
					<h4 class="fg-white"> &nbsp Back </h4>
				</div>
            </a>
            <!-- end small tiles -->
			<script type="text/javascript">
				function sure(){
				var ask=confirm("Are you sure you want to logout?");
				if (ask==true){
				location.href="logout.php"; }
				}
			</script>
        </div> <!-- End tile group -->
	</div>
	   <script src="js/hitua.js"></script>
</body>
</html>