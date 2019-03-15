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
                        src="https://www.payzer.com/images/jpp-button-small.png" usemap="#JPPSmallButtonMap" width="150"
                        height="60">
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