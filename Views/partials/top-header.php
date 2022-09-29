<div class="header-top">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												
                                                <?php foreach($topLinks as $topLink => $link): ?>
                                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link" href="<?= _link($link['href'])?>"><i class="fas fa-angle-right"></i> <?= format_string($topLink) ?></a>
												</li>
                                                <?php endforeach; ?>
												<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
													<span class="ws-nowrap"><i class="fas fa-phone"></i> <?= SUPPORT_CONTACT_1?></span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                            <?php 
                                            foreach ($data['socialMediaLinks'] as $socialMediaLink) {

                                                ?>
											<li class="social-icons-<?= $socialMediaLink['title']?>"><a href="<?= $socialMediaLink['href'] ?>" target="_blank" title="<?= format_string($socialMediaLink['title']) ?>"><i class="<?= $socialMediaLink['icon']?>"></i></a></li>
                                                <?php
                                            }
                                            ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>