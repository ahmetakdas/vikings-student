<?
include("includes/header.php");
?>
<div id="content">
	<section class="white text-centered" id="profile_image">
		<img src="<?=$sRoot?>images/ahmet.jpg" alt="<?=$aUser['name']?>" class="profile" />
		<a href="#" class="shortcut_link"><i class="fa fa-edit"></i> Profiel wijzigen</a>
	</section>
	<section class="grey text-centered">
		<h1><?=$aUser['name']?></h1>
		<ul class="iconed">
			<li><i class="fa fa-home"></i><?=$aUser['address']?><br /><?=$aUser['zipcode']?><br /><?=$aUser['city']?></li>
			<li><i class="fa fa-car"></i><?=$aUser['address']?><br /><?=$aUser['zipcode']?><br /><?=$aUser['city']?></li>
			<li><i class="fa fa-phone"></i><?=$aUser['phone']?></li>
			<li><i class="fa fa-envelope"></i><?=$aUser['email']?></li>
		</ul>
	</section>
</div>
<?
include("includes/footer.php");
?>