<?
include("includes/header.php");
?>
<div id="content">
	<section id="handelingen" class="inner">
		<ul>
			<?
			foreach($aHandelingen as $sKey => $aHandeling){
				?>
				<li class="clearfix">
					<a href="<?=$sRoot.substr($sKey, 1)?>" class="icon-holder">
						<i class="fa <?=$aHandeling['icon']?>"></i>
					</a>
					<div class="progress_bar">
						<h3><?=$aHandeling['title']?></h3>
						<div class="progress-bar">
							<div class="progress-width" style="width: <?=$aHandeling['progress']?>%"><?=$aHandeling['progress']?>%</div>
						</div>
					</div>
				</li>
				<?
			}
			?>
		</ul>
	</section>
</div>
<?
include("includes/footer.php");
?>