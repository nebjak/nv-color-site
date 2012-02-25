<?php require_once('libs/constants.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?=GALERIJA_TITLE?></title>
  <meta name="description" content="Natasa i Vladimir, molersko-farbarski i gipsani radovi. NV Color Novi Sad" />
  <meta name="keywords" content="moler, moleri, farba, farbanje, krecenje, boja, lak, materijal, novi sad, rad, radovi, gips, gipsani, molersko, farbarski, disperzija" />
  <meta name="author" content="Nebojsa Jakovljevic" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
  <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/colorbox.css" type="text/css" media="screen"/>
  <script src="js/jquery-1.5.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/jquery.colorbox-min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(function() {
      $('a[rel="galerija"]').colorbox({
        transition:'elastic', 
        speed: 400,
        maxHeight: "90%"
      });
    });
  </script>
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
      <div id="main_right" style="text-align: center;">
        <p>
          <a rel="galerija" title="Slika 1" href="images/galerija/img1.jpg"><img src="images/galerija/small/img1.jpg" width="180" height="135" alt="Slika 1" /></a>
          <a rel="galerija" title="Slika 2" href="images/galerija/img2.jpg"><img src="images/galerija/small/img2.jpg" width="180" height="135" alt="Slika 2" /></a>
          <a rel="galerija" title="Slika 3" href="images/galerija/img3.jpg"><img src="images/galerija/small/img3.jpg" width="180" height="135" alt="Slika 3" /></a>
        </p>
        <p>
          <a rel="galerija" title="Slika 4" href="images/galerija/img4.jpg"><img src="images/galerija/small/img4.jpg" width="180" height="135" alt="Slika 4" /></a>
          <a rel="galerija" title="Slika 5" href="images/galerija/img5.jpg"><img src="images/galerija/small/img5.jpg" width="180" height="135" alt="Slika 5" /></a>
          <a rel="galerija" title="Slika 6" href="images/galerija/img6.jpg"><img src="images/galerija/small/img6.jpg" width="180" height="135" alt="Slika 6" /></a>
        </p>
        <p>
          <a rel="galerija" title="Slika 7" href="images/galerija/img7.jpg"><img src="images/galerija/small/img7.jpg" width="180" height="135" alt="Slika 7" /></a>
          <a rel="galerija" title="Slika 8" href="images/galerija/img8.jpg"><img src="images/galerija/small/img8.jpg" width="180" height="135" alt="Slika 8" /></a>
          <a rel="galerija" title="Slika 9" href="images/galerija/img9.jpg"><img src="images/galerija/small/img9.jpg" width="180" height="135" alt="Slika 9" /></a>
        </p>
        <p>
          <a rel="galerija" title="Slika 10" href="images/galerija/img10.jpg"><img src="images/galerija/small/img10.jpg" width="180" height="135" alt="Slika 10" /></a>
          <a rel="galerija" title="Slika 11" href="images/galerija/img11.jpg"><img src="images/galerija/small/img11.jpg" width="180" height="135" alt="Slika 11" /></a>
          <a rel="galerija" title="Slika 12" href="images/galerija/img12.jpg"><img src="images/galerija/small/img12.jpg" width="180" height="135" alt="Slika 12" /></a>
        </p>
        <p>
          <a rel="galerija" title="Slika 13" href="images/galerija/img13.jpg"><img src="images/galerija/small/img13.jpg" width="180" height="135" alt="Slika 13" /></a>
          <a rel="galerija" title="Slika 14" href="images/galerija/img14.jpg"><img src="images/galerija/small/img14.jpg" width="180" height="135" alt="Slika 14" /></a>
          <a rel="galerija" title="Slika 15" href="images/galerija/img15.jpg"><img src="images/galerija/small/img15.jpg" width="180" height="135" alt="Slika 15" /></a>
        </p>
        <p>
          <a rel="galerija" title="Slika 16" href="images/galerija/img16.jpg"><img src="images/galerija/small/img16.jpg" width="180" height="135" alt="Slika 16" /></a>
          <a rel="galerija" title="Slika 17" href="images/galerija/img17.jpg"><img src="images/galerija/small/img17.jpg" width="180" height="135" alt="Slika 17" /></a>
          <a rel="galerija" title="Slika 18" href="images/galerija/img18.jpg"><img src="images/galerija/small/img18.jpg" width="180" height="135" alt="Slika 18" /></a>
        </p>
      </div>
    </div>
    <div id="footer">
      <?php require_once(FOOTER_FILE); ?>
    </div>
</body>
</html>
