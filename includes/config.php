<?
// Alle paginas
$aPages = array(
	'/'					=> array(
		'title'			=> 'Home',
		'template'		=> 'voorpagina',
		'description'	=> '',
		'menu'			=> true,
		'footer'		=> true,
		'sitemap'		=> true
	),
	'error404'			=> array(
		'title'			=> 'Pagina niet gevonden',
		'template'		=> 'error404',
		'description'	=> '',
		'menu'			=> false,
		'footer'		=> false,
		'sitemap'		=> false
	)
);

// Huidige pagina
$sPath = str_replace($sRoot, '/', $_SERVER['REQUEST_URI']);

if(isset($aPages[$sPath])){
	$aPage = $aPages[$sPath];
	$aPage['path'] = $sPath;
}
else {
	header("HTTP/1.0 404 Not Found");
	$aPage = $aPages['error404'];	
}

// Less css
require 'Less.php/Cache.php';
$sCssPath = 'css/';
Less_Cache::$cache_dir = $sCssPath;
$aFiles = array();

foreach (glob("less/*.css") as $sFileName)
{
    $aFiles[$sFileName] = '/css/';
}

$sCssFileName = Less_Cache::Get($aFiles);

foreach($aPages as $sLink => $aItem){
	if(isset($aItem['footer']) && $aItem['footer'] == true){
		$aFooter[$sLink] = $aItem;	
	}
}
?>