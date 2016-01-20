<?
include("includes/header.php");
?>
<div id="content">
    <section class="text-centered grey border_top border_light">
    	<img src="<?=$sRoot?>images/progress.png" alt="Progress" />
    </section>
    <section id="ritten" class="white border_top">
    	<h4>Aankomende ritten</h4>
    	<ul>    		
			<?
			foreach(array_slice($aRitten['aankomend'], 0, 1, true) as $iRit => $aRit){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot?>mijn-ritten/?rit=<?=$iRit?>&type=aankomend'">
					<h3><?=$aRit['date']?></h3>
					<?=$aRit['time_start']?> - <?=$aRit['time_end']?>
				</li>
				<?
			}
			?>
    	</ul>
    	<h4 style="margin-top: 30px;">Gereden ritten</h4>
    	<ul>    		
			<?
			foreach(array_slice(array_reverse($aRitten['gereden'], true), 0, 3, true) as $iRit => $aRit){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot?>mijn-ritten/?rit=<?=$iRit?>&type=gereden'">
					<h3><?=$aRit['date']?></h3>
					<?=$aRit['time_start']?> - <?=$aRit['time_end']?>
				</li>
				<?
			}
			?>
    	</ul>
    	<p><a href="<?=$sRoot?>mijn-ritten/">Bekijk al mijn ritten<i class="fa fa-angle-right" style="margin-left: 10px;"></i></a></p>
    </section>
    <section id="hulp" class="grey border_top border_light">
    	<ul>
    		<li><a href="#" class="btn">Bekijk voordelen</a></li>
    		<li><a href="#" class="btn blueDark">Bel mijn instructeur</a></li>
    	</ul>
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