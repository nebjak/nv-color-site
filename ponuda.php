<?php require_once('libs/constants.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?=PONUDA_TITLE?></title>
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
          Obavezno pre početka radova zaštitimo podove i nameštaj, a iza sebe ostavljamo sve uredno i čisto.
          <ul>
            <li>Krečenje stanova u cilju osvežavanja stare boje</li>
            <li>Gletovanje i krečenje poludisperzijom, disperzijom u svim tonovima</li>
            <li>Najkvalitetniji moleraj sa najboljim glet masama</li>
            <li>Farbanje radijatora, vrata, prozora, ograda...</li>
            <li>Postavljanje tapeta</li>
            <li>Uklanjanje dotrajale boje i tapeta</li>
            <li>Popravke oštećenja na zidovima i plafonima prilikom drugih radova</li>
            <li>Gipsani radovi – spučteni plafoni, pregradni zidovi, oblaganja zidova</li>
            <li>Ukrasne lajsne</li>
            <li>Dekoracija zidova</li>
            <li>Rimski stubovi – sami proizvodimo</li>
            <li>Dekorativno kamenje (od gipsa) – sami proizvodimo</li>
          </ul>
        </p>
      </div>
    </div>
    <div id="footer">
      <?php require_once(FOOTER_FILE); ?> 
    </div>
</body>
</html>
