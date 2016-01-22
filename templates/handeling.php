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
	<section class="white">
		<h2><?=$aPage['title']?></h2>
		<?=$aPage['content']?>
	</section>
	<section class="grey border_top" id="feedback">
		<h4>Feedback</h4>
		<ul>
			<li class="white">
				<?=$aPage['feedback']?>
				<div>06-01-2015</div>
			</li>
			<?
			for($i = 0; $i < 3; $i++){
				?>
				<li class="hide white" style="display: none;">
					<?=$aPage['feedback']?>
					<div>06-01-2015</div>
				</li>
				<?
			}
			?>
		</ul>
		<div class="clearfix" style="margin-top: 10px;"></div>
		<a href="#" class="toggleAllFeedback btn full">Toon alle feedback</a>
		<a href="#" class="toggleAllFeedback btn full" style="display: none;">Toon minder feedback</a>
	</section>
	<section class="white border_top">
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