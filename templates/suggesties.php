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
					<i class="fa <?=$aHandeling['icon']?>"></i>
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