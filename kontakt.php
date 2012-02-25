<?php require_once('libs/constants.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?=KONTAKT_TITLE?></title>
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
      <?php require_once (HEADER_FILE); ?>
    </div>
    <div id="main">
      <div id="main_left">
        <?php require_once (MAIN_MENU_FILE); ?>
      </div>
      <div id="main_right">
        <div style="width: 300px; margin: auto; padding-top: 50px;">
          <table>
            <tr>
            <td width="100">Nataša:</td>
            <td>064/503-67-87</td>
          </tr>
          <tr>
            <td>Vladimir:</td>
            <td>064/250-37-82</td>
          </tr>         
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>           
          </tr>
          <tr>
            <td>e-mail:</td>
            <td><a href="mailto:nv.color@gmail.com">nv.color@gmail.com</a></td>
          </tr>
          <tr>
            <td>www:</td>
            <td><a href="http://nv-color.com/">www.nv-color.com</a></td>
          </tr>
        </table>
        </div>

      </div>
    </div>
    <div id="footer">
      <?php require_once (FOOTER_FILE); ?> 
    </div>
</body>
</html>
