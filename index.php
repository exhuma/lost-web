<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="menu">
          <strong><a href="<?= $PHP_SELF ?>?page=wat">lost.lu</a></strong>&nbsp;|&nbsp;
          <a href="<?= $PHP_SELF ?>?page=wou">Wou ass dat?</a>&nbsp;|&nbsp;
          <a href="<?= $PHP_SELF ?>?page=umellen">Umellen?</a>&nbsp;|&nbsp;
          <a href="<?= $PHP_SELF ?>?page=gallery">Photoën</a>&nbsp;|&nbsp;
          <a href="<?= $PHP_SELF ?>?page=sossnach">Soss nach?</a>
        </div>
        <div id="content">
          <div id="logo">
            <img src="img/logo2014.png" />
          </div>

          <?php

          /**
           * Dat hei ass EXPRESS esou gemach. Aus secherheets-grenn!
           * Wann een well eng Seit beisetzen, w.e.g. genau d'selwecht machen!
           */
          switch($_REQUEST['page']) {
            case 'wou':
              readfile('pages/wou.html');
              break;
            case 'umellen':
              readfile('pages/umellen.html');
              break;
            case 'sossnach':
              readfile('pages/sossnach.html');
              break;
            case 'gallery':
              include('pages/gallery.php');
              break;
            case 'welcome':
            case 'wat':
            default:
              readfile('pages/wat.html');
              break;
          }

          ?>

          <img id="combilogo" src="img/combilogo.jpg" />

        </div>

        <!--
        <div id="footer">
          Link op mamerwiselen.lu? piwitchen? fnel?
        </div>
        -->

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
