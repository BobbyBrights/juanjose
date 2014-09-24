<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
$doc->addStyleSheet('///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/base.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/fontface.css');

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanJosé Muebles y Objetos</title>

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="icon" type="image/x-icon" href="<?php echo 'templates/' . $this->template . '/images/favicon.ico' ?>" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <jdoc:include type="head" />

</head>
<body>
	<div class="main-wrapper" id="main-layout">

    <div class="container">
        <div class="row first-row">

        <!-- LEFT BASE COLUMN -->
        <div class="col-sm-3 no-lateral-padding">
          <div class="row logo-row">
            <div class="col-sm-6 col-sm-offset-4 no-lateral-padding"><img class="main-logo" src="<?php echo 'templates/' . $this->template . '/images/logo_blanco_chico.png' ?>" /></div>
          </div>
          <div class="row">
            <div class="col-sm-11">
              <div class="row">
                <div class="col-sm-12">
                  <jdoc:include type="modules" name="menu" style="none" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <jdoc:include type="modules" name="left" style="none" />
                  <ul class="contact-info">
                    <li>juanjose muebles y objetos</li>
                    <li>contacto@juanjose.cl</li>
                    <li>(+569) 82896244</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 social-logos">
              <a href="http://www.instagram.com/juanjosemuebles" target="_blank"><img src="<?php echo 'templates/' . $this->template . '/images/instagram.jpg' ?>">
              <a href="https://www.facebook.com/juanjosemuebles" target="_blank"><img src="<?php echo 'templates/' . $this->template . '/images/facebook.jpg' ?>"></a>
            </div>
          </div>
        </div>

        <!-- RIGHT BASE COLUMN -->
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-12" id="content">
              <jdoc:include type="message" />
              <jdoc:include type="component" />
              <jdoc:include type="modules" name="content" style="none" />
            </div>
          </div>
        </div>
						<!-- YIELD -->

      </div><!--/first-row-->
    </div><!-- /container -->

  	</div><!-- #main-wrapper -->
        <script src="<? echo 'templates/' . $this->template . '/js/articlegallery.js'?>" type="text/javascript"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
