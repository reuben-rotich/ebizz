<?php 
include 'dbcon.php'; 
include 'chartHeader.php';
session_start();
?>
<body class="metro">
<?php include 'navbar-chart.php'; ?>
	<div class="grid bg-olive">
		<br>
		<div class="span12 offset1" id="container" style="min-width: 310px; height:500px; margin: 0 auto;box-shadow:5px 5px 8px teal"></div>
		<div class="row">
			<div class="span10 offset1">
				<table class="table bordered hovered" id="datatable">
					<thead class="fg-white bg-darkGreen"><tr><td> All </td><td>Married</td><td>Single</td><td>Single_parents</td><td>widowed</td></tr></thead>
						<tbody class="">
							<?php
								$query=mysql_query("SELECT COUNT(National_ID) FROM members") or die(mysql_error());
								$queryAll=mysql_query("SELECT COUNT(National_ID) AS ID FROM members") or die(mysql_error());
								$queryMarried=mysql_query("SELECT COUNT(National_ID) AS married FROM members WHERE Marital_status='married' or Marital_status='Married'") or die(mysql_error());
								$querywidowed=mysql_query("SELECT COUNT(National_ID) AS widowed FROM members WHERE Marital_status='widowed' or Marital_status='Widowed'") or die(mysql_error());
								$querySingleParent=mysql_query("SELECT COUNT(National_ID) AS SingleParent FROM members WHERE Marital_status='Single Parent' or Marital_status='single parent'") or die(mysql_error());
								$querySingle=mysql_query("SELECT COUNT(National_ID) AS married FROM members WHERE Marital_status='single' or Marital_status='Single'") or die(mysql_error());
								$allMembers=mysql_result($queryAll,0);
								$married=mysql_result($queryMarried,0);
								$widowed=mysql_result($querywidowed,0);
								$singleParent=mysql_result($querySingleParent,0);
								$single=mysql_result($querySingle,0);
								echo "<tr><td>";
								echo $allMembers;
								echo "</td><td>";
								echo $married;
								echo "</td><td>";
								echo $single;
								echo "</td><td>";
								echo $singleParent;
								echo "</td><td>";
								echo $widowed;
								echo "</td></tr>";
								/*while($result=mysql_fetch_array($query)){
									echo "<tr><td>";
									echo $result['Name'];
									echo "</td><td>";
									echo $result['National_ID'];
									echo "</td><td>";
									echo $result['Marital_status'];
									echo "</td><td>";
									echo $result['Spouse'];
									echo "</td><td>";
									echo $result['POB'];
									echo "</td><td>";
									echo $result['DOB'];
									echo "</td><td>";
									echo $result['Email'];
									echo "</td><td>";
									echo $result['Member_since'];
									echo "</td></tr>"; 
								} */
							?>
					</tbody>
				</table>
			</div>
			<div class="span3">
				<a class="tile bg-darkCyan" data-click="transform" onclick="history.back();">
					<div class="tile-content icon">
					   <span class="icon-undo"></span>
					</div>
					<div class="brand">
						<div class="label">Back</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	
	<?php include 'footer.php'; ?>
</body>
<script type="text/javascript">
	$(function () {
	$('#container').highcharts({
		data: {
			table: 'datatable'
		},
		chart: {
			type: 'column'
		},
		title: {
			text: 'E-Policing members'
		},
		yAxis: {
			allowDecimals: false,
			title: {
				text: 'Units'
			}
		},
		tooltip: {
			formatter: function () {
				return '<b>' + this.series.name + '</b><br/>' +
					this.point.y + ' ' + this.point.name.toLowerCase();
			}
		}
	});
	});
</script>
</html>
