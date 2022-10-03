
<?php
include_once PARTIALS.'sub-header.php';
?>

<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="googlemaps" class="google-map mt-0" style="height: 500px;">
    <div class="et_pb_text_inner">
        <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.021523532671!2d-0.19739193603724475!3d5.563827345966047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a7837aec08b%3A0x29f2c1402983026f!2sVanguard%20Assurance%20Company%20Limited!5e0!3m2!1sen!2sgh!4v1651650610209!5m2!1sen!2sgh" width="100%" height="500" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
    </div>
</div>

<div class="container">

    <div class="row py-4">
        <div class="col-lg-6">

            <div class="overflow-hidden mb-1">
                <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
            </div>
            <div class="overflow-hidden mb-4 pb-3">
                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Send us your questions.</p>
            </div>

            <form class="contact-form" action="<?= _link('process-contact-form') ?>" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>
            
                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="font-weight-bold text-dark text-2">Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="required font-weight-bold text-dark text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-6">

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> <?= STREET_ADDRESS ?></li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> <?= SUPPORT_CONTACT_2 ?></li>
                    <li><i class="fab fa-whatsapp top-6"></i> <strong class="text-dark">Whatsapp:</strong> <?= SUPPORT_CONTACT_1 ?></li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:<?= SUPPORT_EMAIL ?>"><?= SUPPORT_EMAIL ?></a></li>
                </ul>
            </div>

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                <h4 class="pt-5">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> Monday - Friday - 8am to 4:30pm</li>
                    <li><i class="far fa-clock top-6"></i> Saturday - Closed</li>
                    <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                </ul>
            </div>

            <h4 class="pt-5">Get in <strong>Touch</strong></h4>
            <p class="lead mb-0 text-4">
                What ever your needs, our agents are ever ready and available for you. Just Give us a call or send us a message!
            </p>

        </div>

    </div>

</div>

</div>

<!-- Locations -->

<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

<div class="container py-2">
    <div class="row mb-3 pb-3">
        <div class="col-12">
        <h4 class="mt-2 mb-1">Our <strong>Offices</strong></h4>
        </div>
        <?php foreach($data['branches'] as $branch): 
        $email = strtolower(toAscii($branch['branch'], [' ','-'], '')). '@vanguardassurance.com';
        ;
            ?>
        <div class="col-md-6 col-lg-4 appear-animation mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
            <div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
                <div class="card-body">
                    <h4 class="card-title mb-1 text-3 font-weight-bold transition-2ms"><?= $branch['branch'] ?></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2 text-2">
           <?php if(trim($branch['location'] ) != ''): ?>
                    <li><i class="fas fa-map-marker-alt top-6"></i> <?= $branch['location'] ?>, <?= $branch['landmark'] ?></li>
             <?php endif ?>
                    <li><i class="fas fa-phone top-6"></i> <?= $branch['contact'] ?></li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark"></strong> <a href="mailto:<?= $email ?>"><?= $email ?></a></li>
                </ul>
                </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>		
    </div>
</div>

<?php include PARTIALS.'footer-banner.php'; ?>


		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			/*var mapMarkers = [{
				address: "<?= STREET_ADDRESS ?>",
				html: "<strong>Head Office</strong><br> <?= STREET_ADDRESS ?>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = <?= LAT ?>;
			var initLongitude = <?= LON ?>;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 11
			};

			var map = $('#googlemaps').gMap(mapSettings);

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}
            */

		</script>
