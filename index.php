<?php require_once('libs/constants.php') ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?=HOME_TITLE?></title>
    <meta name="description" content="Natasa i Vladimir, molersko-farbarski i gipsani radovi. NV Color Novi Sad" />
    <meta name="keywords" content="moler, moleri, farba, farbanje, krecenje, boja, lak, materijal, novi sad, rad, radovi, gips, gipsani, molersko, farbarski, disperzija" />
    <meta name="author" content="Nebojsa Jakovljevic" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
    <script type="text/javascript">
  	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-12892171-8']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
    <div id="header">
    	<?php require_once(HEADER_FILE); ?>
    </div>
    <div id="main">
    	<div id="main_left">
    		<?php require_once(MAIN_MENU_FILE); ?>
    	</div>
    	<div id="main_right">
    		<p>
    			Životni prostor svake osobe je pre svega odraz i ogledalo njenih misli, karaktera, želja i navika. 
    			To je mesto na kome se osećamo sigurnim, gde provodimo vreme opuštajući se i sakupljajući energiju 
    			za nove obaveze koje nam nameće savremeni (brz) način života.
    		</p>
    		<p>
				Ako mislite da je vaš životni prostor, vaš dom postao premonoton, a ne znate odakle biste počeli, ne brinite se. 
				Uz malo mašte i volje vaš dom će u nekoliko sati postati jednostavno neprepoznatljiv. Kako? Jednostavno.
				Mi smo tu da vam pomognemo u unapređenju prostora. Bojom osvežavamo prostoriju, dajemo mu sopstvenu notu. 
				Bojom postižemo kontraste, naglašavamo prostornost, te prostoru dajemo novu dimenziju. 
				Vaše je samo da pustite mašti na volju, a ostalo je na nama.	
    		</p>
    		<p>
    			Prilikom izvođenja radova koristimo sve vrste materijala po vašem izboru, od jeftinijih disperzija do 
    			najkvalitetnijih boja renomiranih stranih proizvođača.
    		</p>
    		<p>
    			Radovi se obavljaju čisto i u najkraćem roku.
    		</p>
    	</div>
    </div>
    <div id="footer">
    	<?php require_once(FOOTER_FILE); ?> 
    </div>
</body>
</html>