<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>

<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.172366750798!2d-106.448011!3d31.7761288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x778f2a2f98d0df34!2sBarrett+%2F+Airworks+Service+Co!5e0!3m2!1sen!2sus!4v1541605285425"
    width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.png"
                    alt="Barrett Airworks" class="footer-logo"></div>
            <div class="col-md-3 col-8">
                <p class="footer-contact">Barrett Airworks<br>3750 Durazno Ave.<br>El Paso, TX 79905<br><a
                        href="tel:915-591-8457" title="915-591-8457">915-591-8457</a><br><a
                        href="https://www.facebook.com/Barrett-Airworks-Service-Co-257052545000799/"
                        target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-logo.png"
                            alt="Facebook"></a>
                    <a href="https://twitter.com/BarrettAirworks" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/ba-twitter.png"
                            alt="Facebook"></a>
                    <a href="https://www.linkedin.com/company/barrett-airworks-service-co/" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/ba-linkedin.png"
                            alt="Facebook"></a>
                </p>
            </div>
            <div class="col-md-4">
                <img class="footer-logos" src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logos.png"
                    alt="Barrett Airworks">
            </div>
            <div class="col-md-3">

                <a href="https://www.carrier.com/residential/en/us/find-a-dealer/schedule-now/?zipcode=79905&amp;dealerId=9002293&amp;country=USA&amp;utm_content=dealersite"
                    target="_blank" class="footer-schedule-button aos-init" data-aos="fade-up">Schedule Now</a>
            </div>
        </div>
    </div>
</div>
<a href="https://www.coolelpaso.com/#" title="Contact Us / Request a FREE Quote"
    class="contact-button aos-init aos-animate" data-aos="fade-up" data-toggle="modal"
    data-target="#contactModal">Contact Us /<br>
    Request a FREE Quote</a>


<div class="modal fade" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Request a Quote/Repair/Information</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="form-success none">Thank you for contacting us, we will review your submission and get
                    back to you as soon as possible.</div>
                <div class="form-failure none">Your submission contains errors, please correct them and try again.
                </div>
                <?php 
    echo do_shortcode('[contact-form-7 id="211" title="Contact form 1"]');
?>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/holder.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
AOS.init({
    easing: 'ease-in-sine',
    duration: 1000
});
</script>


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/init.js"></script>


<div id="viewPortSize" class="bottom_right"
    style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); font-size: 12px; opacity: 0.0562933;">Inner:
    2497 x 1184<br>Outer: 2497 x 1312</div>
<div id="chrome_websiteIP" class="chrome_websiteIP_right">104.18.52.78</div>
</body>

</html>