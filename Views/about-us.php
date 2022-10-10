<?php
$cs = [
    
		['rel'=>"stylesheet", "src"=>CSS_PATH."theme-blog.css"],
		['rel'=>"stylesheet", "src"=>CSS_PATH."theme-shop.css"]
] ;

//echo generate_tag_group('link',$cs, false) ;
//generate_tag_group('script',$js);
include PARTIALS.'header-jumbo.php';

?>

				<div class="container">

					<div class="row pt-5">
						<div class="col">

							<div class="row text-center pb-5">
								<div class="col-md-12 mx-md-auto">
									<div class="overflow-hidden mb-3">
										<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
											<span>The Vanguard Assurance </span>
											<span class="word-rotator-words bg-primary">
												<b class="is-visible">Story</b>
												<b>Vision</b>
												<b>Mission</b>
												<b>Value</b>
											</span>
										</h1>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="lead mb-0 appear-animation text-justify" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                        Vanguard Assurance Company Limited began operations in October <span class="alternative-font">1974</span> as a composite insurance company
                                        and has the enviable record of being the first private indigenous insurance company in Ghana.At inception, Vanguard offered only two classes of business – Life and Fire. Over the years, the company diversified its product portfolio into one-stop composite insurance company underwriting all the major classes of Life and Non-Life insurance.

                    Today, Vanguard Assurance is a subsidiary of the Vanguard Group underwriting only non-life insurances.

                    As a pacesetter, Vanguard Assurance played a leading role in the establishment of the quite a number of successful companies.
										</p>
									</div>
								</div>
							</div>

							<div class="row mt-3 mb-5">
								<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
									<h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
									<ul class="list list-icons list-icons-style-3">
										<li><i class="fas fa-check"></i> To offer financial security through innovative insurance solutions that delight our customers.</li>
										
								</div>
								<div class="col-md-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
								<img src="<?=IMAGES_URL?>generic-1.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
								</div>
								<div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									<h3 class="font-weight-bold text-4 mb-2">Our Vision</h3><ul class="list list-icons list-icons-style-3">
									<ul class="list list-icons list-icons-style-3">
										<li><i class="fas fa-check"></i>To be the preferred Insurer fulfilling our customer needs and aspirations.</li>
                                    </ul>
								</div>
								<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
									<h3 class="font-weight-bold text-4 mb-2">Values</h3>
									<ul class="list list-icons list-icons-style-3">
                                        <li><i class="fas fa-check"></i> We believe the customer is always right</li>
                                        <li><i class="fas fa-check"></i> We esteem integrity and honesty</li>
                                        <li><i class="fas fa-check"></i> We esteem integrity and honesty</li>
                                        <li><i class="fas fa-check"></i> We reward productivity and innovation</li>
                                        <li><i class="fas fa-check"></i> We are one family</li>
                                    </ul>
								</div>
							</div>

						</div>
					</div>

				</div>

                <?php include PARTIALS.'portfolio-full-width.php'; ?>

				<section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
								<p class="lead">Vanguard Assurance not only stands tall because of its passion for excellence in service delivery but also for prompt claims settlement.</p>
								<p class="pr-5 mr-5">
                                Our claims payment ability coupled with excellent customer service has led us to win several laurels from reputable industry players including the Chartered Institute of Marketing Ghana, The Ghana Club 100 and the Insurance Brokers Association of Ghana.
                                </p>
							</div>
							<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
								<!--img src="<?=IMAGES_URL?>generic-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
								<img src="<?=IMAGES_URL. 'dummy/'?>generic-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" /-->
								<img src="<?=IMAGES_URL?>generic-1.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
							</div>
						</div>
					</div>
				</section>

				<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
					<div class="row pt-5 pb-4 my-5">
						<div class="col-md-6 order-2 order-md-1 text-center text-md-left">

							<div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
								<?php 
                                for($i=0; $i < 4; $i++): 
                                ?>
                                <div>
									<img class="img-fluid rounded-0 mb-4" src="<?=$ourTeam[$i]['img']?>" alt="<?=$ourTeam[$i]['name']?> - <?=$ourTeam[$i]['title']?>" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0"><?=$ourTeam[$i]['name']?></h3>
									<p class="text-2 mb-0"><?=$ourTeam[$i]['title']?></p>
								</div>
                                <?php endfor; ?>
							</div>
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container pb-2">
						<div class="row">
							<div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<div class="row justify-content-center my-5">
									<div class="col-8 text-center col-md-4">
										<img src="<?=IMAGES_URL. 'dummy/'?>logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
									</div>
									<div class="col-8 text-center col-md-4 my-3 my-md-0">
										<img src="<?=IMAGES_URL. 'dummy/'?>logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
									</div>
									<div class="col-8 text-center col-md-4">
										<img src="<?=IMAGES_URL. 'dummy/'?>logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
											<div class="testimonial-author">
												<img src="<?=IMAGES_URL. 'dummy/'?>clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
											</div>
										</div>
									</div>
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
											<div class="testimonial-author">
												<img src="<?=IMAGES_URL. 'dummy/'?>clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
