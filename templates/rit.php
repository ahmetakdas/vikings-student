<?
$iRit			= $_GET['rit'];
$sType			= $_GET['type'];
$aRit			= $aRitten[$sType][$iRit];
$aPage['title'] = ($sType == 'aankomend' ? 'Aankomende rit' : 'Gereden rit');
$aPage['back'] 	= $sRoot.substr($sPath, 1);
include("includes/header.php");
?>
<div id="content">
	<section class="white detail text-centered border_top">
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
		<section class="no_padding" id="map"><img src="<?=$sRoot?>images/map.jpg" alt="MAP" width="100%" /></section>
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
	    <section id="handelingen" class="white">
	    	<h2 style="margin-bottom: 20px;">Mijn handelingen</h2>
			<ul>
				<?
				foreach($aHandelingen as $sKey => $aHandeling){
					if(!isset($aHandeling['improvement'])){
						continue;
					}
					?>
					<li class="clearfix" onclick="document.location = '<?=$sRoot.substr($sKey, 1)?>'">
						<a href="<?=$sRoot.substr($sKey, 1)?>" class="icon-holder">
							<i class="fa <?=$aHandeling['icon']?>"></i>
						</a>
						<div class="progress_bar improvement_bar">
							<h3><?=$aHandeling['title']?> +<?=$aHandeling['improvement']?>%</h3>
							<div class="progress-bar">
								<div class="progress-width" style="width: <?=$aHandeling['progress']?>%;"><?=$aHandeling['progress']?>%</div>
								<div class="progress-improvement" style="left: <?=$aHandeling['progress']?>%; width: <?=$aHandeling['improvement']?>%;">&nbsp;</div>
							</div>
						</div>
					</li>
					<?
				}
				?>
			</ul>
		</section>
		<section class="grey">
			<h2>Feedback van instructeur</h2>
			<h3><?=$aRit['date']?> 2015</h3>
			<p>Vandaag een goede start gemaakt. Let tijdens het invoegen vooral op de snelheid.</p>
			<p>Je kijkgedrag kan nog veel verbeterd worden. Kijk goed om je heen naar wat het verkeer doet, ook al rij je constant op dezelfde strook.</p>
		</section>
		<?
	}
	?>
</div>
<?
include("includes/footer.php");
?>