<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <?= generate_tag_group('meta',$metadata, false) ?>
    <?= generate_tag_group('meta',$socialMetadata, false) ?>

    <!-- styles -->
    <?= generate_tag_group('link',$styles, false) ?>

    <!-- javascript -->
    <?= generate_tag_group('script',$js) ?>

    <?= create_tag_element('title','',_title($pageTitle)) ?>
    <?= create_tag_element('link', ["rel"=>"shortcut icon", "href"=>"./favicon.png"],'', false) ?>
    <?= create_tag_element('link', ["rel"=>"apple-touch-icon", "href"=>"./favicon.png"],'', false) ?>

    <!-- For tracking asyncronous activities N. B. Use either this or the one in footer for old method. Old method cannot track asyncronous activities.
        Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
     var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?=GOOGLE_ANALYITICS_ID ?>']);
  _gaq.push(['_trackPageview']);
</script>
 -->
 <script>
  var FQDN = '<?=WEB_URL?>';
  var NEWS_URL = FQDN+'articles/';
  var AUTHOR_NEWS_URL = FQDN+'authors/'; 
  var DEFAULT_MEDIA_IMG = FQDN+'public/images/article.jpg'
 </script>
</head>

<body <?php if($view == 'index'): ?>class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}" <?php endif; ?>>
<div class="body"><!-- closes at footer -->
    <?php if($view == 'index'): ?>
    <div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
    <?php endif; ?>
    <?php include_once LAYOUTS.'nav.php'; ?>
