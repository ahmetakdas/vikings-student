<?
include("includes/header.php");
?>
<div id="content">
	<section class="white">
		<p>Voeg een handeling toe waar jij je nog onzeker over voelt zodat de instructeur hier rekening mee kan houden.</p>
	</section>
	<section id="search">
		<input type="text" name="search" placeholder="Zoek snel naar een handeling" />
		<i class="fa fa-search"></i>
	</section>
	<section id="suggesties" class="white search_suggesties" style="display: none;">
		<h2>Gevonden suggesties</h2>
		<div class="results"></div>
	</section>
	<section id="suggesties" class="white">
		<h2>Toegevoegde suggesties</h2>
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
				var oList = $("<ul />").addClass('blocks-3');
				
				$.each(aFound, function(index, aHandeling){
					var oItem = $("<li />");
					oItem.append($('<h3 />').html(aHandeling.title));
					oItem.append($('<i />').addClass('fa ' + aHandeling.icon));
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