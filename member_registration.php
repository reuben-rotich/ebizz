<?php
include 'header.php';
include 'navbar.php';
include 'dbcon.php' ;
?>
<head>
   <title>Registration</title>
</head>

<body class="metro">
	<nav class="navigation-bar dark">
		<nav class="navigation-bar-content">
			<a class="element" href="homepage.php">Home</a>
			<item class="element-divider"></item>
			<item class="element">Jumuika shopping Kenya</item>
			<item class="element-divider">...</item>
			<item class="element">...</item>
		</nav>
	</nav>
	<div class="grid bg-steel">
		<br><br>
		<div class="span8 offset3 bg-white" style="padding:20px;box-shadow:3px 3px 3px 3px darkslategray; border-radius:10px;" >
			<form method="post">
				<fieldset>
					<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
					<legend> Member Registration </legend>
					<label> Full Name </label>
					<div class="input-control text" data-role="input-control">
                         <input type="text" placeholder="type text" name="name">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<label> ID number </label>
					<div class="input-control text" data-role="input-control">
                         <input type="text" placeholder="national ID number" name="id">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<!-- Check Box  -->
					 <div>
					 <label> Marital status</label>
                        <div class="input-control radio default-style" data-role="input-control">
							<label>
							<input type="radio" name="r1" checked value="married" />
							<span class="check"></span>
							 Married
							</label>
                        </div>
                        <div class="input-control radio  default-style" data-role="input-control">
							<label>
							<input type="radio" name="r1" value="single"/>
							<span class="check"></span>
							 Single
							</label>
                        </div>
						<div class="input-control radio  default-style" data-role="input-control">
							<label>
							<input type="radio" name="r1" value="single parent"/>
							<span class="check"></span>
							 Single parent
							</label>
                        </div>
						<div class="input-control radio  default-style" data-role="input-control">
							<label>
							<input type="radio" name="r1" value="widowed"/>
							<span class="check"></span>
							 Widowed
							</label>
                        </div>
                    </div>
						
					<!-- end of chckbox  -->
					<label> Spouse's full name  </label>
					<div class="input-control text" data-role="input-control">
                         <input type="text" placeholder="type text" name="spouse">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<label> Place of birth </label>
					<div class="input-control text" data-role="input-control">
                         <input type="text" placeholder="type text" name="pob">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<label> Date of birth</label>
					<div class="input-control text" data-role="datepicker" data-date="2013-11-13" data-effect="slide" data-other-days="1"   data-format="yyyy:mm:dd">
						<input type="text" name="date" placeholder="select" id="datepicker">
					</div>
							
					<label> Email </label>
					<div class="input-control text" data-role="input-control">
                         <input type="text" placeholder="" name="email">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<label> Username </label>
					<div class="input-control text" data-role="input-control">
                         <input type="text" placeholder="" name="username">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<label> Password </label>
					<div class="input-control text" data-role="input-control">
                         <input type="password" placeholder="" name="password">
                         <button class="btn-clear" tabindex="-1"></button>
                    </div>
					<label>Photo</label>
					<div class="input-control file">
						<input type="file" name="photo"/>
						<button class="btn-file"></button>
					</div>
					<br><br>
					<input type="submit" name="submit" value="Register" >					
					
				</fieldset>
				<script>
					
				</script>
				<script type="text/javascript">
					$(document).ready(function(){
						$("input").focus(function(){
							$(this).css("background-color", "#cccccc");
						});
						$("input").blur(function(){
							$(this).css("background-color", "#ffffff");
						});
					});
				</script>
			</form>
			<?php
				if(isset($_POST['submit'])){
					$spouse = $_POST['spouse'];
					$POB = $_POST['pob'];
					$DOB = $_POST['date'];
					if(empty($_POST['name'])){
						echo "<script>alert('Please enter your Name'); history.back();</script>";
					}
					else{
						$name = $_POST['name'];
						if(empty($_POST['id'])){
							echo "<script>alert('Please enter your ID number'); history.back();</script>";
						}
						else{
							$ID = $_POST['id'];
							if(empty($_POST['r1'])){
								echo "<script>alert('You must select your marital status'); history.back();</script>";
							}
							else{
								$R1 = $_POST['r1'];
								if(empty($_POST['email'])){
									echo "<script>alert('Your email is required'); history.back();</script>";
								}
								else{
									$email = $_POST['email'];
									if(empty($_POST['username'])){
										echo "<script>alert('Please enter your username'); history.back();</script>";
									}
									else{
										$username = $_POST['username'] ;
										if(empty($_POST['password'])){
										echo "<script>alert('Password is required'); history.back();</script>";
										}
										else{
											$password = $_POST['password'];
											if(empty($_POST['photo'])){
												echo "<script>alert('we need your profile photo, please'); history.back();</script>";
											}
											else{
												$uploaddir = 'images/Members/';
												$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
												$image_name= addslashes($_FILES['photo']['name']);
												$image_size= getimagesize($_FILES['photo']['tmp_name']);
												move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $_FILES['photo']['name']);
												$location="images/Members/" . $_FILES["photo"]["name"];
												mysql_query("INSERT INTO members(Name,Photo,National_ID,Marital_status,Spouse,POB,DOB,Email,Username,Password)
												VALUES ('$name','$location','$ID', '$R1', '$spouse', '$POB', '$DOB', '$email', '$username', '$password')") or die(mysql_error());
												mysql_query("INSERT INTO logs(ID,Activity,User,Time) VALUES (null,'Registration','$name',null)") or die(mysql_error());
												echo "<script> location.href='login.php';</script>";
											}
										}
									}
								}
							}
						}
					}
				}
			?>
		</div><br><br><br>
	</div>
	<div></div>
	<div></div>
	<div></div>
	<script>
		//if(!isset($_POST['']))
		//echo "<div class='notice marker-on-top bg-red'>Please enter your name </div>";
	</script>
</body>
</html>