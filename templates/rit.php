<?
$iRit			= $_GET['rit'];
$sType			= $_GET['type'];
$aRit			= $aRitten[$sType][$iRit];
$aPage['title'] = ($sType == 'aankomend' ? 'Aankomende rit' : 'Gereden rit');
$aPage['back'] 	= $sRoot.substr($sPath, 1);
include("includes/header.php");
?>
<div id="content">
	<section class="white text-centered no_padding_top">
		<p style="margin: 0;"><i class="fa fa-calendar" style="margin-right: 10px;"></i><?=$aRit['date']?>. <?=$aRit['time_start']?> - <?=$aRit['time_end']?></p>
	</section>
	<?
	if($sType == 'aankomend'){
		?>
		<section id="suggesties" class="grey">
			<h2>Handelingen die aan bod komen</h2>
			<ul class="blocks-3">
				<?
				foreach($aHandelingen as $sKey => $aHandeling){
					if(!$aHandeling['suggestie']){
						continue;
					}
					?>
					<li>
						<h3><?=$aHandeling['title']?></h3>
						<i class="fa <?=$aHandeling['icon']?>"></i>
					</li>
					<?
				}
				?>
			</ul>
			<p><a class="btn full clearfix" href="<?=$sRoot?>mijn-suggesties/">Bekijk mijn suggesties<span class="right"><i class="fa fa-angle-right"></i></span></a></p>
		</section>
		<section class="white">
			<h2>Feedback van laatste les</h2>
			<h3><?=end($aRitten['gereden'])['date']?> 2015</h3>
			<p>Vandaag een goede start gemaakt. Let tijdens het invoegen vooral op de snelheid.</p>
			<p>Je kijkgedrag kan nog veel verbeterd worden. Kijk goed om je heen naar wat het verkeer doet, ook al rij je constant op dezelfde strook.</p>
		</section>
		<?
	}
	else {
		?>
		<section class="no_padding" id="map"></section>
		<section class="text-centered units-row grey">
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
		<section class="white">
			<h2>Feedback van instructeur</h2>
			<h3><?=$aRit['date']?> 2015</h3>
			<p>Vandaag een goede start gemaakt. Let tijdens het invoegen vooral op de snelheid.</p>
			<p>Je kijkgedrag kan nog veel verbeterd worden. Kijk goed om je heen naar wat het verkeer doet, ook al rij je constant op dezelfde strook.</p>
		</section>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc8awh8d8vE4EvYpe5cEbiqTuczHFhDWk&callback=initMap" async defer></script>
    	<script>
    		var map;
			function initMap() {
			  map = new google.maps.Map(document.getElementById('map'), {
			    center: {lat: -34.397, lng: 150.644},
			    zoom: 8
			  });
			}
    	</script>
		<?
	}
	?>
</div>
<?
include("includes/footer.php");
?>