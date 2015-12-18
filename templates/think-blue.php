<?
include("includes/header.php");
?>
<div id="content">
	<section class="white">
		<div class="progress_diagram big">
			<?=$aUser['think-blue']?>
		</div>
	</section>
	<section id="think-blue">
		<ul>
			<li>
				<a href="#"><i class="fa fa-info-circle"></i>Think Blue<span><i class="fa fa-angle-down"></i></span></a>
				<div class="clearfix">52</div>
			</li>
			<li>
				<a href="#"><i class="fa fa-info-circle"></i>Verbruik<span><i class="fa fa-angle-down"></i></span></a>
				<div class="clearfix">100 / 7</div>
			</li>
			<li>
				<a href="#"><i class="fa fa-info-circle"></i>Gereden kilometers<span><i class="fa fa-angle-down"></i></span></a>
				<div class="clearfix">123 km.</div>
			</li>
			<li>
				<a href="#"><i class="fa fa-info-circle"></i>Tijd onderweg<span><i class="fa fa-angle-down"></i></span></a>
				<div class="clearfix">14 uur en 50 minuten.</div>
			</li>
			<li>
				<a href="#"><i class="fa fa-info-circle"></i>Gemiddelde snelheid<span><i class="fa fa-angle-down"></i></span></a>
				<div class="clearfix">34 km / u</div>
			</li>
		</ul>
	</section>
	<script type="text/javascript">
		$("#think-blue ul li > a").on('click', function(e){
			$(this).find('span i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
			$(this).toggleClass('active');
			$(this).siblings('div').stop(true, true).slideToggle(300);
		});
	</script>
</div>
<?
include("includes/footer.php");
?>