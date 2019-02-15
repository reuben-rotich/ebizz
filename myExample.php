<!DOCTYPE html >
<html lang="en">
<header>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="min/metro-bootstrap.min.css"></link>
	<link rel="stylesheet" type="text/css" href="min/metro-bootstrap-responsive.min.css"></link>
	<link rel="stylesheet" type="text/css" href="min/iconFont.min.css"></link>
	<!-- Javascript -->
	<script src="min/metro.min.js"></script>
	<!-- jquery -->
	<script type="text/javascript" src="docs/js/jquery/jquery.min.js"></script>
</header>

<body class="metro">
	<section class="bg-crimson"></section>
	<button class="command-button primary" id="carousel">Shit will hit the fun</button>
	<br>
	<button class="command-button primary" id="carousel2">Shit will hit the fun</button>
</body>
	<script>
		$(function(){
			$('#carousel').on('click', function(){
				$.Notify({
					shadow: true,
					position: 'bottom-right',
					content: "Metro UI CSS is awesome!!!"
				});
			});
			$('#carousel2').on('click', function(){
				setTimeout(function(){
					$.Notify({style: {background: '#1ba1e2', color: 'white'}, caption: 'Info...', content: "Metro UI CSS is Simple!!!"});
				}, 1000);
				setTimeout(function(){
					$.Notify({style: {background: 'red', color: 'white'}, content: "Metro UI CSS is Sufficient!!!"});
				}, 2000);
				setTimeout(function(){
					$.Notify({style: {background: 'green', color: 'white'}, content: "Metro UI CSS is Responsive!!!"});
				}, 3000);
				setTimeout(function(){
					$.Notify({content: "Default style for notify"});
				}, 4000);
			});
		});
	</script>
</html>