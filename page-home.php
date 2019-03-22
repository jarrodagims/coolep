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
                        <li><a href="/" class="external" title="Blog"
                                target="_blank">Home</a></li>
                        <li class="dropdown"><a href="<?=SITEURL?>/about" title="About">About</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
								<li class="newsubmenu">
                                    <a href="<?=SITEURL?>/faqs" title="Faqs">FAQs</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
								<li class="newsubmenu">
                                    <a href="<?=SITEURL?>/blog" title="Blog">Blog</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/testimonials" title="Testimonials">Testimonials</a>
                                    <ul class="submenu-level2"></ul>
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
                                        <li><a href="<?=SITEURL?>/products/hot-water-heaters/solar-water-heating"
                                                title="Solar Water Heating">Solar Water Heating</a></li>
                                        <li><a href="<?=SITEURL?>/products/hot-water-heaters/commercial-water-heaters"
                                                title="Commercial Water Heaters">Commercial Water Heaters</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="<?=SITEURL?>/heating/" title="Heating">Heating</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/heater-installation-el-paso/" title="Heater Installation">Heater Installation</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/heater-repairs-el-paso/" title="Heater Repairs">Heater Repairs</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/heater-maintenance-el-paso/" title="Heater Maintenance">Heater Maintenance</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="<?=SITEURL?>/cooling/" title="cooling">Cooling</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/refrigerated-air-el-paso/" title="AC Installation">AC Installation</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>air-conditioning-repair-el-paso/" title="AC Repairs">AC Repairs</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/air-conditioning-service-el-paso/" title="AC Maintenance">AC Maintenance</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?=SITEURL?>/commercial" class="external" title="Commercial HVAC"
                                target="_blank">Commercial</a></li>
                        <li class="dropdown"><a href="<?=SITEURL?>/plumbing/" title="cooling">Plumbing</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/emergency-plumbing-drain-repair/" title="Emergency Plumbing Drain Repair">Emergency Plumbing Drain Repair</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/tankless-water-heating/" title="AC Maintenance">Tankless Water Heaters</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="<?=SITEURL?>/other-services/" title="Other Services">Other Services</a><span><a
                                    class="mobile-toggle" href="<?=SITEURL?>/#"><em class="fa fa-chevron-down"
                                        aria-hidden="true"></em></a></span>
                            <ul class="sub-menu">
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/air-duct-cleaning-system/" title="Air Duct Cleaning System">Air Duct Cleaning System</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                 <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/environmental-testing/" title="Environmental Testing">Environmental Testing</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/home-energy-audit/" title="Home Energy Audit">Home Energy Audit</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/indoor-air-quality/" title="Indoor Air Quality">Indoor Air Quality</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                                <li class="newsubmenu">
                                    <a href="<?=SITEURL?>/electrical-services-el-paso" title="Electrical Services">Electrical Services</a>
                                    <ul class="submenu-level2"></ul>
                                </li>
                            </ul>
                        </li>
                       
                        <li><a href="<?=SITEURL?>/financing" title="Financing">Financing</a></li>
                         <li><a href="<?=SITEURL?>/contact-us" title="Financing">Contact</a></li>
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
                            <span id="home">Happily Serving El Paso Since 1952</span>
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
                            <span id="home">NATE Certified Technicians</span>
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
                            <span id="home">Carrier Factory Authorized Dealer</span>
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
                    <h1 class="homepage-center-area-title">HVAC Contractor — Keeping You Cool in the Sun City</h1>
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
                <span class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/heating" title="Heating">Heating</a></span>
            </div>
            <div class="col-md-1 text-center">
                <a href="<?=SITEURL?>/services/heating" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-cooling.png" alt="Cooling"
                        class="homepage-center-area-image aos-init" data-aos="zoom-in-down"></a>
            </div>
            <div class="col-md-2 text-center">
                <span class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/cooling" title="Cooling">Cooling</a></span>
            </div>
            <div class="col-md-1 text-center">
                <a href="<?=SITEURL?>/services/cooling" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-plumbing.png" alt="Plumbing"
                        class="homepage-center-area-image aos-init" data-aos="zoom-in-down"></a>
            </div>
            <div class="col-md-2 text-center">
                <span class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/plumbing" title="Plumbing">Plumbing</a></span>
            </div>
            <div class="col-md-1 text-center">
                <a href="<?=SITEURL?>/services/plumbing" title="Heating"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-commercial.png"
                        alt="Commercial Servcies" class="homepage-center-area-image aos-init"
                        data-aos="zoom-in-down"></a>
            </div>
            <div class="col-md-2 text-center">
                <span class="homepage-center-area-service aos-init" data-aos="fade"><a
                        href="<?=SITEURL?>/services/commercial" title="Commercial Services">Commercial
                        Services</a></span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</main>
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="homepage-intro-title aos-init" data-aos="fade-right"><span>Heating and Cooling Services<br>in El Paso</span></h2>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" alt="Image 1"
                    class="image-one aos-init" data-aos="fade-left">
            </div>
            <div class="col-md-4">
                <h3 class="expander" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse"><span data-toggle="collapse" data-target=".navbar-collapse">Best HVAC Contractor in the Borderland <i class="far fa-arrow-alt-circle-down"></i></span>
                    <ul class="collapse .navbar-collapse" id="collapse">
                        <li>Top Heating and Cooling Company in El Paso</li>
                        <li>Highly Reviewed Company</li>
                        <li>Local Business Dedicated to Keeping You Cool</li>
                        <li>Check Out Our Reviews</li>
                        <li>Our Ratings Speak for Themselves</li>
                        <li>Search ‘Good HVAC Company Near Me’ to Find Us</li>
                    </ul>
                </h3>
                <p class="homepage-intro-one aos-init" data-aos="fade-left">Barrett Airworks Service Company is a certified HVAC company and Carrier authorized factory dealer in El Paso. Our team of dedicated technicians works hard to provide you with heating and cooling, plumbing, and energy services that will keep your house cool and functional all year long. </p>
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
                <p class="homepage-intro-two aos-init" data-aos="fade-left">We are certified, qualified, and experienced. We can get the job done for you right away and efficiently as possible! Whether you need to convert to refrigerated air, a new AC installation, repairs, plumbing maintenance, or are in need of technology, we can help you quickly so your home can be restored to its normal state in no time.
                </p>
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
<div class="content-additional-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2>Who We Are</h2>
                
                <p>Barrett Airworks Service Company is comprised of a team of hardworking, certified, and authorized individuals who can help you with your heating, ventilation, cooling, and plumbing needs. We have all of the licensing and certifications needed to complete work on your home, business, or office building and are always updating our knowledge in the field, staying up to date on new methods, technologies, and services that can benefit you. We provide a wide variety of services and can help homes and businesses of all kinds stay cool, have working plumbing, and make sure that other HVAC or plumbing-related needs are met all year long.</p>
                
                <p>Since 1952, our company has been providing services to El Paso and the surrounding areas. We offer services to El Paso, Las Cruces, Van Horn, Anthony, Sunland, Horizon, Canutillo, Socorro, and other areas in the community. We are NATE certified, Carrier authorized dealers, and we provide 24-hour emergency services. We make it our job to help you! It’s why we provide the services you need around the clock. We know that when an emergency happens, it rarely falls inside the 8 to 5 window of normal work hours. Our certified technicians are available, willing, and dedicated to helping you whenever an emergency strikes.</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <img id="who" src="https://www.coolelpaso.com/wp-content/themes/coolep/img/hvac-repair.jpg" alt="HVAC services in El Paso" />
            </div>
        </div>
    </div>
</div>
<div class="content-additional-two">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2>Our HVAC and Plumbing Services</h2>
                
                <p>One thing that makes our company unique is that we offer both heating and cooling and plumbing services. This makes us a one-stop shop for all things related to your home’s plumbing and HVAC systems. We offer a variety of services for both residential and commercial customers, including:</p>
                
                <ul id="buckets">         
                        <li><a href="https://www.coolelpaso.com/services/"><strong>Heating and Cooling-</strong></a> We offer all the basic heating and cooling services you can think of, including maintenance, repairs, installations, conversions, as well as a variety of products for you to choose from. Our products include new HVAC systems, thermostats, furnaces, and hot water heaters. If your HVAC stops working, you want to upgrade to refrigerated air, you are in need of basic maintenance, or anything else related to your HVAC, we have you covered. All of our employees have received their NATE certifications and our company is authorized to sell Carrier HVAC systems, one of the most high-quality and popular brands in heating and cooling available. 

                        <li><a href="https://www.coolelpaso.com/air-conditioning-service-el-paso/"><strong>Ventilation-</strong></a> Air ventilation in our homes is important. From breathing in clean air and having good quality indoor air to proper airflow, cleaning, and maintenance, we have you covered! Your ventilation system is responsible for spreading the cool and warm air from your HVAC system throughout your house. If there is an issue, such as poor airflow, poor indoor air quality, old or damaged ducts and vents, and so on, we can help you get it resolved. This way, you can go back to feeling comfortable and breathing in clean air in your home or business. </li>

                        <li><a href="https://www.coolelpaso.com/services/plumbing/"><strong>Plumbing-</strong></a> Our plumbing services include repairs, maintenance, backflow testing, gas piping and leak testing, drain cleaning, fixture and faucet repair/replacement, water heater replacements, gas leak repairs, and urinal, toilet, and lavatory installations, among other services. We are certified in both New Mexico and Texas to help you with all of your plumbing needs. We understand that when an issue with your plumbing system strikes, it can be such a hassle, especially if you only have one bathroom in your home or business. We get to work right away to ensure the issue is resolved quickly and efficiently. </li>

                        <li><a href="https://www.coolelpaso.com/services/other-services/duct-sealing/"><strong>Duct Sealing-</strong></a> Duct sealing involves ensuring your ducts are free from leaks, holes, and poor circulation, so all the cool and warm air from your HVAC makes it to all the rooms in your home or business (if your home is equipped with a forced-air heating and cooling system). With our duct sealing services, your HVAC will work more efficiently, keeping you more comfortable, you won’t waste energy, and you’ll save more money every month. All in all, duct sealing is incredibly helpful. </li>

                        <li><a href="https://www.coolelpaso.com/services/other-services/air-duct-cleaning-system/"><strong>Air Duct Cleaning and Maintenance-</strong></a> We want to be sure that we are breathing in clean air when we are inside our homes, businesses, or office spaces. Air duct cleaning and maintenance will help with that, making sure you have good indoor air quality.</li>

                        <li><a href="https://www.coolelpaso.com/services/other-services/environmental-testing/"><strong>Environmental Testing-</strong></a> Our environmental testing services include making sure that every piece of HVAC equipment in your home is working properly. This ensures that nothing needs to be repaired or replaced and that your system is working efficiently, as not to damage the environment any further.</li>

                        <li><a href="https://www.coolelpaso.com/services/other-services/home-energy-audit/"><strong>Home Energy Audits-</strong></a> A home energy audit checks for issues such as mold, drafts, peeling paint, and imperfect airflow that could be signs of a bigger problem with your HVAC system. If we see these issues or other signs that there may be something wrong with your HVAC, we’ll perform maintenance, repairs, or new system installations to ensure this problem goes away. </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="content-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2>Contact Barrett Airworks Service Company Today!</h2>
                
                <p>If you have an emergency, we’re ready to help you with our 24-hour emergency service! Otherwise, feel free to set up an appointment so we can visit your home or business to address your needs. Contact us today! We look forward to helping you.</p>
                
                <a href="https://www.coolelpaso.com/contact-us/" class="header-contact-button aos-init aos-animate" data-aos="fade-up" data-toggle="modal" data-target="#contactModal" style="margin: 0 auto;">Contact Us</a>
                
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>