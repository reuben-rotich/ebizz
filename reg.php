<?php
				if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$ID = $_POST['id'];
				$R1 = $_POST['r1'];
				$spouse = $_POST['spouse'];
				$POB = $_POST['pob'];
				$DOB = $_POST['date'];
				$email = $_POST['email'];
				$username = $_POST['username'] ;
				$password = $_POST['password'];
			 
				mysql_query("INSERT INTO members(Name,National_ID,Marital_status,Spouse,POB,DOB,Email,Username,Password)
				VALUES ('$name', '$ID', '$R1', '$spouse', '$POB', '$DOB', '$email', '$username', '$password')") or die(mysql_error());
				mysql_query("INSERT INTO logs(ID,Activity,User,Time) VALUES (null,'Registration','$name',null)") or die(mysql_error());
				echo "<script> location.href='login.php';</script>";
				}
			?>
			
		function validateNow(){
			var nameJ = document.getElementById("name").value;
			var id = document.getElementById("id");
			var r1 = document.getElementById("r1");
			var spouse = document.getElementById("spouse");
			var POB = document.getElementById("pob");
			var DOB = document.getElementById("date")
			var email = document.getElementById("email");
			var username = document.getElementById("username");
			var password = document.getElementById("password");
		}