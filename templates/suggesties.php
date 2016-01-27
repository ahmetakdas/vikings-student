<?
if(isset($_GET['rit']) && isset($_GET['type'])){
	$aPage['back'] = $sRoot.'mijn-ritten/?rit='.$_GET['rit'].'&type='.$_GET['type'];
}

include("includes/header.php");
?>
<div id="content">
	<section class="white border_top" id="search">
		<p>Voeg een handeling toe waar jij je nog onzeker over voelt zodat de instructeur hier rekening mee kan houden.</p>
		<h4 style="margin-top: 15px;">Suggesties toevoegen</h4>
		<div style="position: relative;">
			<input type="text" name="search" placeholder="Zoek snel naar een handeling" />
			<i class="fa fa-search" style="left: 12px; top: 13px;"></i>
		</div>
	</section>
	<section id="suggesties" class="grey border_top search_suggesties" style="display: none;">
		<h4>Gevonden suggesties</h4>
		<div class="results"></div>
	</section>
	<section id="suggesties" class="grey border_top">
		<h4>Mijn suggesties</h4>
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
	</section>
	<script type="text/javascript">
		var aHandelingen = <?=json_encode($aHandelingen)?>;

		$('input[name="search"]').on('keyup', function(e){
			var sValue = $(this).val();
			var aFound = [];

			$.each(aHandelingen, function(index, aHandeling){
				if(aHandeling.title.toLowerCase().indexOf(sValue.toLowerCase()) != -1 && sValue.length){
					var bMatch = true;
				}
				else {
					var bMatch = false;
				}

				if(bMatch){
					aFound.push(aHandeling);
				}
			});

			$(".results").html('');
			$(".search_suggesties").slideDown(300);

			if(aFound.length){
				var oList = $("<ul />").addClass('blocks-4');
				
				$.each(aFound, function(index, aHandeling){
					var oItem = $("<li />");
					var oLink = $('<a />');
					oItem.append(oLink);
					oLink.append($('<img />').attr('src', '<?=$sRoot?>images/icons/'+aHandeling['icon']+'.png'));
					oItem.appendTo(oList);
				});

				oList.appendTo($(".results"));
			}
			else {
				$(".results").html('<p>Geen resultaten gevonden.</p>');
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