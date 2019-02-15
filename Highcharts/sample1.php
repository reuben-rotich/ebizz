<?php include '../dbcon.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script src="min/metro.min.js"></script>
		<style rel="stylesheet" href="../css/metro-bootstrap.min.css" type="text/css"></style>
		<style rel="stylesheet" href="min/metro-bootstrap-responsive.min.css" type="text/css"></style>
		<style rel="stylesheet" href="min/iconFont.min.css" type="text/css"></style>
		
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
	<script src="js/highcharts.js"></script>
	<script src="js/modules/data.js"></script>
	<script src="js/modules/exporting.js"></script>
	</head>
<body class="metro">
	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<table class="table bordered hovered "id="datatable">
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
</body>
</html>
