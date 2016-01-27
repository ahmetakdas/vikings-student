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
		<p style="margin: 0;"><?=$aRit['date']?>. <?=$aRit['time_start']?> - <?=$aRit['time_end']?></p>
	</section>
	<?
	if($sType == 'aankomend'){
		?>
		<section id="suggesties" class="grey border_top border_light">
			<h4>Handelingen die aan bod komen</h4>
			<ul class="blocks-4">
				<?
				foreach($aHandelingen as $sKey => $aHandeling){
					if(!$aHandeling['suggestie']){
						continue;
					}
					?>
					<li>
						<a href="<?=$sRoot.substr($sKey, 1)?>"><img src="<?=$sRoot?>images/icons/<?=$aHandeling['icon']?>.png" /></a>
					</li>
					<?
				}
				?>
			</ul>
			<p><a class="btn full clearfix" href="<?=$sRoot?>mijn-suggesties/?rit=<?=$_GET['rit']?>&type=<?=$_GET['type']?>">Bekijk mijn suggesties<span class="right"><i class="fa fa-angle-right"></i></span></a></p>
		</section>
		<section class="white border_top" id="feedback">
			<h4>Feedback van laatste les</h4>
			<ul>
				<?
				$aAllowedHandelingen = ['Snelweg', 'Rotonde', 'Schakelen'];
				foreach($aHandelingen as $sKey => $aHandeling){
					if(!in_array($aHandeling['title'], $aAllowedHandelingen)){
						continue;
					}
					?>
					<li>
						<a class="icon-holder">
							<img src="<?=$sRoot?>images/icons/<?=$aHandeling['icon']?>.png" />
						</a>
						<?=$aHandeling['feedback']?>
						<div>06-01-2016</div>
					</li>
					<?
				}
				?>
			</ul>
		</section>
		<?
	}
	else {
		?>
		<section class="no_padding" id="map"><img src="<?=$sRoot?>images/map2.jpg" alt="MAP" width="100%" /></section>
		<section class="white border_top" id="feedback">
			<h4>Feedback</h4>
			<ul>
				<?
				$aAllowedHandelingen = ['Snelweg', 'Rotonde', 'Schakelen'];
				foreach($aHandelingen as $sKey => $aHandeling){
					if(!in_array($aHandeling['title'], $aAllowedHandelingen)){
						continue;
					}
					?>
					<li>
						<a class="icon-holder">
							<img src="<?=$sRoot?>images/icons/<?=$aHandeling['icon']?>.png" />
						</a>
						<?=$aHandeling['feedback']?>
						<div>06-12-2015</div>
					</li>
					<?
				}
				?>
			</ul>
		</section>
	    <section id="handelingen" class="grey border_top">
	    	<h4>Handelingen</h4>
			<ul>
				<li class="clearfix" id="thinkBlue">
					<a class="icon-holder">
						<img src="<?=$sRoot?>images/icons/tb.png" />
					</a>
					<div class="progress_bar">
						<h4>Think Blue. Score</h4>
					</div>
				</li>
				<?
				foreach($aHandelingen as $sKey => $aHandeling){
					if(!isset($aHandeling['improvement'])){
						continue;
					}
					?>
					<li class="clearfix" onclick="document.location = '<?=$sRoot.substr($sKey, 1)?>'">
						<a href="<?=$sRoot.substr($sKey, 1)?>" class="icon-holder">
							<img src="<?=$sRoot?>images/icons/<?=$aHandeling['icon']?>.png" />
						</a>
						<div class="progress_bar improvement_bar">
							<h4><?=$aHandeling['title']?> <span>+<?=$aHandeling['improvement']?>%</span></h4>
							<div class="progress-bar">
								<div class="progress-width" style="width: <?=$aHandeling['progress']?>%"></div>
							</div>
							<div class="progress-amount"><?=$aHandeling['progress']?>%</div>
						</div>
					</li>
					<?
				}
				?>
			</ul>
		</section>
		<?
	}
	?>
</div>
<?
include("includes/footer.php");
?>