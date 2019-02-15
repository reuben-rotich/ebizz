	<?php
	include 'dbcon.php';
	session_start();
	$user=$_SESSION['id'];
	//$query=mysql_query("SELECT Name FROM members WHERE Username='$user'") or die(mysql_error());
	//$sender=mysql_result($query,0);
	$sender=$user;
		if(isset($_POST['submit'])){
			$receipient=$_POST['receipient'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];
			$delivered='NO';
			$time='';
			$query2=mysql_query("INSERT INTO messages(ID,Sender,Receipient,Subject,Message,Time,Seen) VALUES(null,'$sender','$receipient','$subject','$message','$time','$delivered')") or die("could not send the message: ". mysql_error());
			echo "<script>history.back();</script>";
			echo "<script>alert('Your message has been sent');</script>";
		}
		else{
			echo "<script>alert('Could not send the message,please try later');</script>";
		}
	?>