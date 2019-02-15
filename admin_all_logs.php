<!DOCTYPE html>
<html>
<?php
	include 'header.php';
	include 'dbcon.php';
	include 'navbar.php';
?>
<body class="metro">
		<div class="row">
			<table class="table striped hovered">
				<thead class="fg-white bg-darkGreen"><tr><td> User </td><td>Activity</td><td>Time</td></tr></thead>
				<tbody class="">
				<?php
					$query=mysql_query("SELECT User,Activity,Time FROM logs") or die(mysql_error());
					while($result=mysql_fetch_array($query)){
						echo "<tr><td>";
						echo $result['User'];
						echo "</td><td>";
						echo $result['Activity'];
						echo "</td><td>";
						echo $result['Time'];						
						echo "</td></tr>"; 
					} 
				?>
			</tbody>
			</table>
		</div>
		<hr><br>
		<div >
			<nav class="breadcrumbs">
				<ul>
				<li><a href="my-start-screen.php">Portal</a></li>
				<li class="active"><a href="#">Logs</a></li>
				</ul>
			</nav>
		</div>
</body>
</html>