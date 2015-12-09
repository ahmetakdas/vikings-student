<?
include("includes/header.php");
?>
<div id="content">
	<div class="inner text-centered">
    	<a href="<?=$sRoot?>" id="logo"><img src="<?=$sRoot?>/images/vw-logo.png" alt="logo" /></a>
    </div>
    <section class="inner text-centered units-row">
    	<div class="width-50 left">
    		<div class="progress_diagram small">
    			<?=$aUser['progress']?>
    		</div>
    	</div>
    	<div class="width-50 right">
    		<div class="progress_diagram big">
    			<?=$aUser['think-blue']?>
    		</div>
    	</div>
    </section>
    <section class="inner text-centered" style="overflow: hidden;">
    	<h3>Voortgang</h3>
    	<div id="chart" style="width: 100%; height: 300px;"></div>
    </section>
    <section class="inner text-centered">
		<h3>Think Blue</h3>
		<div class="progress_diagram big">
			<?=$aUser['think-blue']?>
		</div>
    </section>
</div>
<script type="text/javascript">
	google.load('visualization', '1.1', {packages: ['corechart', 'line']});
    google.setOnLoadCallback(drawChart);

	function drawChart() {

		var data = new google.visualization.DataTable();
		data.addColumn('date', 'Datum');
		data.addColumn('number', 'Voortgang');

		data.addRows([
			[new Date(2015, 9, 12, 13), 44],
			[new Date(2015, 9, 18, 11, 30), 57],
			[new Date(2015, 9, 26, 9), 64],
			[new Date(2015, 10, 3, 11), 71],
			[new Date(2015, 10, 8, 14, 30), 78],
			[new Date(2015, 10, 17, 11, 30), 83]
		]);

		var options = {
			width: "100%",
			height: 250,
			backgroundColor: "f5f8fa",
			legend: 'none',
			hAxis: {
		      title: 'Voortgang'
		    },
		    vAxis: {
		      title: 'Tijd'
		    }
		};

		var chart = new google.visualization.LineChart(document.getElementById('chart'));

		chart.draw(data, options);
    }

    var doit;
	$(window).resize(function(){
		clearTimeout(doit);
		doit = setTimeout(drawChart, 100);	
	});
</script>
<?
include("includes/footer.php");
?>