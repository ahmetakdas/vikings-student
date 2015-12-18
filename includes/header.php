<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="theme-color" content="<?=(isset($aPage['theme-color']) ? $aPage['theme-color'] : '#00b1eb')?>">
<meta name="msapplication-navbutton-color" content="<?=(isset($aPage['theme-color']) ? $aPage['theme-color'] : '#00b1eb')?>">
<meta name="apple-mobile-web-app-status-bar-style" content="<?=(isset($aPage['theme-color']) ? $aPage['theme-color'] : '#00b1eb')?>">

<title><?=$aPage['title']?> - <?=$aProperties['title']?></title>

<link rel="shortcut icon" type="image/png" href="<?=$sRoot?>favicon.png">
<link rel="stylesheet" type="text/css" href="<?=$sRoot?>css/<?=$sCssFileName?>" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="<?=$sRoot?>js/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="<?=$sRoot?>js/hammer.js"></script>   
<script src="<?=$sRoot?>js/mmenu.js"></script>
<script src="<?=$sRoot?>js/dragopen.js"></script>
<script src="<?=$sRoot?>js/equalHeights.js"></script>
<script src="<?=$sRoot?>js/init.js"></script>
</head>
<body>
<div id="container">
	<nav id="menu">
		<ul>
			<li><a href="<?=$sRoot?>">Dashboard</a></li>
			<li><a href="<?=$sRoot?>mijn-profiel/">Mijn profiel</a></li>
			<li><a href="<?=$sRoot?>mijn-ritten/">Mijn ritten</a></li>
			<li><a href="<?=$sRoot?>mijn-handelingen/">Mijn handelingen</a>
			   <ul>
			   		<?
			   		foreach($aHandelingen as $sKey => $aHandeling){
			   			?>
			   			<li><a href="<?=$sRoot.substr($sKey, 1)?>"><i class="fa <?=$aHandeling['icon']?>"></i><?=$aHandeling['title']?></a></li>
			   			<?
			   		}
			   		?>
			   	</ul>
			</li>
			<li><a href="<?=$sRoot?>mijn-suggesties/">Mijn suggesties</a>
			<li><a href="<?=$sRoot?>think-blue/">Think Blue</a></li>
			<li><a href="<?=$sRoot?>uitloggen/">Uitloggen</a></li>
		</ul>
	</nav>
	<div id="header">
		<div id="bar">
			<div class="inner">
				<?
				if(isset($aPage['back'])){
					?>
					<a href="<?=$aPage['back']?>" class="bar_btn left"><i class="fa fa-chevron-left"></i></a>
					<?
				}
				?>
				<h1><?=$aPage['title']?></h1>
				<a href="#menu" class="bar_btn right"><i class="fa fa-reorder"></i></a>
			</div>
		</div>
    </div>