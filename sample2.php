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
			<div class="row ">
				<div class="span10 offset1">
					<?php
					$query=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Login' OR Activity='login'") or die("The count logs query did not execute:".mysql_error());
					$logins=mysql_result($query,0);
					$query1=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Registration' OR Activity='registration'") or die("The count logs query did not execute:".mysql_error());
					$registration=mysql_result($query1,0);
					$query2=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Security request'") or die("The count logs query did not execute:".mysql_error());
					$security=mysql_result($query2,0);
					//$query8=mysql_query("SELECT COUNT(ID) AS logins FROM logs WHERE Activity='Resident_alarm' OR Activity='login'") or die("The count logs query did not execute:".mysql_error());
					//$alarms=mysql_result($query8,0);
					?>
					<table class="table" id="datatable">
						<thead><tr class="bg-emerald fg-white"><td>...</td><td>Active logins</td><td>Registrations</td><td>Security requests</td></tr></thead>
						<tbody><tr><td>...</td><td><?php echo $logins; ?></td><td><?php echo $registration; ?></td><td><?php echo $security; ?></td></tr></tbody>
					</table>
				</div>
				<div class="span3 offset1">
					<a class="tile bg-darkCyan half" data-click="transform" onclick="history.back();">
						<div class="tile-content icon">
						   <span class="icon-undo"></span>
						</div>
						<div class="brand">
							<div class="label">Back</div>
						</div>
					</a>
				</div>
			</div>
			<br>
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
			text: 'User participation'
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