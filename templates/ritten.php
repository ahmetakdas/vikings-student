<?
if(isset($_GET['rit']) && isset($_GET['type'])){
	include("templates/rit.php");
	die();
}
include("includes/header.php");
?>
<div id="content">
	<section id="ritten" class="white">
    	<h2>Mijn ritten</h2>
    	<p>Hier staan jouw ritten.</p>
    	<h3>Aankomende rit</h3>
    	<div class="clearfix">
	    	<ul>    		
				<?
				$i = 0;
				foreach($aRitten['aankomend'] as $iRit => $aRit){
					$i++;
					?>
					<li class="clearfix<?=($i > 3 ? ' hide' : '')?>" onclick="document.location = '<?=$sRoot.substr($sPath, 1)?>?rit=<?=$iRit?>&type=aankomend'">
						<i class="fa fa-calendar"></i><?=$aRit['date']?>. <?=$aRit['time_start']?> - <?=$aRit['time_end']?><span class="right"><i class="fa fa-angle-right"></i></span>
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
    	<div class="clearfix">
    		<h3>Gereden ritten</h3>
	    	<ul>    		
				<?
				$i = 0;
				foreach(array_reverse($aRitten['gereden'], true) as $iRit => $aRit){
					$i++;
					?>
					<li class="clearfix<?=($i > 3 ? ' hide' : '')?>" onclick="document.location = '<?=$sRoot.substr($sPath, 1)?>?rit=<?=$iRit?>&type=gereden'">
						<i class="fa fa-calendar"></i><?=$aRit['date']?>. <?=$aRit['time_start']?> - <?=$aRit['time_end']?><span class="right"><i class="fa fa-angle-right"></i></span>
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