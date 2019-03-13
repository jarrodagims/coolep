<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes();?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

    <?php wp_head();?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?=get_option('sherpa_schema')?>

    <?php endif;?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127800522-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-127800522-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">
    <meta name="msvalidate.01" content="2F2A0AC453AF23BED29DF0B98007C11D" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Style -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" rel="stylesheet">
    <!-- TypeKit -->
    <link rel="stylesheet" href="https://use.typekit.net/uwj4vhz.css">
    <script src="https://use.fontawesome.com/1bb9601ba3.js"></script>
    <?php echo $GLOBALS['CSS']; ?>
    <style>
    .subpage-banner-area {
        background: url(<?php echo $GLOBALS['BANNER']; ?>) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TH8DNJX');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="JdHgWfJNxO1AJiPNOtDKPFa_dnUGUcdO9crpFNcSekI" />

    <!-- Default Statcounter code for Barrett Airworks
https://www.coolelpaso.com/ -->
    <script type="text/javascript">
    var sc_project = 11853214;
    var sc_invisible = 1;
    var sc_security = "b2c42c62";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="free web stats" href="http://statcounter.com/" target="_blank"><img
                    class="statcounter"
                    src="<?php echo get_stylesheet_directory_uri(); ?>//c.statcounter.com/11853214/0/b2c42c62/1/" alt="free
web stats"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "HVACBusiness",
        "name": "Barrett Airworks Service Co.",
        "image": "https://www.coolelpaso.com/images/logo.jpg",
        "@id": "",
        "url": "https://www.coolelpaso.com/",
        "telephone": "915-591-8457",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3750 Durazno Ave",
            "addressLocality": "El Paso",
            "addressRegion": "TX",
            "postalCode": "79905",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.775764,
            "longitude": -106.44800199999997
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "07:30",
            "closes": "14:30"
        },
        "sameAs": [
            "https://www.facebook.com/Barrett-Airworks-Service-Co-257052545000799/",
            "https://twitter.com/BarrettAirworks"
        ]
    }
    </script>
</head>

<body <?php body_class();?>>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TH8DNJX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="https://www.coolelpaso.com/services" title="Services">Services</a>
                    </li>
                    <li class="nav-item"><a href="https://www.coolelpaso.com/products" title="Products">Products</a>
                    </li>
                    <li class="nav-item"><a href="https://www.coolelpaso.com/financing" title="Financing">Financing</a>
                    </li>
                    <li class="nav-item"><a href="https://www.coolelpaso.com/faqs" title="FAQs">FAQs</a></li>
                    <li class="nav-item"><a href="https://www.coolelpaso.com/about" title="About">About</a></li>
                    <li class="nav-item"><a href="https://blog.coolelpaso.com/" class="external" title="Blog"
                            target="_blank">Blog</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="https://www.coolelpaso.com/" title="Barrett Airworks"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg" alt="Barrett Airworks"
                            class="logo"></a>
                </div>
                <div class="col-md-2 payzer">

                    <img style="outline: none; margin: 0 auto; display: block;" alt=""
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/jpp-button-small.png"
                        usemap="#JPPSmallButtonMap" width="150" height="60">
                    <p></p>
                    <map id="JPPSmallButtonMap" name="JPPSmallButtonMap">
                        <area style="outline: none;" title="Make a Payment" alt="Make a Payment with Payzer"
                            coords="62,30,134,40" shape="rect"
                            href="https://www.payzer.com/index.php/Payment/ExternalMake/b/4213">
                        <area style="outline: none;" alt="Apply for Instant Financing with Payzer"
                            title="Apply for Instant Financing" coords="62,46,135,56" shape="rect"
                            href="https://www.payzer.com/index.php/Account/FinancingOptions/b/4213">
                    </map>

                </div>
                <div class="col-lg-4">
                    <p class="header-contact-desc aos-init aos-animate" data-aos="fade-right" style="margin-top: 10px;">
                        For Your Heating, Cooling, and Plumbing Needs</p>
                    <a href="https://www.coolelpaso.com/#" class="header-contact-button aos-init aos-animate"
                        data-aos="fade-up" data-toggle="modal" data-target="#contactModal" style="margin: 0 auto;">Get a
                        Free Quote</a>
                    <p class="header-contact-phone aos-init aos-animate" data-aos="fade-left"><a href="tel:9155918457"
                            style="font-size: 18px;"><span>24 hours:</span> (915) 591-8457</a>
                        <a href="https://www.facebook.com/Barrett-Airworks-Service-Co-257052545000799/"
                            target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-logo.png"
                                alt="Facebook"></a>
                        <a href="https://twitter.com/BarrettAirworks" target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/ba-twitter.png"
                                alt="Facebook"></a>
                        <a href="https://www.linkedin.com/company/barrett-airworks-service-co/" target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/ba-linkedin.png"
                                alt="Facebook"></a></p>
                </div>
            </div>
        </div>
    </div>

    <main role="main">
        <div class="banner-area">
            <div class="container navigation-container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="main-navigation aos-init aos-animate" data-aos="zoom-in-left">
                            <li class="dropdown"><a href="https://www.coolelpaso.com/services"
                                    title="Services">Services</a><span><a class="mobile-toggle"
                                        href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                            aria-hidden="true"></em></a></span>
                                <ul class="sub-menu">
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/services/commercial"
                                            title="Commercial">Commercial</a>
                                        <ul class="submenu-level2"></ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/services/heating"
                                            title="Heating">Heating</a>
                                        <ul class="submenu-level2"></ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/services/cooling"
                                            title="Cooling">Cooling</a>
                                        <ul class="submenu-level2"></ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/services/plumbing"
                                            title="Plumbing">Plumbing</a> <span><a class="mobile-toggle"
                                                href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                                    aria-hidden="true"></em></a></span>
                                        <ul class="submenu-level2">
                                            <li><a href="https://www.coolelpaso.com/services/plumbing/emergency-plumbing-drain-repair"
                                                    title="Emergency Plumbing Drain Repair">Emergency Plumbing Drain
                                                    Repair</a></li>
                                        </ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/services/other-services"
                                            title="Other Services">Other Services</a> <span><a class="mobile-toggle"
                                                href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                                    aria-hidden="true"></em></a></span>
                                        <ul class="submenu-level2">
                                            <li><a href="https://www.coolelpaso.com/services/other-services/duct-sealing"
                                                    title="Duct Sealing">Duct Sealing</a></li>
                                            <li><a href="https://www.coolelpaso.com/services/other-services/air-duct-cleaning-system"
                                                    title="Air Duct Cleaning System">Air Duct Cleaning System</a></li>
                                            <li><a href="https://www.coolelpaso.com/services/other-services/environmental-testing"
                                                    title="Environmental Testing">Environmental Testing</a></li>
                                            <li><a href="https://www.coolelpaso.com/services/other-services/home-energy-audit"
                                                    title="Home Energy Audit">Home Energy Audit</a></li>
                                            <li><a href="https://www.coolelpaso.com/services/other-services/indoor-air-quality"
                                                    title="Indoor Air Quality">Indoor Air Quality</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="https://www.coolelpaso.com/products"
                                    title="Products">Products</a><span><a class="mobile-toggle"
                                        href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                            aria-hidden="true"></em></a></span>
                                <ul class="sub-menu">
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/products/air-conditioners"
                                            title="Air Conditioners">Air Conditioners</a> <span><a class="mobile-toggle"
                                                href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                                    aria-hidden="true"></em></a></span>
                                        <ul class="submenu-level2">
                                            <li><a href="https://www.coolelpaso.com/products/air-conditioners/infinity-series-central-air-conditioner"
                                                    title="Infinity® Series Central Air Conditioner">Infinity® Series
                                                    Central Air Conditioner</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/air-conditioners/performance-series-air-conditioners"
                                                    title="Performance™ Series Air Conditioners">Performance™ Series Air
                                                    Conditioners</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/air-conditioners/comfort-series-air-conditioners"
                                                    title="Comfort™ Series Air Conditioners">Comfort™ Series Air
                                                    Conditioners</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/air-conditioners/ductless-mini-split-air-conditioners"
                                                    title="Ductless Mini-Split Air Conditioners">Ductless Mini-Split Air
                                                    Conditioners</a></li>
                                        </ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/products/furnaces"
                                            title="Furnaces">Furnaces</a> <span><a class="mobile-toggle"
                                                href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                                    aria-hidden="true"></em></a></span>
                                        <ul class="submenu-level2">
                                            <li><a href="https://www.coolelpaso.com/products/furnaces/infinity-gas-furnace-with-greenspeed-intelligence"
                                                    title="Infinity® Gas Furnace With Greenspeed™ Intelligence">Infinity®
                                                    Gas Furnace With Greenspeed™ Intelligence</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/furnaces/performance-series-gas-furnaces"
                                                    title="Performance™ Series Gas Furnaces">Performance™ Series Gas
                                                    Furnaces</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/furnaces/comfort-series-gas-furnaces"
                                                    title="Comfort™ Series Gas Furnaces">Comfort™ Series Gas
                                                    Furnaces</a></li>
                                        </ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/products/thermostats"
                                            title="Thermostats">Thermostats</a> <span><a class="mobile-toggle"
                                                href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                                    aria-hidden="true"></em></a></span>
                                        <ul class="submenu-level2">
                                            <li><a href="https://www.coolelpaso.com/products/thermostats/cr-thermostat"
                                                    title="Côr Thermostat">Côr Thermostat</a></li>
                                        </ul>
                                    </li>
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/products/hot-water-heaters"
                                            title="Hot Water Heaters">Hot Water Heaters</a> <span><a
                                                class="mobile-toggle" href="https://www.coolelpaso.com/#"><em
                                                    class="fa fa-chevron-down" aria-hidden="true"></em></a></span>
                                        <ul class="submenu-level2">
                                            <li><a href="https://www.coolelpaso.com/products/hot-water-heaters/tank-water-heating"
                                                    title="Tank Water Heating">Tank Water Heating</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/hot-water-heaters/tankless-water-heating"
                                                    title="Tankless Water Heating">Tankless Water Heating</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/hot-water-heaters/solar-water-heating"
                                                    title="Solar Water Heating">Solar Water Heating</a></li>
                                            <li><a href="https://www.coolelpaso.com/products/hot-water-heaters/commercial-water-heaters"
                                                    title="Commercial Water Heaters">Commercial Water Heaters</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://www.coolelpaso.com/financing" title="Financing">Financing</a></li>
                            <li><a href="https://www.coolelpaso.com/faqs" title="FAQs">FAQs</a></li>
                            <li class="dropdown"><a href="https://www.coolelpaso.com/about"
                                    title="About">About</a><span><a class="mobile-toggle"
                                        href="https://www.coolelpaso.com/#"><em class="fa fa-chevron-down"
                                            aria-hidden="true"></em></a></span>
                                <ul class="sub-menu">
                                    <li class="newsubmenu">
                                        <a href="https://www.coolelpaso.com/testimonials"
                                            title="Testimonials">Testimonials</a>
                                        <ul class="submenu-level2"></ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://blog.coolelpaso.com/" class="external" title="Blog"
                                    target="_blank">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class=""></li>
                    <li data-target="#carousel" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners4.jpg?252"
                                media="(min-width: 1400px)">
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners4.jpg?548"
                                media="(min-width: 769px)">
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners4.jpg?463"
                                media="(min-width: 577px)">
                            <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners4.jpg?825"
                                alt="responsive image" class="d-block img-fluid">
                        </picture>
                        <div class="carousel-caption aos-init aos-animate" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="carousel-caption-container">
                                <h2>Happily Serving El Paso Since 1952</h2>
                                <p>When it comes to your air conditioner turn to Barrett Airworks for quality air
                                    conditioning service. From repairs and maintenance to upgrades and conversions,
                                    Barrett Airworks is your local heating and cooling expert.</p>
                                <a href="https://www.coolelpaso.com/about" title="Learn More"><span
                                        class="btn btn-sm btn-outline-secondary">Learn More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item active">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners5.jpg?728"
                                media="(min-width: 1400px)">
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners5.jpg?189"
                                media="(min-width: 769px)">
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners5.jpg?453"
                                media="(min-width: 577px)">
                            <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners5.jpg?711"
                                alt="responsive image" class="d-block img-fluid">
                        </picture>
                        <div class="carousel-caption aos-init" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                            data-aos-duration="1000">
                            <div class="carousel-caption-container">
                                <h2>NATE Certified Technicians</h2>
                                <p>Knowledgeable and friendly certified technicians will advise you on the right
                                    products to use to meet your heating, cooling and plumbing needs.</p>
                                <a href="https://www.coolelpaso.com/about" title="Learn More"><span
                                        class="btn btn-sm btn-outline-secondary">Learn More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners6.jpg?963"
                                media="(min-width: 1400px)">
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners6.jpg?148"
                                media="(min-width: 769px)">
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners6.jpg?723"
                                media="(min-width: 577px)">
                            <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/files/homepage_banners/homepage_banners6.jpg?501"
                                alt="responsive image" class="d-block img-fluid">
                        </picture>
                        <div class="carousel-caption aos-init aos-animate" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="carousel-caption-container">
                                <h2>Carrier Factory Authorized Dealer</h2>
                                <p>Relax as Barrett Airworks solves your heating and cooling problems with the highest
                                    degree of professionalism, expertise and efficiency.</p>
                                <a href="https://www.coolelpaso.com/services" title="Learn More"><span
                                        class="btn btn-sm btn-outline-secondary">Learn More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.carousel-item -->
                </div>
                <!-- /.carousel-inner -->
                <a class="carousel-control-prev" href="https://www.coolelpaso.com/#carousel" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="https://www.coolelpaso.com/#carousel" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
        </div>
        <div class="homepage-center-area">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="homepage-center-area-title">Our Services</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid"></div>
            <div class="row" style="margin:20px">
                <div class="col-md-1 text-center">
                    <a href="https://www.coolelpaso.com/#" title="Heating"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-heating.png" alt="Heating"
                            class="homepage-center-area-image aos-init" data-aos="zoom-in-right"></a>
                </div>
                <div class="col-md-2 text-center">
                    <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                            href="https://www.coolelpaso.com/services/heating" title="Heating">Heating</a></h1>
                </div>
                <div class="col-md-1 text-center">
                    <a href="https://www.coolelpaso.com/services/heating" title="Heating"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-cooling.png" alt="Cooling"
                            class="homepage-center-area-image aos-init" data-aos="zoom-in-down"></a>
                </div>
                <div class="col-md-2 text-center">
                    <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                            href="https://www.coolelpaso.com/services/cooling" title="Cooling">Cooling</a></h1>
                </div>
                <div class="col-md-1 text-center">
                    <a href="https://www.coolelpaso.com/services/cooling" title="Heating"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-plumbing.png" alt="Plumbing"
                            class="homepage-center-area-image aos-init" data-aos="zoom-in-down"></a>
                </div>
                <div class="col-md-2 text-center">
                    <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                            href="https://www.coolelpaso.com/services/plumbing" title="Plumbing">Plumbing</a></h1>
                </div>
                <div class="col-md-1 text-center">
                    <a href="https://www.coolelpaso.com/services/plumbing" title="Heating"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-commercial.png"
                            alt="Commercial Servcies" class="homepage-center-area-image aos-init"
                            data-aos="zoom-in-down"></a>
                </div>
                <div class="col-md-2 text-center">
                    <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                            href="https://www.coolelpaso.com/services/commercial" title="Commercial Services">Commercial
                            Services</a></h1>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>