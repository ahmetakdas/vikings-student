<?
include("includes/header.php");
?>
<div id="content">
    <section class="text-centered white border_top border_light">
    	<a href="<?=$sRoot?>mijn-handelingen/"><img src="<?=$sRoot?>images/progress.png" alt="Progress" /></a>
    </section>
    <section id="ritten" class="white border_top">
    	<h4>Aankomende ritten</h4>
    	<ul>    		
			<?
			foreach(array_slice($aRitten['aankomend'], 0, 1, true) as $iRit => $aRit){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot?>mijn-ritten/?rit=<?=$iRit?>&type=aankomend'">
					<h3><?=$aRit['date']?></h3>
					<?=$aRit['time_start']?> - <?=$aRit['time_end']?>
				</li>
				<?
			}
			?>
    	</ul>
    	<h4 style="margin-top: 30px;">Gereden ritten</h4>
    	<ul>    		
			<?
			foreach(array_slice(array_reverse($aRitten['gereden'], true), 0, 3, true) as $iRit => $aRit){
				?>
				<li class="clearfix" onclick="document.location = '<?=$sRoot?>mijn-ritten/?rit=<?=$iRit?>&type=gereden'">
					<h3><?=$aRit['date']?></h3>
					<?=$aRit['time_start']?> - <?=$aRit['time_end']?>
				</li>
				<?
			}
			?>
    	</ul>
    	<p><a href="<?=$sRoot?>mijn-ritten/" class="btn full">Bekijk mijn ritten</a></p>
    </section>
    <section id="hulp" class="grey border_top border_light">
    	<ul>
    		<li><a href="tel:0653538173" class="btn">Bel mijn instructeur</a></li>
    	</ul>
    </section>
</div>
<?
include("includes/footer.php");
?>