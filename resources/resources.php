<?php
// App Metadata
$metadata = [
    ['charset'=>"utf-8", 'http-equiv'=>"X-UA-Compatible",'content'=>"IE=edge"],
    
    ['name'=>"keywords", 'content'=>"We stand by you, Vanguard Assurance"],
    ['name'=>"viewport", 'content'=>"user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no", "media"=>"(device-height: 568px)"],
    ['name'=>"apple-mobile-web-app-capable", 'content'=>"yes"],
    ['name'=>"apple-mobile-web-app-capable-status-bar-style", 'content'=>"blue"],
    ['name'=>"author", 'content'=>"skipperstrange@gmail.com"],
 //   ['name'=>"google-site-verification", 'content'=>GOOGLE_SITE_VERIFICATION],
    ['name'=>"description", 'content'=>_meta("The no. 1 insurance company in ghana")],
];

$socialMetadata = [
    ["property"=>"og:url", "content"=>activeUrl()],
    ["property"=>"og:type", "content"=>"website"],
    ["property"=>"og:title", "content"=>_title($pagetitle)],
    ["property"=>"og:description", "content"=>"Vanguard Assurance fficial website"],
    ["property"=>"og:site_name", "content"=>CLIENT_NAME],
    ["property"=>"og:image", "content"=>IMAGES_URL.'cropped-Vanguard-logo-02-300x81.png'],
//    ["property"=>"fb:app_id", "content"=>""],
    ["property"=>"og:image:width", "content"=>"450"],
    ["property"=>"og:image:height", "content"=>"298"],
//    ["name"=>"twitter:card", "content"=>"summary_large_image"],
//    ["name"=>"twitter:title", "content"=>""],   
//    ["name"=>"twitter:url", "content"=>""],
//    ["name"=>"twitter:site", "content"=>""],
//    ["name"=>"twitter:creator", "content"=>""],
//    ["name"=>"twitter:description", "content"=>""],
//    ["name"=>"twitter:image",  "content"=>""],
];

//stylesheets to be loaded at run time
$styles = [
    //Web Fonts
		["href"=>"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400", "rel"=>"stylesheet", "type"=>"text/css"],

	//Vendor CSS
        // CDN bootstrap
		["rel"=>"stylesheet", "href"=>CSS_PATH."bootstrap.min.css"],

        //local bootstrap copy["rel"=>"stylesheet", "href"=>CSS_PATH."bootstrap.min.css"],
		//["rel"=>"stylesheet", "href"=>VENDOR_PATH."fontawesome-free/css/all.min.css"], fontawsome 5
		["rel"=>"stylesheet", "href"=>"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"], // fontawsome 6
		["rel"=>"stylesheet", "href"=>"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"],
		["rel"=>"stylesheet", "href"=>VENDOR_PATH."simple-line-icons/css/simple-line-icons.min.css"],
		//["rel"=>"stylesheet", "href"=>VENDOR_PATH."owl.carousel/assets/owl.carousel.min.css"],
		//["rel"=>"stylesheet", "href"=>VENDOR_PATH."owl.carousel/assets/owl.theme.default.min.css"],
		["rel"=>"stylesheet", "href"=>VENDOR_PATH."magnific-popup/magnific-popup.min.css"],

		// Theme CSS
		["rel"=>"stylesheet", "href"=>CSS_PATH."theme.css"],
		["rel"=>"stylesheet", "href"=>CSS_PATH."theme-elements.css"],

		// Skin CSS
		["rel"=>"stylesheet", "href"=>CSS_PATH."skins/default.css"], 

		// Theme Custom CSS -->
		["rel"=>"stylesheet", "href"=>CSS_PATH."custom.css"],
		["rel"=>"stylesheet", "href"=>CSS_PATH."d-insurance.css"],

];

$revolutionSliderCss = [
		["rel"=>"stylesheet", "href"=>"vendor/rs-plugin/css/settings.css"],
		["rel"=>"stylesheet", "href"=>"vendor/rs-plugin/css/layers.css"],
		["rel"=>"stylesheet", "href"=>"vendor/rs-plugin/css/navigation.css"],
];

$js = [
    // CDN links
    //["src"=>"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"],
    ["src"=>"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"],

    //local copies
    ["src"=>JS_PATH."jquery.min.js"],
];

$footerJs = [
    ["src"=>JS_PATH."theme.js"],
    ['src'=>VENDOR_PATH.'rs-plugin/js/jquery.themepunch.tools.min.js'],
    ['src'=>VENDOR_PATH.'rs-plugin/js/jquery.themepunch.revolution.min.js'],

    //Comment out in production mode
/*    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.actions.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.carousel.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.kenburn.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.layeranimation.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.migration.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.navigation.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.parallax.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.slideanims.min'],
    [src=>VENDOR_PATH.'rs-plugin/js/extensions/revolution.extension.video.min'],
    */
    ["src"=>VENDOR_PATH."jquery.appear/jquery.appear.min.js"],
    ["src"=>VENDOR_PATH."jquery.easing/jquery.easing.min.js"],
    ["src"=>VENDOR_PATH."jquery.cookie/jquery.cookie.min.js"],
    ["src"=>VENDOR_PATH."popper/umd/popper.min.js"],
    ["src"=>JS_PATH."bootstrap.min.js"],
    ["src"=>VENDOR_PATH."common/common.min.js"],
    ["src"=>VENDOR_PATH."jquery.validation/jquery.validate.min.js"],
    //["src"=>VENDOR_PATH."jquery.easy-pie-chart/jquery.easypiechart.min.js"],
    ["src"=>VENDOR_PATH."jquery.gmap/jquery.gmap.min.js"],
    ["src"=>VENDOR_PATH."jquery.lazyload/jquery.lazyload.min.js"],
    ["src"=>VENDOR_PATH."isotope/jquery.isotope.min.js"],
    ["src"=>VENDOR_PATH."magnific-popup/jquery.magnific-popup.min.js"],
    ["src"=>VENDOR_PATH."vide/jquery.vide.min.js"],
    ["src"=>VENDOR_PATH."vivus/vivus.min.js"],


    [ "src"=>JS_PATH."theme.js"],

    //Theme Custom -->
    [ "src"=>JS_PATH."custom.js"],
    
    //Theme Initialization Files -->
    [ "src"=>JS_PATH."theme.init.js"],
    [ "src"=>JS_PATH."axios.min.js"],
    [ "src"=>JS_PATH."moment.min.js"],
    [ "src"=>JS_PATH."livestamp.js"],

    //Examples -->
    //[ "src"=>JS_PATH."examples/examples.portfolio.js"]
    
];

