<?
include("includes/header.php");
?>
<div id="content">
    <section class="text-centered units-row">
    	<div class="width-50 left">
    		<h3 style="margin: 0 0 15px 0;">Mijn voortgang</h3>
    		<div class="progress_diagram small">
    			<?=$aUser['progress']?><span>%</span>
    		</div>
    	</div>
    	<div class="width-50 right">
    		<h3 style="margin: 0 0 15px 0;">Think Blue</h3>
    		<div class="progress_diagram big">
    			<?=$aUser['think-blue']?>
    		</div>
    	</div>
    </section>
    <section id="ritten" class="white">
    	<h2>Mijn ritten</h2>
    	<p>Hier staan jouw ritten.</p>
    	<h3>Aankomende rit</h3>
    	<ul>    		
			<?
			foreach(array_slice($aRitten['aankomend'], 0, 1, true) as $iRit => $aRit){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot?>mijn-ritten/?rit=<?=$iRit?>&type=aankomend'">
					<i class="fa fa-calendar"></i><?=$aRit['date']?>. <?=$aRit['time_start']?> - <?=$aRit['time_end']?><span class="right"><i class="fa fa-angle-right"></i></span>
				</li>
				<?
			}
			?>
    	</ul>
    	<h3>Gereden ritten</h3>
    	<ul>    		
			<?
			foreach(array_slice(array_reverse($aRitten['gereden'], true), 0, 3, true) as $iRit => $aRit){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot?>mijn-ritten/?rit=<?=$iRit?>&type=gereden'">
					<i class="fa fa-calendar"></i><?=$aRit['date']?>. <?=$aRit['time_start']?> - <?=$aRit['time_end']?><span class="right"><i class="fa fa-angle-right"></i></span>
				</li>
				<?
			}
			?>
    	</ul>
    	<p><a href="<?=$sRoot?>mijn-ritten/">Bekijk al mijn ritten<i class="fa fa-angle-right" style="margin-left: 10px;"></i></a></p>
    </section>
    <section id="hulp">
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