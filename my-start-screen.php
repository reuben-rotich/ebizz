<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("ebizz", $conn);
include 'header.php' ;
include 'dbcon.php';
session_start();
?>
<head>
    <title>Jumuika Shopping</title>
</head>
<body class="metro">
    <div class="tile-area tile-area-dark">
        <h1 class="tile-area-title fg-white">Jumuika Shopping</h1>
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
<body>
<form action="result.php" method="POST">
<center><h3 class= "fg-white" >Search </h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" name="name" size="80"></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table></center>
</form>
</body>
<div class="span5 offset4">
		<div class="row">

            <div class="tile double double-vertical" data-click="transform" id="pics">
                <div class="tile-content image carousel" id="carousel1">
					<div class="">
						<div class="slide">
							<img src="images/hood8.jpg">
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
			<script> $(function(){$("#carousel1").carousel({height: 200 }); }) </script>
			<!-- end tile -->   
       
        </div>

        <div class= "span8 offset4""tile-group-double">
      

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
        
        </div>

</div>
    <script src="js/hitua.js"></script>

</body>
</html>
<?php
?>