<?
// Alle paginas
$aPages = [
	'/'									=> [
		'title'							=> 'Dashboard',
		'template'						=> 'dashboard'
	],
	'/mijn-profiel/'					=> [
		'title'							=> 'Mijn profiel',
		'template'						=> 'profiel',
		'back'							=> $sRoot
	],
	'/mijn-ritten/'						=> [
		'title'							=> 'Mijn ritten',
		'template'						=> 'ritten',
		'back'							=> $sRoot
	],
	'/mijn-suggesties/'					=> [
		'title'							=> 'Mijn suggesties',
		'template'						=> 'suggesties',
		'back'							=> $sRoot
	],
	'/mijn-handelingen/'				=> [
		'title'							=> 'Mijn handelingen',
		'template'						=> 'handelingen',
		'back'							=> $sRoot
	],
	'/mijn-handelingen/snelweg/'		=> [
		'title'							=> 'Snelweg',
		'template'						=> 'handeling',
		'icon'							=> 'fa-info-circle',
		'progress'						=> 67,
		'back'							=> $sRoot.'mijn-handelingen/'
	],
	'/mijn-handelingen/rotonde/'		=> [
		'title'							=> 'Rotonde',
		'template'						=> 'handeling',
		'icon'							=> 'fa-info-circle',
		'progress'						=> 77,
		'back'							=> $sRoot.'mijn-handelingen/'
	],
	'/mijn-handelingen/schakelen/'		=> [
		'title'							=> 'Schakelen',
		'template'						=> 'handeling',
		'icon'							=> 'fa-info-circle',
		'progress'						=> 52,
		'back'							=> $sRoot.'mijn-handelingen/'
	],
	'/mijn-handelingen/kijkgedrag/'		=> [
		'title'							=> 'Kijkgedrag',
		'template'						=> 'handeling',
		'icon'							=> 'fa-info-circle',
		'progress'						=> 84,
		'back'							=> $sRoot.'mijn-handelingen/'
	],
	'/mijn-handelingen/anticiperen/'	=> [
		'title'							=> 'Anticiperen',
		'template'						=> 'handeling',
		'icon'							=> 'fa-info-circle',
		'progress'						=> 90,
		'back'							=> $sRoot.'mijn-handelingen/'
	],
	'/mijn-handelingen/parkeren/'		=> [
		'title'							=> 'Parkeren',
		'template'						=> 'handeling',
		'icon'							=> 'fa-info-circle',
		'progress'						=> 78,
		'back'							=> $sRoot.'mijn-handelingen/'
	],
	'/think-blue/'					=> [
		'title'							=> 'Think Blue',
		'template'						=> 'think-blue',
		'back'							=> $sRoot
	],
	'error404'							=> [
		'title'							=> 'Pagina niet gevonden',
		'template'						=> 'error404'
	]
];

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

$aHandelingen = [];
foreach($aPages as $sKey => $aPagina){
	if($aPagina['template'] == 'handeling'){
		$aHandelingen[$sKey] = $aPagina;
	}
}
?>