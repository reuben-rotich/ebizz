<?php include 'header.php'; include 'dbcon.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Summary</title>

	<script type="text/javascript" src="Highcharts/api/js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Overview of E-policing system'
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
	</head>
	<body>
	<!-- Dynamic set -->
	<?php 
	$query1=mysql_query("SELECT COUNT(Crime) FROM crime") or die("Could not count from the crimes database".mysql_error());
	$result1=mysql_result($query1,0);//crimes
	$query2=mysql_query("SELECT COUNT(ID) FROM alerts") or die("Could not count from the alerts database");
	$result2=mysql_result($query2,0);//alerts
	$query3=mysql_query("SELECT COUNT(ID) FROM events") or die("Could not count from the events database");
	$result3=mysql_result($query3,0);//events
	$query4=mysql_query("SELECT COUNT(Arrested) FROM wanted WHERE Arrested='yes' OR Arrested='YES'") or die("Could not count arrested ones");
	$result4=mysql_result($query4,0);//arrested
	$query5=mysql_query("SELECT COUNT(Arrested) FROM wanted WHERE Arrested='no' OR Arrested='NO'") or die("Could not count arrested ones");
	$result5=mysql_result($query5,0);//wanted
	/*$query6=mysql_query("SELECT EXTRACT(YEAR FROM Date) FROM crime") or die(mysql_error());
	$year=mysql_fetch_array($query6);
	for($i=0; $i<count($year);$i++){
		echo $i;
		echo "Year is:&nbsp",$year[$i];
	}*/
	
	?>
<script src="Highcharts/js/highcharts.js"></script>
		<script src="Highcharts/js/modules/data.js"></script>
		<script src="Highcharts/js/modules/exporting.js"></script>
<body class="metro">
	<div class="grid"><div class="row">
<div id="container" class=" offset"></div>
	</div>
	<div class="row">
	<div class=""><table class="table bordered" id="datatable">
		<thead>
			<tr class="success"><th>Year</th><th>Crimes</th><th>Alarms</th><th>Events</th><th>Arrests</th><th>Wanted</th></tr>
		</thead>
		<tbody>
			<tr><th>2015</th><td><?php echo $result1;?></td><td><?php echo $result2;?></td><td><?php echo $result3;?></td><td><?php echo $result4;?></td><td><?php echo $result5;?></td></tr>
			<tr><th>2016</th><td>0</td><td>0</td><td>4</td><td>0</td><td>0</td></tr>
		</tbody>
	</table></div>
	
	</div></div>
</body>
</html>