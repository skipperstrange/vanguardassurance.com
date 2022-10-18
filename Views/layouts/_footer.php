
<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-3 pb-0 my-4">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0 mb-5">
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
						
						<div class="col-md-6 col-lg-2 mb-5">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<p class="pr-1">Follow us to for more activitities aon our social media handles.</p>

							<ul class="social-icons text-center text-sm-left">
									<?php            
									foreach ($data['socialMediaLinks'] as $socialMediaLink) {

                                    ?>
                                    <li class="social-icons-<?= $socialMediaLink['title']?>"><a href="<?= $socialMediaLink['href'] ?>" target="_blank" title="<?= format_string($socialMediaLink['title']) ?>"><i class="<?= $socialMediaLink['icon']?>"></i></a></li>
                                    <?php
                                    }
                                    ?>
								</ul>
						</div>
						<div class="col-md-6 col-lg-4 mb-5">
							<h5 class="text-3 mb-3 text-uppercase">Available Now</h5>
							
							<div>
								<p class="pr-1">Keep up on our ever evolving product features and technology. Download the app from the app store!</p>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="<?=PLAYSTORE_LINK?>" target="_blank" class="link-block-3 w-inline-block"><img class="img-fluid" src="<?= IMAGES_URL ?>play.webp" alt=""></a>	
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="<?=APP_STORE_LINK ?>" target="_blank" class="link-block-4 w-inline-block"><img class="img-fluid" src="<?= IMAGES_URL ?>store.webp" alt=""></a>
									</div>								
								</div>								
							</div>
						</div>
						<div class="col-md-6 col-lg-3  mb-0">
							<h5 class="text-3 mb-3 text-uppercase">Quick Links</h5>
							<ul class="list list-icons list-icons-sm">
								<?php 
								foreach($navLinks as $label => $link): 
									if(trim($navLinks[$label]['href']) != ''): ?>
								<li><i class="fas fa-angle-right"></i><a href="<?=$navLinks[$label]['href']?>" target="<?=$navLinks[$label]['target']?>" class="link-hover-style-1 ml-1"> <?=ucfirst(format_string($label)) ?></a></li>
								<?php 
									endif;
								endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-0">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="index.html" class="logo pr-0 pr-lg-3">
                                    <?= create_tag_element('img', ['src'=>IMAGES_URL.'cropped-Vanguard-logo-simple.png', 'class'=>'opacity-8', 'alt'=>'', 'height'=>'40'], false); ?>
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p><?= CLIENT_NAME ?> <?= strtotime('%y',time()) ?> </p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li>
                                          <!--  <?= create_tag_element('i', ['class'=>'fas fa-angle-right']).create_tag_element('a', ['class'=>'ml-1 text-decoration-none', 'href'=>_link('faq')], 'FAQ\'s') ?> -->
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

<script>
    $(".timeago").each(function(i,el){
        var element = $(el);
        // Change text of element to a human readable date with ago
        // like 2 minutes, 2 hours
        element.text(ago(element.attr("timestamp")));
    });
</script>
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