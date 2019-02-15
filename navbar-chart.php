	<nav class="navigation-bar dark">
		<nav class="navigation-bar-content">
			<a class="element" href="admin_panel.php">Portal</a>
			<div class="element-divider">...</div>
			<a class="element" href="homepage.php">Home</a>
			<div class="element-divider">...</div>
			<a class="element" onclick="logout()">Log out</a>
			<div class="element-divider place-right">...</div>
			<button class="element image-button image-left place-right fg-white">
				<?php echo $_SESSION['id']; ?>
				<img src="images/laundering.jpg" class="rounded"/>&nbsp&nbsp
			</button>
			<div class="element-divider">...</div>
		</nav>
	</nav>
	<script>
		function logout(){
			var ask=confirm("Are you sure you want to logout?");
			if (ask==true){
				location.href="logout.php";
			}
		}
	</script>