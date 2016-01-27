<?
include("includes/header.php");
?>
<div id="content">
	<section class="white border_top">
		<div class="units-row">
			<div id="progress_bar" class="clearfix">
				<a class="icon-holder">
					<img src="<?=$sRoot?>images/icons/<?=$aPage['icon']?>.png" />
				</a>
				<div class="progress-bar">
					<div class="progress-width" style="width: <?=$aPage['progress']?>%"></div>
				</div>
				<div class="progress-amount"><?=$aPage['progress']?>%</div>
			</div>
		</div>
	</section>
	<section class="no_padding">
		<div class="image_holder">
			<img src="<?=$aPage['video']?>" alt="<?=$aPage['title']?>" width="100%" />
			<div class="icon_holder"><i class="fa fa-play"></i></div>
		</div>
	</section>
	<section class="grey">
		<h4><?=$aPage['title']?></h4>
		<?=$aPage['content']?>
	</section>
	<section class="white border_top" id="feedback">
		<h4>Feedback</h4>
		<ul>
			<li>
				<a class="icon-holder">
					<img src="<?=$sRoot?>images/icons/<?=$aPage['icon']?>.png" />
				</a>
				<?=$aPage['feedback']?>
				<div>06-01-2015</div>
			</li>
			<?
			$aAllowedHandelingen = ['Snelweg', 'Rotonde', 'Schakelen'];
			foreach($aHandelingen as $sKey => $aHandeling){
				if(!in_array($aHandeling['title'], $aAllowedHandelingen) || $aHandeling['title'] == $aPage['title']){
					continue;
				}
				?>
				<li class="hide" style="display: none;">
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
		<div class="clearfix" style="margin-top: 10px;"></div>
		<a href="#" class="toggleAllFeedback btn full">Toon alle feedback<i class="fa fa-angle-down" style="margin-left: 10px;"></i></a>
		<a href="#" class="toggleAllFeedback btn full" style="display: none;">Toon minder feedback<i class="fa fa-angle-up" style="margin-left: 10px;"></i></a>
	</section>
	<section class="grey border_top">
		<h4>Tips</h4>
		<ul id="tips">
			<?
			foreach($aPage['tips'] as $sTip){
				echo "<li><i class=\"fa fa-check\"></i>$sTip</li>";
			}
			?>
		</ul>
	</section>
	<script type="text/javascript">
		$(".toggleAllFeedback").on('click', function(e){
			e.preventDefault();
			$(".toggleAllFeedback").stop(true, true).slideToggle(300);
			$("#feedback .hide").stop(true, true).slideToggle(300);
		});
	</script>
</div>
<?
include("includes/footer.php");
?>