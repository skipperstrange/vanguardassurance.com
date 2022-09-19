
<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">NEWSLETTER</h5>
							<p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">LATEST TWEETS</h5>
							<!--div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'VanguardGH', 'count': 2}">
								<p>Please wait...</p>
							</!--div>
                            <!--div id="tweets" class="text-1">
                            <a class="twitter-timeline" data-dnt="true" data-theme="dark" data-chrome="noscrollbar" data-height="200" href="<?= TWITTER ?>" data-widget-id="628348263834456064">Tweets by @<?= CLIENT_NAME ?></a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                           
                            </!--div-->
                            
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">CONTACT US</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0"><?= STREET_ADDRESS ?></p></li>
									<li class="mb-1"><i class="fas fa-phone text-color-primary"></i><p class="m-0"><a href="tel:<?= SUPPORT_CONTACT_2 ?>"><?= SUPPORT_CONTACT_2 ?></a></p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-success"></i><p class="m-0"><a href="<?= whatsappUrl(SUPPORT_CONTACT_1_CLEAN) ?>" target="_blank"><?= SUPPORT_CONTACT_1 ?></a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="<?= SUPPORT_EMAIL ?>"><?= SUPPORT_EMAIL ?></a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<ul class="social-icons">
                <?php            
                foreach ($socialMediaLinks as $socialMediaLink) {

                                    ?>
                                    <li class="social-icons-<?= $socialMediaLink['title']?>"><a href="<?= $socialMediaLink['href'] ?>" target="_blank" title="<?= format_string($socialMediaLink['title']) ?>"><i class="<?= $socialMediaLink['icon']?>"></i></a></li>
                                    <?php
                                    }
                                    ?>
								</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="index.html" class="logo pr-0 pr-lg-3">
                                    <?= create_tag_element('img', ['src'=>IMAGES_URL.'cropped-Vanguard-logo-simple.png', 'class'=>'opacity-8', 'alt'=>'', 'height'=>'40'], false); ?>
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright Vanguard <?= strtotime('%y',time()) ?> skipnet&copy; applications powered by Porto.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li>
                                            <?= create_tag_element('i', ['class'=>'fas fa-angle-right']).create_tag_element('a', ['class'=>'ml-1 text-decoration-none', 'href'=>_link('faq')], 'FAQ\'s') ?>
                                        </li>
										<li>
                                            <?= create_tag_element('i', ['class'=>'fas fa-angle-right']).create_tag_element('a', ['class'=>'ml-1 text-decoration-none', 'href'=>_link('contact-us')], 'Contact us') ?>
                                        </li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		

</div><!-- div.body end -->
<?= generate_tag_group('script', $footerJs);?>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?=GOOGLE_ANALYITICS_ID ?>', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>

</html>