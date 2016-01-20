<?
if(isset($_GET['rit']) && isset($_GET['type'])){
	include("templates/rit.php");
	die();
}
include("includes/header.php");
?>
<div id="content">
	<section id="ritten" class="white border_top">
		<h4>Opmerkingen</h4>
		<p class="m0">Ahmet lijkt faalangst te hebben. Zorg dat je hem voldoende mentale ondersteuning geeft zodat hij met vertrouwen de weg op kan.</p>
	</section>
	<section id="ritten" class="white border_top">
    	<h4>Aankomende ritten</h4>
    	<div class="clearfix">
	    	<ul>    		
				<?
				$i = 0;
				foreach($aRitten['aankomend'] as $iRit => $aRit){
					$i++;
					?>
					<li class="clearfix<?=($i > 3 ? ' hide' : '')?>" onclick="document.location = '<?=$sRoot.substr($sPath, 1)?>?rit=<?=$iRit?>&type=aankomend'">
						<h3><?=$aRit['date']?></h3>
						<?=$aRit['time_start']?> - <?=$aRit['time_end']?>
					</li>
					<?
				}
				?>
	    	</ul>
	    	<p>
	    		<a href="#" class="toggleRitten btn full">Toon al mijn aankomende ritten<i class="fa fa-angle-down" style="margin-left: 10px;"></i></a>
	    		<a href="#" class="toggleRitten btn full" style="display: none;">Toon minder aankomende ritten<i class="fa fa-angle-up" style="margin-left: 10px;"></i></a>
	    	</p>
    	</div>
    	<div class="clearfix" style="margin-top: 30px;">
    		<h4>Gereden ritten</h4>
	    	<ul>    		
				<?
				$i = 0;
				foreach(array_reverse($aRitten['gereden'], true) as $iRit => $aRit){
					$i++;
					?>
					<li class="clearfix<?=($i > 3 ? ' hide' : '')?>" onclick="document.location = '<?=$sRoot.substr($sPath, 1)?>?rit=<?=$iRit?>&type=gereden'">
						<h3><?=$aRit['date']?></h3>
						<?=$aRit['time_start']?> - <?=$aRit['time_end']?>
					</li>
					<?
				}
				?>
	    	</ul>
	    	<p>
	    		<a href="#" class="toggleRitten btn full">Toon al mijn gereden ritten<i class="fa fa-angle-down" style="margin-left: 10px;"></i></a>
	    		<a href="#" class="toggleRitten btn full" style="display: none;">Toon minder gereden ritten<i class="fa fa-angle-up" style="margin-left: 10px;"></i></a>
	    	</p>
    	</div>
    </section>
    <script type="text/javascript">
    	$(".toggleRitten").on('click', function(e){
    		e.preventDefault();
    		$(this).parents('p').find('.toggleRitten').stop(true, true).slideToggle(0);
    		$(this).parents('p').siblings('ul').find('li.hide').stop(true, true).slideToggle(300);
    	});
    </script>
</div>
<?
include("includes/footer.php");
?>