<?php 
	include 'dbcon.php';
	include 'header.php';
	session_start();
	$username=$_SESSION['id'];
	$query=mysql_query("SELECT Name FROM members WHERE Username='$user'") or die("Could not retrieve name of user".mysql_error());
	$user=mysql_result($query,0);
	$query1=mysql_query("INSERT INTO alerts(ID,Name,Crime,Scene) VALUES(null,'$username','burglary','residence')") or die(mysql_error());
	$query2=mysql_query("INSERT INTO logs(ID,Activity,User,Time) VALUES(null,'Resident_alarm','$username','')") or die(mysql_error());
	header('location:my-start-screen.php');
?>