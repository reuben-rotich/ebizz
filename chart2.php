<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

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
            type: 'column'
        },
        title: {
            text: 'Data extracted from a HTML table in the page'
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
<script src="Highcharts/js/highcharts.js"></script>
		<script src="Highcharts/js/modules/data.js"></script>
		<script src="Highcharts/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table class="table bordered" id="datatable">
		<thead>
			<tr class="success"><th></th><th>Events</th><th>Members</th></tr>
		</thead>
		<tbody>
			<tr><th>LA</th><td>30</td><td>25</td></tr>
			<tr><th>46</th><td>40</td><td>30</td></tr>
			<tr><th>Uplands</th><td>50</td><td>35</td></tr>
			<tr><th>Westie</th><td>30</td><td>45</td></tr>
		</tbody>
	</table></div>	</body>
</html>
