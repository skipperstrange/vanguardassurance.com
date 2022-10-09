<?php
include_once STATIC_DATA.'nav.php';
?>
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<?php include_once PARTIALS.'top-header.php' ?>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
                                    <div class="header-logo header-logo-sticky-change" style="width: 82px; height: 40px;">
										<a href="<?= WEB_URL ?>">
                                        <?= create_tag_element('img', ['src'=>IMAGES_URL.'cropped-Vanguard-logo-02-300x81.png', 'class'=>'header-logo-non-sticky opacity-0', 'alt'=>'', 'height'=>'40'], false); ?>
                                        <?= create_tag_element('img', ['src'=>IMAGES_URL.'cropped-Vanguard-logo-simple.png', 'class'=>'header-logo-sticky opacity-0', 'alt'=>'', 'height'=>'40'], false); ?>
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-animated header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
                                                    <?= generateNavigation($navLinks);?>
												</ul>
												
											</nav>
										</div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
										<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2 mr-2 mr-lg-0">
										<div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2 text-uppercase">
											<?=generateButtonsNavigation($buttonLinks)?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

