<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""> <!--<![endif]-->
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?=$this->e($page_desc);?>" />
    <meta name="keywords" content="<?=$this->e($page_key);?>" />
    <meta http-equiv="Copyright" content="maleslabs" />
    <meta name="author" content="Imron Reviady" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

	<!-- Social Media Meta -->
	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>

    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
	<link href="<?=$this->asset('/libraries/bootstrap/bootstrap.min.css')?>" rel="stylesheet" />
    <linK href="<?=$this->asset('/libraries/owl-carousel/owl.carousel.css')?>" rel="stylesheet" /> <!-- Core Owl Carousel CSS File  * v1.3.3 -->
    <linK href="<?=$this->asset('/libraries/owl-carousel/owl.theme.css')?>" rel="stylesheet" /> <!-- Core Owl Carousel CSS Theme  File  * v1.3.3 -->
    <link href="<?=$this->asset('/libraries/flexslider/flexslider.css')?>" rel="stylesheet" /> <!-- flexslider -->
    <link href="<?=$this->asset('/libraries/fonts/font-awesome.min.css')?>" rel="stylesheet" />
    <link href="<?=$this->asset('/libraries/animate/animate.min.css')?>" rel="stylesheet" />
    <link href="<?=$this->asset('/libraries/magnific-popup/magnific-popup.css')?>" rel="stylesheet" />
    <link href="<?=$this->asset('/css/components.css')?>" rel="stylesheet"/>
    <link href="<?=$this->asset('/style.css')?>" rel="stylesheet" />
    <link href="<?=$this->asset('/css/media.css')?>" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5/html5shiv.min.js"></script>
      <script src="js/html5/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">

    <!-- LOADER -->
    <div id="site-loader" class="load-complete">
        <div class="load-position">
            <div class="logo"><img src="<?=$this->asset('/images/logo.png')?>" alt="logo"/></div>
            <h6>Please wait, loading...</h6>
            <div class="loading">
                <div class="loading-line"></div>
                <div class="loading-break loading-dot-1"></div>
                <div class="loading-break loading-dot-2"></div>
                <div class="loading-break loading-dot-3"></div>
            </div>
        </div>
    </div><!-- Loader /- -->
    
    <a id="top"></a>

    <!-- Insert Header -->
    <?=$this->insert('header');?>

        <!-- Insert Content -->
        <?=$this->section('content');?>
	
    <!-- Insert Footer -->
    <?=$this->insert('footer');?>

	<!-- Javascript -->
	<script src="<?=$this->asset('/libraries/jquery.min.js')?>"></script>    
    <script src="<?=$this->asset('/libraries/jquery.easing.min.js')?>"></script><!-- Easing Animation Effect -->
    <script src="<?=$this->asset('/libraries/bootstrap/bootstrap.min.js')?>"></script> <!-- Core Bootstrap v3.2.0 -->
    <script src="<?=$this->asset('/libraries/jquery.animateNumber.min.js')?>"></script> <!-- Used for Animated Numbers -->
    <script src="<?=$this->asset('/libraries/jquery.appear.js')?>"></script> <!-- It Loads jQuery when element is appears -->
    <script src="<?=$this->asset('/libraries/jquery.knob.js')?>"></script> <!-- Used for Loading Circle -->
    <script src="<?=$this->asset('/libraries/wow.min.js')?>"></script> <!-- Use For Animation -->
    <script src="<?=$this->asset('/libraries/flexslider/jquery.flexslider-min.js')?>"></script> <!-- flexslider   -->
    <script src="<?=$this->asset('/libraries/owl-carousel/owl.carousel.min.js')?>"></script> <!-- Core Owl Carousel CSS File  *   v1.3.3 -->
    <script src="<?=$this->asset('/libraries/expanding-search/modernizr.custom.js')?>"></script> <!-- Core Owl Carousel CSS File  *   v1.3.3 -->
    <script src="<?=$this->asset('/libraries/expanding-search/classie.js')?>"></script> 
    <script src="<?=$this->asset('/libraries/expanding-search/uisearch.js')?>"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
    <script type="text/javascript" src="<?=$this->asset('/libraries/jssor.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/libraries/jssor.slider.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/libraries/jquery.marquee.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/libraries/jquery.nicescroll.min.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/libraries/magnific-popup/jquery.magnific-popup.min.js')?>"></script>
    <!-- Customized Scripts -->
    <script src="<?=$this->asset('/js/functions.js')?>"></script>
</body>
</html>