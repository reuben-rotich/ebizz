<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
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
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<!--<table class="table bordered" id="datatable">
		<thead>
			<tr class="success"><th>Married</th><th>Single</th><th>Single parents</th><th>Divorced</th></tr>
		</thead>
		<tbody>
			<tr><th>20</th><td>16</td><td>10</td><td>14</td><td>20</td><td>11</td></tr>
		</tbody>
	</table>
	</body>-->
	<table class="table bordered" id="datatable">
		<thead>
			<tr class="success"><th>Year</th><th>Crimes</th><th>Alarms</th><th>Events</th><th>Arrests</th><th>Wanted</th></tr>
		</thead>
		<tbody>
			<tr><th>2015</th><td><?php echo $result1;?></td><td><?php echo $result2;?></td><td><?php echo $result3;?></td><td><?php echo $result4;?></td><td><?php echo $result5;?></td></tr>
			<tr><th>2016</th><td>0</td><td>0</td><td>4</td><td>0</td><td>0</td></tr>
		</tbody>
	</table></body>
</html>
