<?
include("includes/header.php");
?>
<div id="content">
	<section id="progress" class="white text-centered">
		<div class="progress_diagram small">
			<?=$aUser['progress']?>
		</div>
	</section>
	<section id="search">
		<input type="text" name="search" placeholder="Zoek snel naar een handeling" />
		<i class="fa fa-search"></i>
	</section>
	<section id="handelingen">
		<ul>
			<?
			foreach($aHandelingen as $sKey => $aHandeling){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot.substr($sKey, 1)?>'">
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