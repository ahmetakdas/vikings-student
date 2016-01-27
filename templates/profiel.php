<?
include("includes/header.php");
?>
<div id="content">
	<section class="white text-centered border_top" id="profile_image">
		<img src="<?=$sRoot?>images/ahmet.jpg" alt="<?=$aUser['name']?>" class="profile" />
		<a href="#" class="shortcut_link"><i class="fa fa-edit"></i> Wijzigen</a>
	</section>
	<section class="grey border_top">
		<h3><?=$aUser['name']?></h3>
		<ul class="iconed">
			<li><h4>Woon adres</h4><?=$aUser['address']?><br /><?=$aUser['zipcode']?><br /><?=$aUser['city']?></li>
			<li><h4>Ophaal adres</h4><?=$aUser['address']?><br /><?=$aUser['zipcode']?><br /><?=$aUser['city']?></li>
			<li><h4>Contactgegevens</h4><?=$aUser['phone']?><br /><?=$aUser['email']?></li>
			<li><h4>Geboortedatum</h4>29-05-1992</li>
		</ul>
	</section>
</div>
<?
include("includes/footer.php");
?>