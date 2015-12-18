<?
include("includes/header.php");
?>
<div id="content">
	<section class="white no_padding_top">
		<div class="units-row">
			<div id="progress_bar">
				<i class="fa <?=$aPage['icon']?>"></i>
				<div class="progress-bar">
					<div class="progress-width" style="width: <?=$aPage['progress']?>%"><?=$aPage['progress']?>%</div>
				</div>
			</div>
		</div>
	</section>
	<section class="no_padding">
		<img src="<?=$aPage['image']?>" alt="<?=$aPage['title']?>" width="100%" />
	</section>
	<section class="white">
		<h2><?=$aPage['title']?></h2>
		<?=$aPage['content']?>
	</section>
	<section class="grey">
		<h2>Feedback instructeur</h2>
		<h3>6 december 2015</h3>
		<?=$aPage['feedback']?>
		<div style="display: none;" id="allFeedback">
			<?
			for($i = 0; $i < 3; $i++){
				?>
				<hr />
				<h3>6 december 2015</h3>
				<?=$aPage['feedback']?>
				<?
			}
			?>
		</div>
		<p>
			<a href="#" class="toggleAllFeedback"><i class="fa fa-chevron-down" style="margin-right: 10px;"></i>Toon alle feedback</a>
			<a href="#" class="toggleAllFeedback" style="display: none;"><i class="fa fa-chevron-up" style="margin-right: 10px;"></i>Toon minder feedback</a>
		</p>
	</section>
	<section class="white">
		<h2 style="margin: 0;">Instructie video</h2>
	</section>
	<section class="no_padding">
		<div class="image_holder">
			<img src="<?=$aPage['video']?>" alt="<?=$aPage['title']?>" width="100%" />
			<div class="icon_holder"><i class="fa fa-play"></i></div>
		</div>
	</section>
	<section class="grey">
		<h2>Tips</h2>
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
			$("#allFeedback").stop(true, true).slideToggle(300);
		});
	</script>
</div>
<?
include("includes/footer.php");
?>