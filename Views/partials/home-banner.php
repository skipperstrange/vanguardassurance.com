<!-- Option 1-->
<!--div class="container position-relative pb-5 mb-5">
<?php include_once PARTIALS.'left-flair-full.php' ?>
	
	<?= create_tag_element('img',['src'=>IMAGES_URL.'vman.png', 'class'=>'img-fluid position-absolute top-10 right-0 z-index-1 d-none d-lg-block appear-animation animated fadeIn appear-animation-visible',
					'data-appear-animation'=>"fadeIn", 'data-appear-animation-delay'=>"100",
					'alt'=>"Hero", 'style'=>"animation-delay: 100ms;"
					],false ) ?>
	<div class="row align-items-center pb-5 mb-4">
		<div class="col-lg-6">
			<h1 class="font-weight-bold text-color-light custom-big-text-1 ws-nowrap pt-5 pb-5-5 mb-1 my-md-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" style="animation-delay: 600ms;">
				<span class="d-none d-lg-block">INSURANCE</span>
			</h1>
			<h2 class="text-color-dark font-weight-bold text-12 line-height-3 mb-2 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">Providing Insurance Protection For You</h2>
			<p class="text-color-dark text-4 font-weight-medium mb-4-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">Surprisingly great rates, get started right now. </p>
			<a href="" class="btn btn-primary btn-rounded border-0 font-weight-bold text-3 px-5 btn-py-3 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">GET STARTED</a>
		</div>
		<div class="col-lg-3 ms-lg-auto mb-lg-5 d-none d-lg-block">
			<ul class="list list-unstyled">
				<li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5-5 appear-animation animated appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">HOME</li>
				<li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5 ms-5 position-relative left-8 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" style="animation-delay: 800ms;">TRAVEL</li>
				<li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5 ms-5 position-relative left-12 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">&nbsp;FIRE</li>
				<li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5 ms-5 position-relative left-15 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">CAR</li>
			</ul>
		</div>
	</div>
</div-->
<!-- End Option 1-->
		
<!-- Option 2-->
<!--div class="slider-container rev_slider_wrapper" style="height: 670px;">
	<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
		<ul>
			<li data-transition="fade">
				<img src="<?= IMAGES_URL?>slide-2-empty.jpg"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="rev-slidebg">
				<div class="tp-caption"
					data-x="center" data-hoffset="['-150','-150','-150','-240']"
					data-y="center" data-voffset="['-50','-50','-50','-75']"
					data-start="1000"
					data-transform_in="x:[-300%];opacity:0;s:500;"
					data-transform_idle="opacity:0.2;s:500;"><img src="<?= IMAGES_URL?>dummy/slides/slide-title-border.png" alt=""></div>

				<div class="tp-caption text-color-light font-weight-normal"
					data-x="center"
					data-y="center" data-voffset="['-50','-50','-50','-75']"
					data-start="700"
					data-fontsize="['22','22','22','40']"
					data-lineheight="['25','25','25','45']"
					data-transform_in="y:[-50%];opacity:0;s:500;">SAFEGUARD ALL THOSE ENJOIABLE</div>

				<div class="tp-caption d-none d-md-block"
					data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center" data-hoffset="['80','80','80','135']"
					data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="<?= IMAGES_URL?>dummy/slides/slide-blue-line.png" alt=""></div>

				<div class="tp-caption"
					data-x="center" data-hoffset="['150','150','150','240']"
					data-y="center" data-voffset="['-50','-50','-50','-75']"
					data-start="1000"
					data-transform_in="x:[300%];opacity:0;s:500;"
					data-transform_idle="opacity:0.2;s:500;"><img src="<?= IMAGES_URL?>dummy/slides/slide-title-border.png" alt=""></div>

				<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
					data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center"
					data-y="center"
					data-fontsize="['50','50','50','90']"
					data-lineheight="['55','55','55','95']">MOMENTS</div>

				<div class="tp-caption font-weight-light"
					data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
					data-x="center"
					data-y="center" data-voffset="['40','40','40','80']"
					data-fontsize="['18','18','18','50']"
					data-lineheight="['20','20','20','55']"
					style="color: #fff;"><strong>INSURE</strong> WITH VANGUARD</div>
				
			</li>
			<li class="slide-overlay" data-transition="fade">
				<img src="<?= IMAGES_URL?>value-man-home-car.png"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="rev-slidebg">

				<div class="tp-caption"
					data-x="center" data-hoffset="['-170','-170','-170','-350']"
					data-y="center" data-voffset="['-50','-50','-50','-75']"
					data-start="1000"
					data-transform_in="x:[-300%];opacity:0;s:500;"
					data-transform_idle="opacity:0.2;s:500;"><img src="<?= IMAGES_URL?>dummy/slides/slide-title-border.png" alt=""></div>

				<div class="tp-caption text-color-light font-weight-normal"
					data-x="center"
					data-y="center" data-voffset="['-50','-50','-50','-75']"
					data-start="700"
					data-fontsize="['16','16','16','40']"
					data-lineheight="['25','25','25','45']"
					data-transform_in="y:[-50%];opacity:0;s:500;">FA BOM PRƐKO WITH</div>

				<div class="tp-caption"
					data-x="center" data-hoffset="['170','170','170','350']"
					data-y="center" data-voffset="['-50','-50','-50','-75']"
					data-start="1000"
					data-transform_in="x:[300%];opacity:0;s:500;"
					data-transform_idle="opacity:0.2;s:500;"><img src="<?= IMAGES_URL?>dummy/slides/slide-title-border.png" alt=""></div>
					

				<div class="tp-caption font-weight-extra-bold negative-ls-1"
					data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center"
					data-y="center"
					data-fontsize="['50','50','50','90']"
					data-lineheight="['55','55','55','95']" style="background-color:orange; padding:auto 10px; color:#blue;">&nbsp;&nbsp;HOMEPRENSIVE&nbsp;&nbsp;&nbsp;</div>

					<div class="tp-caption font-weight-light ws-normal text-center"
					data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
					data-x="center"
					data-y="center" data-voffset="['60','60','60','105']"
					data-width="['530','530','530','1100']"
					data-fontsize="['18','18','18','40']"
					data-lineheight="['26','26','26','45']"
					style="color: #b5b5b5;">A single policy for <strong class="text-color-light">your car and home</strong></div>

				
					<div class="tp-caption font-weight-light ws-normal text-center"
					data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
					data-x="center"
					data-y="center" data-voffset="['60','60','60','105']"
					data-width="['530','530','530','1100']"
					data-fontsize="['18','18','18','40']"
					data-lineheight="['26','26','26','45']"
					style="color: #b5b5b5;">
					
				</div>

					
				
			</li>
			<li data-transition="fade">
				<img src="<?= IMAGES_URL?>matrix-guy.png"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="rev-slidebg">

				<div class="tp-caption"
					data-x="center" data-hoffset="['-145','-145','-145','-320']"
					data-y="center" data-voffset="['-80','-80','-80','-130']"
					data-start="1000"
					data-transform_in="x:[-300%];opacity:0;s:500;"
					data-transform_idle="opacity:0.2;s:500;"><img src="<?= IMAGES_URL?>dummy/slides/slide-title-border.png" alt=""></div>

				<div class="tp-caption text-color-light font-weight-normal"
					data-x="center"
					data-y="center" data-voffset="['-80','-80','-80','-130']"
					data-start="700"
					data-fontsize="['16','16','16','40']"
					data-lineheight="['25','25','25','45']"
					data-transform_in="y:[-50%];opacity:0;s:500;">STAY AHEAD OF THE</div>

				<div class="tp-caption"
					data-x="center" data-hoffset="['145','145','145','320']"
					data-y="center" data-voffset="['-80','-80','-80','-130']"
					data-start="1000"
					data-transform_in="x:[300%];opacity:0;s:500;"
					data-transform_idle="opacity:0.2;s:500;"><img src="<?= IMAGES_URL?>dummy/slides/slide-title-border.png" alt=""></div>

				<div class="tp-caption font-weight-extra-bold text-color-light"
					data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center" data-hoffset="['-155','-155','-155','-255']"
					data-y="center"
					data-fontsize="['145','145','145','250']"
					data-lineheight="['150','150','150','260']">C</div>

				<div class="tp-caption font-weight-extra-bold text-color-light"
					data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center" data-hoffset="['-80','-80','-80','-130']"
					data-y="center"
					data-fontsize="['145','145','145','250']"
					data-lineheight="['150','150','150','260']">U</div>

				<div class="tp-caption font-weight-extra-bold text-color-light"
					data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center"
					data-y="center"
					data-fontsize="['145','145','145','250']"
					data-lineheight="['150','150','150','260']">R</div>

				<div class="tp-caption font-weight-extra-bold text-color-light"
					data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center" data-hoffset="['65','65','65','115']"
					data-y="center"
					data-fontsize="['145','145','145','250']"
					data-lineheight="['150','150','150','260']">V</div>

				<div class="tp-caption font-weight-extra-bold text-color-light"
					data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="center" data-hoffset="['139','139','139','240']"
					data-y="center"
					data-fontsize="['145','145','145','250']"
					data-lineheight="['150','150','150','260']">E</div>

				<div class="tp-caption font-weight-light text-color-light"
					data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
					data-x="center"
					data-y="center" data-voffset="['85','85','85','140']"
					data-fontsize="['18','18','18','40']"
					data-lineheight="['26','26','26','45']">WITH <stron>VANGUARD ASSURANCE</stron>g</div>
				
			</li>
		</ul>
	</div>
</div-->
<link rel='stylesheet' href="<?= CSS_PATH ?>slider.layer.css">
<link rel='stylesheet' href="<?= CSS_PATH ?>slider.settings.css">
<link rel='stylesheet' href="<?= CSS_PATH ?>slider.navigation.css">
<!-- End Option 2 -->
<!-- End Option 2 -->
<!-- End Option 2 -->



<!-- Option 3-->
<!-- Option 3-->
<!-- Option 3-->
<div class="slider-container rev_slider_wrapper" style="height: 670px;">

					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'fullScreenOffsetContainer': '#header', 'delay': 9000, 'gridwidth': [1410,1110,930,690], 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1422,1182,974], 'navigation' : {'arrows': { 'enable': true, 'style': 'metis arrows-primary arrows-rounded' }, 'bullets': {'enable': false}}}">
						<ul>

						<li class="slide-overlay slide-overlay-info text-white" data-transition="fade">
								<img src="<?=IMAGES_URL?>whatsapp-white-valueman-right.jpg"  
									alt=""
									data-bgposition="right center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption d-none d-sm-block"
									data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;","to":"o:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image" 
								    data-x="['right','right','right','center']" data-hoffset="['145','145','0','0']"
								    data-y="center"
								    data-width="['auto']"
									data-height="['auto']"
									data-basealign="grid"><img src="<?=IMAGES_URL.'whatsapp-white-valueman-right.png'?>" alt="" height="100" width="100"></div>
								<!--	
								<div class="tp-caption tp-resizeme d-none d-sm-block"
									data-frames='[{"delay":3000,"speed":2000,"from":"opacity:0;x:0;","to":"o:1;x:0;","ease":"Power1.easeIn"},{"delay":"wait","speed":500,"to":"opacity:0;fb:0;","ease":"Power1.easeIn"}]'
								    data-type="image" 
								    data-x="['right','right','right','center']" data-hoffset="['270','270','120','0']"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
									data-basealign="grid"><img src="img/slides/slide-corporate-15-2.png" alt=""></div>
									-->
								<div class="tp-caption overlay d-none d-sm-block d-lg-none overlay-show overlay-color-primary overlay-op-8"
									data-frames='[{"delay":0}]'
									data-x="center"
									data-y="center"
									data-height="1000"
									data-width="100%"
									data-basealign="slide"></div>
									
								<div class="tp-caption font-weight-extra-bold  line ws-normal"
									data-frames='[{"delay":1500,"speed":400,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['-85','-85','-85','-85']"
									data-width="['500','500','500','500']"
									data-fontsize="['48','48','48','48']"
									data-lineheight="['55','55','55','55']"
									data-textAlign="['left','left','left','center']">
									GET INSURANCE ON WHATSAPP WITH VALUE MAN <br>
								</div>

								
								<div class="tp-caption font-weight-light mt-2 opacity-7 ws-normal font-weight-bold"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['10','10','10','10']"
									data-width="['900','900','900','900']"
									data-fontsize="['27','27','27','33']"
									data-lineheight="['26','26','26','26']"
									data-textAlign="['left','left','left','center']">All in one insurance center.
									</div>
								


								<a class="tp-caption d-inline-flex align-items-center mt-2 btn btn-success font-weight-bold rounded"
									href="<?= whatsappUrl('0242426444')?>"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['65','65','65','65']"
									data-paddingtop="['16','16','16','24']"
									data-paddingbottom="['16','16','16','24']"
									data-paddingleft="['30','30','30','30']"
									data-paddingright="['15','15','15','15']"
									data-fontsize="['13','13','13','18']"
									data-lineheight="['20','20','20','22']"><i class="fab fa-whatsapp mr-2 text-5"></i> Get Started</a>

							</li>

							<li data-transition="fade" class=" overlay-show overlay-color-primary">
								<img src="<?=IMAGES_URL.'office-faded-1-deep.jpg'?>"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption tp-resizeme d-none d-sm-block"
									data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;","to":"o:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image" 
								    data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
									data-basealign="grid"><img src="<?=IMAGES_URL.'matrix-guy-small-left.png'?>" alt=""></div>
									
								<!--<div class="tp-caption tp-resizeme d-none d-sm-block"
									data-frames='[{"delay":3000,"speed":2000,"from":"opacity:0;x:0;","to":"o:1;x:0;","ease":"Power1.easeIn"},{"delay":"wait","speed":500,"to":"opacity:0;fb:0;","ease":"Power1.easeIn"}]'
								    data-type="image" 
								    data-x="['left','left','left','center']" data-hoffset="['270','270','120','0']"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
									data-basealign="grid"><img src="img/slides/circle.png" alt=""></div>-->
									
								<div class="tp-caption overlay d-none d-sm-block d-lg-none overlay-op-8"
									data-frames='[{"delay":0}]'
									data-x="center"
									data-y="center"
									data-height="1000"
									data-width="100%"
									data-basealign="slide"></div>


								<h1 class="tp-caption font-weight-extra-bold text-color-light line ws-normal"
									data-frames='[{"delay":1500,"speed":400,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['-85','-85','-85','-85']"
									data-width="['500','500','500','500']"
									data-fontsize="['48','48','48','48']"
									data-lineheight="['55','55','55','55']"
									data-textAlign="['left','left','left','center']">STAY AHEAD OF THE CURVE.</h1>


								<div class="tp-caption font-weight-light text-color-light opacity-7 ws-normal"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['0','0','0','0']"
									data-width="['500','500','500','500']"
									data-fontsize="['18','18','18','22']"
									data-lineheight="['26','26','26','26']"
									data-textAlign="['left','left','left','center']">WITH VANGUARD ASSURANCE<br>
								</div>

								<a class="tp-caption d-inline-flex align-items-center btn btn-primary font-weight-bold rounded"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['170','170','70','0']"
									data-y="center" data-voffset="['65','65','65','65']"
									data-paddingtop="['16','16','16','24']"
									data-paddingbottom="['16','16','16','24']"
									data-paddingleft="['30','30','30','30']"
									data-paddingright="['15','15','15','15']"
									data-fontsize="['13','13','13','18']"
									data-lineheight="['20','20','20','22']">Get a Quote <i class="fas fa-agirrow-right ml-4 pl-1 mr-2 text-4"></i></a>

							</li>

							<li class="slide-overlay slide-overlay-primary text-white" data-transition="fade">
								<img src="img/slides/slide-bg-light-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption d-none d-sm-block"
									data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;","to":"o:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image" 
								    data-x="['right','right','right','center']" data-hoffset="['145','145','0','0']"
								    data-y="center"
								    data-width="['auto']"
									data-height="['auto']"
									data-basealign="grid"><img src="<?=IMAGES_URL.'vman.png'?>" alt="" height="100" width="100"></div>
								<!--	
								<div class="tp-caption tp-resizeme d-none d-sm-block"
									data-frames='[{"delay":3000,"speed":2000,"from":"opacity:0;x:0;","to":"o:1;x:0;","ease":"Power1.easeIn"},{"delay":"wait","speed":500,"to":"opacity:0;fb:0;","ease":"Power1.easeIn"}]'
								    data-type="image" 
								    data-x="['right','right','right','center']" data-hoffset="['270','270','120','0']"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
									data-basealign="grid"><img src="img/slides/slide-corporate-15-2.png" alt=""></div>
									-->
								<div class="tp-caption overlay d-none d-sm-block d-lg-none overlay-show overlay-color-primary overlay-op-8"
									data-frames='[{"delay":0}]'
									data-x="center"
									data-y="center"
									data-height="1000"
									data-width="100%"
									data-basealign="slide"></div>
									
								<div class="tp-caption font-weight-extra-bold text-color-light line ws-normal"
									data-frames='[{"delay":1500,"speed":400,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['-85','-85','-85','-85']"
									data-width="['500','500','500','500']"
									data-fontsize="['48','48','48','48']"
									data-lineheight="['55','55','55','55']"
									data-textAlign="['left','left','left','center']">
									HOMEPREHENSIVE <br>
									Fa Bom PrƐko
								</div>

								
								<div class="tp-caption font-weight-light text-color-light mt-2 opacity-7 ws-normal"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['10','10','10','10']"
									data-width="['900','900','900','900']"
									data-fontsize="['27','27','27','33']"
									data-lineheight="['26','26','26','26']"
									data-textAlign="['left','left','left','center']">A single insurance policy for your vehicle and home.
									</div>
								


								<a class="tp-caption d-inline-flex align-items-center mt-2 btn btn-info font-weight-bold rounded"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['65','65','65','65']"
									data-paddingtop="['16','16','16','24']"
									data-paddingbottom="['16','16','16','24']"
									data-paddingleft="['30','30','30','30']"
									data-paddingright="['15','15','15','15']"
									data-fontsize="['13','13','13','18']"
									data-lineheight="['20','20','20','22']">Get a Quote<i class="fas fa-arrow-right ml-4 pl-1 mr-2 text-4"></i></a>

							</li>

							<li class=" slide-overlay-none text-white" data-transition="fade">
								<img src="<?=IMAGES_URL.'slide-2-empty-reverse.jpg'?>"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								
								<!--	
								<div class="tp-caption tp-resizeme d-none d-sm-block"
									data-frames='[{"delay":3000,"speed":2000,"from":"opacity:0;x:0;","to":"o:1;x:0;","ease":"Power1.easeIn"},{"delay":"wait","speed":500,"to":"opacity:0;fb:0;","ease":"Power1.easeIn"}]'
								    data-type="image" 
								    data-x="['right','right','right','center']" data-hoffset="['270','270','120','0']"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
									data-basealign="grid"><img src="img/slides/slide-corporate-15-2.png" alt=""></div>
									-->
								<div class="tp-caption overlay d-none d-sm-block d-lg-none overlay-show overlay-color-primary overlay-op-8"
									data-frames='[{"delay":0}]'
									data-x="center"
									data-y="center"
									data-height="1000"
									data-width="100%"
									data-basealign="slide"></div>
									
								<div class="tp-caption font-weight-extra-bold text-color-light line ws-normal"
									data-frames='[{"delay":1500,"speed":400,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['-85','-85','-85','-85']"
									data-width="['500','500','500','500']"
									data-fontsize="['48','48','48','48']"
									data-lineheight="['55','55','55','55']"
									data-textAlign="['left','left','left','center']">
									ALL YOUR FUN MEMORIES <br>
									SAFELY INSURED
								</div>

								
								<div class="tp-caption font-weight-light text-color-light mt-2 opacity-7 ws-normal"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['10','10','10','10']"
									data-width="['900','900','900','900']"
									data-fontsize="['27','27','27','33']"
									data-lineheight="['26','26','26','26']"
									data-textAlign="['left','left','left','center']"><strong> With Vanguard Assurance</strong>
									</div>
								


								<a class="tp-caption d-inline-flex align-items-center mt-2 btn btn-info font-weight-bold rounded"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['left','left','left','center']" data-hoffset="['145','145','0','0']"
									data-y="center" data-voffset="['65','65','65','65']"
									data-paddingtop="['16','16','16','24']"
									data-paddingbottom="['16','16','16','24']"
									data-paddingleft="['30','30','30','30']"
									data-paddingright="['15','15','15','15']"
									data-fontsize="['13','13','13','18']"
									data-lineheight="['20','20','20','22']">Get a Quote<i class="fas fa-arrow-right ml-4 pl-1 mr-2 text-4"></i></a>

							</li>
						</ul>
					</div>
				</div>

				<!-- Only Use for Option 3-->
				<!-- Only Use for Option 3-->
				
<!-- End Option 3-->
<!-- End Option 3-->
<!-- End Option 3-->
	