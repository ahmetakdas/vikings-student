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
	<script type="text/javascript">
		var aHandelingen = $("#handelingen ul li");

		$('input[name="search"]').on('keyup', function(e){
			var sValue = $(this).val();
			var bFound = false;
			var bMatch = false;

			$("#handelingen p.no_results").remove();

			$.each(aHandelingen, function(index, aHandeling){
				var oHandeling = $(aHandeling);
				if(oHandeling.find('h3').html().toLowerCase().indexOf(sValue.toLowerCase()) != -1){
					bMatch = true;
					bFound = true;
				}
				else {
					bMatch = false;
				}

				if(bMatch){
					oHandeling.fadeIn(300);
				}
				else{
					oHandeling.fadeOut(100);
				}
			});

			if(!bFound){
				$("#handelingen").append($("<p />").addClass('no_results').html('Geen resultaten gevonden.'));
			}

			if (e.keyCode == 13) {
				$(this).blur();
			}
		});
	</script>
</div>
<?
include("includes/footer.php");
?>