<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
</main>
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
                <p class="credit">designed by <a href="https://www.stantonstreet.com/" target="_blank"
                        title="stantonstreet">stantonstreet</a>.</p>
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
                <form id="formElem" name="formElem" action="https://www.coolelpaso.com/" method="post"
                    class="form-container" novalidate="">
                    <div class=" fb-render">
                        <div class="rendered-form">
                            <div class="fb-text form-group field-text-1528081034071"><label for="text-1528081034071"
                                    class="fb-text-label">Name<span class="fb-required">*</span></label><input
                                    type="text" class="form-control" name="text-1528081034071" id="text-1528081034071"
                                    required="required" aria-required="true"></div>
                            <div class="fb-text form-group field-text-1528081049092"><label for="text-1528081049092"
                                    class="fb-text-label">Email<span class="fb-required">*</span></label><input
                                    type="email" class="form-control" name="text-1528081049092" id="text-1528081049092"
                                    required="required" aria-required="true"></div>
                            <div class="fb-text form-group field-text-1528081063574"><label for="text-1528081063574"
                                    class="fb-text-label">Phone<span class="fb-required">*</span></label><input
                                    type="tel" class="form-control" name="text-1528081063574" id="text-1528081063574"
                                    required="required" aria-required="true"></div>
                            <div class="fb-select form-group field-select-1528081083588"><label
                                    for="select-1528081083588" class="fb-select-label">How can we help you?<span
                                        class="fb-required">*</span></label><select class="form-control"
                                    name="select-1528081083588" id="select-1528081083588" required="required"
                                    aria-required="true">
                                    <option value="Repair" selected="true" id="select-1528081083588-0">Repair
                                    </option>
                                    <option value="Maintenance" id="select-1528081083588-1">Maintenance</option>
                                    <option value="Request a Quote" id="select-1528081083588-2">Request a Quote
                                    </option>
                                    <option value="Need more information" id="select-1528081083588-3">Need more
                                        information</option>
                                </select></div>
                            <div class="fb-textarea form-group field-textarea-1528081155154"><label
                                    for="textarea-1528081155154" class="fb-textarea-label">Comments</label><textarea
                                    type="textarea" class="form-control" name="textarea-1528081155154"
                                    id="textarea-1528081155154"></textarea></div>
                        </div>
                    </div>
                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/form-render.min.js"></script>
<script>
jQuery(function($) {
    $('.fb-render').formRender({
        dataType: 'json',
        formData: [{
            "type": "text",
            "required": true,
            "label": "Name",
            "className": "form-control",
            "name": "text-1528081034071",
            "subtype": "text"
        }, {
            "type": "text",
            "subtype": "email",
            "required": true,
            "label": "Email",
            "className": "form-control",
            "name": "text-1528081049092"
        }, {
            "type": "text",
            "subtype": "tel",
            "required": true,
            "label": "Phone",
            "className": "form-control",
            "name": "text-1528081063574"
        }, {
            "type": "select",
            "required": true,
            "label": "How can we help you?",
            "className": "form-control",
            "name": "select-1528081083588",
            "values": [{
                "label": "Repair",
                "value": "Repair",
                "selected": true
            }, {
                "label": "Maintenance",
                "value": "Maintenance"
            }, {
                "label": "Request a Quote",
                "value": "Request a Quote"
            }, {
                "label": "Need more information",
                "value": "Need more information"
            }]
        }, {
            "type": "textarea",
            "label": "Comments",
            "className": "form-control",
            "name": "textarea-1528081155154",
            "subtype": "textarea"
        }]
    });
    $('#formElem').submit(function(e) {
        e.preventDefault();
        var inputs = new Object();
        var required = new Array();
        var multibox = new Object();
        $(this).find('input, textarea, select, input:checkbox, input:radio').not(
            ':input[type=button], :input[type=submit], :input[type=reset]').each(function() {
            var $this = $(this);
            // get input name and value
            if ($this.is(':checkbox')) {
                var cleanName = $this.attr('name').replace('[]', '');

                $('[name="' + $this.attr('name') + '"]').each(function() {
                    if ($this.is(':checked')) {
                        multibox[$this.attr('name')] += '|' + $this.val();
                    }
                });
                if (multibox.length === 0) {
                    inputs[cleanName] = '';
                } else {
                    inputs[cleanName] = [multibox[$this.attr('name')], $this.attr('type')];
                }


            } else if ($this.is(':radio')) {
                if ($('[name="' + $this.attr('name') + '"]').is(':checked')) {
                    inputs[$this.attr('name')] = [$('[name="' + $this.attr('name') +
                        '"]:checked').val(), $this.attr('type')];
                } else {
                    inputs[$this.attr('name')] = '';
                }
            } else {
                inputs[$this.attr('name')] = [$this.val(), $this.attr('type')];
            }
            // get required
            if ($this.prop('required')) {
                required.push($this.attr('name'));
            }
        });
        required = jQuery.unique(required);
        $.ajax({
            async: false,
            url: '/form-action.php',
            method: 'POST',
            data: {
                'form_action': 'submit',
                'form_id': '1',
                form_inputs: inputs,
                form_required: required
            },
            success: function(data) {
                if (data) {
                    console.log(data);
                    var response = jQuery.parseJSON(data);
                    var formOutcome = response.formOutcome;
                    var messages = response.messages;
                    for (var messageName in messages) {
                        var message = messages[messageName];
                        var errorContainer = $(".field-" + messageName);
                        if (message.type == 'failure') {
                            // Sroll to top of form
                            $("html, body").animate({
                                scrollTop: $('#formElem').offset().top + "px"
                            });
                            $('.error-' + messageName).slideUp().remove();
                            errorContainer.after(
                                "<span class='label label-danger error-" +
                                messageName + "'>" + message.text + "</span>");
                            $('.error-' + messageName).show()

                        } else {
                            $('.error-' + messageName).slideUp().remove();
                        }
                        if (formOutcome.status == "success") {
                            // Google Analytics Code
                            $('.form-success').slideDown();
                            $('.form-failure').hide();
                            $('#formElem').hide();
                            window.dataLayer = window.dataLayer || []
                            window.dataLayer.push({
                                'event': 'formSubmissions',
                                'formType': 'Contact us',
                            });
                            //ga('send', 'pageview', '/contact-us/success');
                        } else {
                            $('.form-failure').slideDown();
                        }
                    }
                }
            }
        });
    });
});
</script>


<div id="viewPortSize" class="bottom_right"
    style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); font-size: 12px; opacity: 0.0562933;">Inner:
    2497 x 1184<br>Outer: 2497 x 1312</div>
<div id="chrome_websiteIP" class="chrome_websiteIP_right">104.18.52.78</div>
</body>

</html>