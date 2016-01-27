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
		'title'							=> 'Mijn voortgang',
		'template'						=> 'handelingen',
		'back'							=> $sRoot
	],
	'/mijn-handelingen/snelweg/'		=> [
		'title'							=> 'Snelweg',
		'template'						=> 'handeling',
		'icon'							=> 'snelweg',
		'progress'						=> 67,
		'improvement'					=> 3,
		'suggestie'						=> true,
		'back'							=> $sRoot.'mijn-handelingen/',
		'image'							=> $sRoot.'images/handelingen/snelweg.jpg',
		'video'							=> $sRoot.'images/handelingen/snelweg.jpg',
		'content'						=> '<p>Een autosnelweg, snelweg of autobaan is een conflictvrije weg bestemd voor snel gemotoriseerd verkeer
		 (zoals auto\'s, motoren, bussen en vrachtwagens). Conflictvrij wil zeggen dat kruisingen ongelijkvloers zijn en dat er een middenberm is tussen de 
		 twee rijrichtingen.</p><p>De maximale snelheid in Nederland kan verschillen tussen de 80 en 130 km/u, houd de borden dus goed in de gaten!</p>',
		 'feedback'						=> '<p>Vandaag een goede start gemaakt. Let tijdens het in-voegen vooral op de snelheid.</p>',
		'tips'							=> [
		 									'Houd ruimte met invoegen en voorkom chaos op de weg.',
		 									'Kijk eerst goed voordat je je richtingaanwijzer aanzet.',
		 									'Zorg ervoor dat je op snelheid bent wanneer je gaat invoegen.'
		 								]
	],
	'/mijn-handelingen/rotonde/'		=> [
		'title'							=> 'Rotonde',
		'template'						=> 'handeling',
		'icon'							=> 'rotonde',
		'progress'						=> 77,
		'improvement'					=> 4,
		'suggestie'						=> true,
		'back'							=> $sRoot.'mijn-handelingen/',
		'image'							=> $sRoot.'images/handelingen/rotonde.jpg',
		'video'							=> $sRoot.'images/handelingen/snelweg.jpg',
		'content'						=> '<p>Op een rotonde wordt een combinatie gemaakt van invoegen en afslaan op een gemeenschappelijke weg. Het invoegen gaat veiliger en omdat de rotonde rond loopt, kun je toch afslaan naar de weg waarop je verder wilt gaan rijden.</p>',
		'feedback'						=> '<p>Zorg dat je op tijd naar het verkeer kijkt wat al op de rotonde zit, zo kan je beter inschatten wanneer jij kan deelnemen aan het verkeer op de rotonde.</p>',
		'tips'							=> [
		 									'Houd ruimte met invoegen en voorkom chaos op de weg.',
		 									'Kijk eerst goed voordat je je richtingaanwijzer aanzet.',
		 									'Zorg ervoor dat je op snelheid bent wanneer je gaat invoegen.'
		 								]
	],
	'/mijn-handelingen/schakelen/'		=> [
		'title'							=> 'Schakelen',
		'template'						=> 'handeling',
		'icon'							=> 'schakelen',
		'progress'						=> 52,
		'improvement'					=> 8,
		'suggestie'						=> true,
		'back'							=> $sRoot.'mijn-handelingen/',
		'image'							=> $sRoot.'images/handelingen/schakelen.jpg',
		'video'							=> $sRoot.'images/handelingen/schakelen.jpg',
		'content'						=> '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>',
		'feedback'						=> '<p>Kijk goed naar je dashboard en probeer het schakeladvies goed op te volgen.</p>',
		'tips'							=> [
		 									'Houd ruimte met invoegen en voorkom chaos op de weg.',
		 									'Kijk eerst goed voordat je je richtingaanwijzer aanzet.',
		 									'Zorg ervoor dat je op snelheid bent wanneer je gaat invoegen.'
		 								]
	],
	'/mijn-handelingen/kijkgedrag/'		=> [
		'title'							=> 'Kijkgedrag',
		'template'						=> 'handeling',
		'icon'							=> 'kijkgedrag',
		'progress'						=> 84,
		'improvement'					=> 1,
		'suggestie'						=> false,
		'back'							=> $sRoot.'mijn-handelingen/',
		'image'							=> $sRoot.'images/handelingen/kijkgedrag.jpg',
		'video'							=> $sRoot.'images/handelingen/kijkgedrag.jpg',
		'content'						=> '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>',
		'feedback'						=> '<p>Je kijkgedrag kan nog veel verbeterd worden. Kijk goed om je heen naar wat het verkeer doet, ook al rij je constant op dezelfde strook.</p>',
		'tips'							=> [
		 									'Houd ruimte met invoegen en voorkom chaos op de weg.',
		 									'Kijk eerst goed voordat je je richtingaanwijzer aanzet.',
		 									'Zorg ervoor dat je op snelheid bent wanneer je gaat invoegen.'
		 								]
	],
	'/mijn-handelingen/anticiperen/'	=> [
		'title'							=> 'Anticiperen',
		'template'						=> 'handeling',
		'icon'							=> 'anticiperen',
		'progress'						=> 90,
		'suggestie'						=> false,
		'back'							=> $sRoot.'mijn-handelingen/',
		'image'							=> $sRoot.'images/handelingen/anticiperen.jpg',
		'video'							=> $sRoot.'images/handelingen/anticiperen.jpg',
		'content'						=> '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>',
		'feedback'						=> '<p>Vandaag een goede start gemaakt. Let tijdens het in-voegen vooral op de snelheid.</p>',
		'tips'							=> [
		 									'Houd ruimte met invoegen en voorkom chaos op de weg.',
		 									'Kijk eerst goed voordat je je richtingaanwijzer aanzet.',
		 									'Zorg ervoor dat je op snelheid bent wanneer je gaat invoegen.'
		 								]
	],
	'/mijn-handelingen/hellingproef/'	=> [
		'title'							=> 'Hellingproef',
		'template'						=> 'handeling',
		'icon'							=> 'hellingproef',
		'progress'						=> 78,
		'suggestie'						=> true,
		'back'							=> $sRoot.'mijn-handelingen/',
		'image'							=> $sRoot.'images/handelingen/parkeren.jpg',
		'video'							=> $sRoot.'images/handelingen/parkeren.jpg',
		'content'						=> '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>',
		'feedback'						=> '<p>Vandaag een goede start gemaakt. Let tijdens het in-voegen vooral op de snelheid.</p>',
		'tips'							=> [
		 									'Houd ruimte met invoegen en voorkom chaos op de weg.',
		 									'Kijk eerst goed voordat je je richtingaanwijzer aanzet.',
		 									'Zorg ervoor dat je op snelheid bent wanneer je gaat invoegen.'
		 								]
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
$sPath = reset(explode('?', str_replace($sRoot, '/', $_SERVER['REQUEST_URI'])));

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