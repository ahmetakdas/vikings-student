<?
include("includes/header.php");
?>
<div id="content">
	<section class="text-centered border_top border_light">
    	<img src="<?=$sRoot?>images/progress.png" alt="Progress" />
    </section>
    <section id="handelingen" class="grey border_top">
		<h4>Voortgang<i class="fa fa-search" id="toggleSearch"></i></h4>
		<input type="text" name="search" placeholder="Zoek snel naar een handeling" style="display: none;" />
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
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot.substr($sKey, 1)?>'">
					<a href="<?=$sRoot.substr($sKey, 1)?>" class="icon-holder">
						<img src="<?=$sRoot?>images/icons/<?=$aHandeling['icon']?>.png" />
					</a>
					<div class="progress_bar clearfix">
						<h4><?=$aHandeling['title']?></h4>
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
	<script type="text/javascript">

		$("#toggleSearch").on('click', function(e){
			$(this).fadeOut(300);
			$('input[name="search"]').fadeIn(300);
		});

		var aHandelingen = $("#handelingen ul li");

		$('input[name="search"]').on('keyup', function(e){
			var sValue = $(this).val();
			var bFound = false;
			var bMatch = false;

			$("#handelingen p.no_results").remove();

			$.each(aHandelingen, function(index, aHandeling){
				var oHandeling = $(aHandeling);
				if(oHandeling.find('h4').html().toLowerCase().indexOf(sValue.toLowerCase()) != -1){
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