<?php get_header();

/*
Template Name: Home
 */?>
<main role="main">
    <div class="banner-area">
        <div class="container navigation-container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="main-navigation" data-aos="zoom-in-left">
                        <li class="dropdown"><a href="<?=SITEURL?>/services" title="Services">Services</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/services/commercial" title="Commercial">Commercial</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/services/heating" title="Heating">Heating</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/services/cooling" title="Cooling">Cooling</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/services/plumbing" title="Plumbing">Plumbing</a>
                                    <span><a class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                                aria-hidden="true"></em></a></span>
                                    <ul class="submenu-level2">
                                        <li><a href="<?=SITEURL?>/services/plumbing/emergency-plumbing-drain-repair"
                                                title="Emergency Plumbing Drain Repair">Emergency Plumbing Drain
                                                Repair</a></li>
                                    </ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/services/other-services" title="Other Services">Other
                                        Services</a> <span><a class="mobile-toggle" href="<?=SITEURL?>/#"><em
                                                class="fa fa-chevron-down" aria-hidden="true"></em></a></span>
                                    <ul class="submenu-level2">
                                        <li><a href="<?=SITEURL?>/services/other-services/duct-sealing"
                                                title="Duct Sealing">Duct Sealing</a></li>
                                        <li><a href="<?=SITEURL?>/services/other-services/air-duct-cleaning-system"
                                                title="Air Duct Cleaning System">Air Duct Cleaning System</a></li>
                                        <li><a href="<?=SITEURL?>/services/other-services/environmental-testing"
                                                title="Environmental Testing">Environmental Testing</a></li>
                                        <li><a href="<?=SITEURL?>/services/other-services/home-energy-audit"
                                                title="Home Energy Audit">Home Energy Audit</a></li>
                                        <li><a href="<?=SITEURL?>/services/other-services/indoor-air-quality"
                                                title="Indoor Air Quality">Indoor Air Quality</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="<?=SITEURL?>/products" title="Products">Products</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/products/air-conditioners" title="Air Conditioners">Air
                                        Conditioners</a> <span><a class="mobile-toggle" href="<?=SITEURL?>/#"><em
                                                class="fa fa-chevron-down" aria-hidden="true"></em></a></span>
                                    <ul class="submenu-level2">
                                        <li><a href="<?=SITEURL?>/products/air-conditioners/infinity-series-central-air-conditioner"
                                                title="Infinity® Series Central Air Conditioner">Infinity® Series
                                                Central Air Conditioner</a></li>
                                        <li><a href="<?=SITEURL?>/products/air-conditioners/performance-series-air-conditioners"
                                                title="Performance™ Series Air Conditioners">Performance™ Series Air
                                                Conditioners</a></li>
                                        <li><a href="<?=SITEURL?>/products/air-conditioners/comfort-series-air-conditioners"
                                                title="Comfort™ Series Air Conditioners">Comfort™ Series Air
                                                Conditioners</a></li>
                                        <li><a href="<?=SITEURL?>/products/air-conditioners/ductless-mini-split-air-conditioners"
                                                title="Ductless Mini-Split Air Conditioners">Ductless Mini-Split Air
                                                Conditioners</a></li>
                                    </ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/products/furnaces" title="Furnaces">Furnaces</a>
                                    <span><a class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                                aria-hidden="true"></em></a></span>
                                    <ul class="submenu-level2">
                                        <li><a href="<?=SITEURL?>/products/furnaces/infinity-gas-furnace-with-greenspeed-intelligence"
                                                title="Infinity® Gas Furnace With Greenspeed™ Intelligence">Infinity®
                                                Gas Furnace With Greenspeed™ Intelligence</a></li>
                                        <li><a href="<?=SITEURL?>/products/furnaces/performance-series-gas-furnaces"
                                                title="Performance™ Series Gas Furnaces">Performance™ Series Gas
                                                Furnaces</a></li>
                                        <li><a href="<?=SITEURL?>/products/furnaces/comfort-series-gas-furnaces"
                                                title="Comfort™ Series Gas Furnaces">Comfort™ Series Gas
                                                Furnaces</a></li>
                                    </ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/products/thermostats" title="Thermostats">Thermostats</a>
                                    <span><a class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                                aria-hidden="true"></em></a></span>
                                    <ul class="submenu-level2">
                                        <li><a href="<?=SITEURL?>/products/thermostats/cr-thermostat"
                                                title="Côr Thermostat">Côr Thermostat</a></li>
                                    </ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/products/hot-water-heaters" title="Hot Water Heaters">Hot
                                        Water Heaters</a> <span><a class="mobile-toggle" href="<?=SITEURL?>/#"><em
                                                class="fa fa-chevron-down" aria-hidden="true"></em></a></span>
                                    <ul class="submenu-level2">
                                        <li><a href="<?=SITEURL?>/products/hot-water-heaters/tank-water-heating"
                                                title="Tank Water Heating">Tank Water Heating</a></li>
                                        <li><a href="<?=SITEURL?>/products/hot-water-heaters/tankless-water-heating"
                                                title="Tankless Water Heating">Tankless Water Heating</a></li>
                                        <li><a href="<?=SITEURL?>/products/hot-water-heaters/solar-water-heating"
                                                title="Solar Water Heating">Solar Water Heating</a></li>
                                        <li><a href="<?=SITEURL?>/products/hot-water-heaters/commercial-water-heaters"
                                                title="Commercial Water Heaters">Commercial Water Heaters</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?=SITEURL?>/financing" title="Financing">Financing</a></li>
                        <li><a href="<?=SITEURL?>/faqs" title="FAQs">FAQs</a></li>
                        <li class="dropdown"><a href="<?=SITEURL?>/about" title="About">About</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/testimonials" title="Testimonials">Testimonials</a>
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
                            <a href="<?=SITEURL?>/about" title="Learn More"><span
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
                            <a href="<?=SITEURL?>/about" title="Learn More"><span
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
                            <a href="<?=SITEURL?>/services" title="Learn More"><span
                                    class="btn btn-sm btn-outline-secondary">Learn More</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->
            </div>
            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="<?=SITEURL?>/#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="<?=SITEURL?>/#carousel" role="button" data-slide="next">
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
                <a href="<?=SITEURL?>/#" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-heating.png" alt="Heating"
                        class="homepage-center-area-image aos-init" data-aos="zoom-in-right"></a>
            </div>
            <div class="col-md-2 text-center">
                <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/heating" title="Heating">Heating</a></h1>
            </div>
            <div class="col-md-1 text-center">
                <a href="<?=SITEURL?>/services/heating" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-cooling.png" alt="Cooling"
                        class="homepage-center-area-image aos-init" data-aos="zoom-in-down"></a>
            </div>
            <div class="col-md-2 text-center">
                <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/cooling" title="Cooling">Cooling</a></h1>
            </div>
            <div class="col-md-1 text-center">
                <a href="<?=SITEURL?>/services/cooling" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-plumbing.png" alt="Plumbing"
                        class="homepage-center-area-image aos-init" data-aos="zoom-in-down"></a>
            </div>
            <div class="col-md-2 text-center">
                <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/plumbing" title="Plumbing">Plumbing</a></h1>
            </div>
            <div class="col-md-1 text-center">
                <a href="<?=SITEURL?>/services/plumbing" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-commercial.png"
                        alt="Commercial Servcies" class="homepage-center-area-image aos-init"
                        data-aos="zoom-in-down"></a>
            </div>
            <div class="col-md-2 text-center">
                <h1 class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/commercial" title="Commercial Services">Commercial
                        Services</a></h1>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</main>
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="homepage-intro-title aos-init" data-aos="fade-right"><span>We Are</span><br>BARRETT
                    AIRWORKS</h2>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" alt="Image 1"
                    class="image-one aos-init" data-aos="fade-left">
            </div>
            <div class="col-md-4">
                <p class="homepage-intro-one aos-init" data-aos="fade-left">Barrett Airworks is licensed and
                    qualified with HVAC in installing, converting or replacing your home's air conditioning
                    systems. Plus our technicians can install, repair or replace any brand and we stand behind
                    our work 100%.</p>
            </div>
            <div class="col-md-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image2.jpg" alt="Image 2"
                    class="image-two aos-init" data-aos="fade-right">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="homepage-intro-since aos-init" data-aos="fade-right">since</p>
                <p class="homepage-intro-since-year aos-init" data-aos="fade-right">1952</p>
            </div>
            <div class="col-md-8">
                <p class="homepage-intro-two aos-init" data-aos="fade-left">Serving El Paso, Las Cruces, Van
                    Horn, Anthony with reliable 24-hour service and technicians who receive hands-on continuing
                    education to stay current on all the latest technology advancements in heating and cooling
                    systems. </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 homepage-testimonial-container aos-init" data-aos="fade">
                <div class="homepage-testimonial">
                    <p class="homepage-testimonial-content aos-init" data-aos="fade">"Very professional. I went
                        here to fill out an application. A test was given so be ready if you are looking for
                        employment. Can provide HVAC services."</p>
                    <p class="homepage-testimonial-name">-Jevin B.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer();?>