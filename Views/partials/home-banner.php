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
		
<div class="slider-container rev_slider_wrapper" style="height: 670px;">
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
					data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

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
					data-lineheight="['55','55','55','95']">WEB DESIGN?</div>

				<div class="tp-caption font-weight-light"
					data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
					data-x="center"
					data-y="center" data-voffset="['40','40','40','80']"
					data-fontsize="['18','18','18','50']"
					data-lineheight="['20','20','20','55']"
					style="color: #fff;">Check out our options and features</div>
				
			</li>
			<li class="slide-overlay" data-transition="fade">
				<img src="<?= IMAGES_URL?>homeprehensive-centered.png"  
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
				
			</li>
			<li class="slide-overlay" data-transition="fade">
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
</div>
<link rel='stylesheet' href="<?= CSS_PATH ?>slider.layer.css">
<link rel='stylesheet' href="<?= CSS_PATH ?>slider.settings.css">
<link rel='stylesheet' href="<?= CSS_PATH ?>slider.navigation.css">

<script>
/*
Name: 			View - Home
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	8.0.0
*/

(function($) {

'use strict';


}).apply(this, [jQuery]);
</script>

				