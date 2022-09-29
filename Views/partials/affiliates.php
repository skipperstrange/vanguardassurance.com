

		
            <!--div class="row">
							<div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                    <strong>Affiliates</strong>
                </h2>
                </div>
            </!--div-->
            <div class="row align-items-center text-center py-2 my-0 mt-0" style="background:#eceff7">
                    <?php foreach($affiliates as $affiliate){ 
                        if(trim($affiliate['logo']) != ''):
                        ?>
							<div class="col-sm-4">
								<img src="<?= IMAGES_URL.$affiliate['logo'] ?>" alt="<?= $affiliate['title'] ?>" title="Affiliations: <?= $affiliate['title'] ?>" class="img-fluid" style="width: 120px;">
							</div>
                    <?php 
                    endif;
                } ?>
						</div>
			</div>
					