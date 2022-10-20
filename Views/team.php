<?php
//include_once PARTIALS.'sub-header.php';
include PARTIALS.'header-jumbo.php';
?>
<div class="container py-4">
    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
        <!--li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li-->
        <?php
        foreach( $data['teamFilterTags'] as $tag ) {
            ?>
        <li class="nav-item" data-option-value=".<?= $tag['tag']?>"><a class="nav-link text-2 text-uppercase" style="font-weight:bolder;" href="#"><?= $tag['label']?></a></li>
    <?php   
    }
        ?>
    </ul>
							
    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
        <div class="row team-list sort-destination" data-sort-id="team">
        <?php
    foreach( $data['board'] as $index => $member){
        if($member['enabled'] == true):
            $contactCount = 0;
            foreach($member['contact_media'] as $contact => $details):
                if(trim($details['link']) != ''):
                    $contactCount++;
                endif;
            endforeach;
?>      
            <div class="col-12 col-sm-6 col-md-4  col-lg-3 isotope-item <?= implode($member['tags']) ?>">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                    <span class="thumb-info-wrapper">
                        <a href="#"  data-toggle="modal" data-target="#member_<?= $index ?>">
                            <img src="<?= $member['img'] ?>" class="img-fluid" alt="<?= $member['name']?>">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner"><?= $member['name']?></span>
                                <span class="thumb-info-type"><?= $member['title'] ?></span>
                            </span>
                        </a>
                    </span>
                    <?php
                    
            if($contactCount > 0): 
                ?>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-social-icons mb-4 mt-2">
                            <?php 
                            foreach($member['contact_media'] as $contact => $details):
                                if(trim($details['link']) != ''):
                                ?>
                            <a target="_blank" href="<?= $details['link'] ?>"><i class="fab fa-<?= $details['icon'] ?>"></i><span><?= format_string($contact) ?></span></a>
                            <?php 
                            endif;
                        endforeach; ?>
                        </span>
                    </span>
                    <?php
            endif;
            ?>
                </span>
            </div>
            <?php
        endif;

    }
    ?>
        </div>
    </div>
</div>

<?php
 foreach( $data['board'] as $index => $member){
    if($member['enabled'] == 1):
       
        $contactCount = 0;
        foreach($member['contact_media'] as $contact => $details):
            if(trim($details['link']) != ''):
                $contactCount++;
            endif;
        endforeach;
        if(trim($member['info']) != ''): 
            $largeModalTitle =  $member['name'];
            $largeModalId = "member_$index";
            ?>
<div class="modal fade" id="<?= $largeModalId ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $largeModalId ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="border:none;">
                <!--h4 class="modal-title" id="largeModalLabel"></h4-->
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                
            <div class="container py-2">

					<div class="row">
						<div class="col-lg-3 mt-4 mt-lg-0">
							<div class="d-flex justify-content-center mb-4">
                                <div class="profile-image-inner-container">
                                    <img class="img-fluid rounded mb-4" src="<?= $member['img'] ?>" />
                                </div>
							</div>
                        </div>
                        <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-5 mb-0 pt-0 mt-0n"><?= $member['name'] ?></h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-primary text-uppercase mb-0"><?= $member['title'] ?></p>
							</div>
							<p class="text-justify appear-animation text-2" data-appear-animation="fadeInUpShorter" style="" data-appear-animation-delay="700"><?= $member['info']; ?></p>
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<?php 
                                //echo
                                "<div class=\"col-lg-6\">
									<a href=\"mailto: SUPPORT_EMAIL\" class=\"btn btn-modern btn-dark mt-3\">Get In Touch</a>
								</div>";
                                ?>
								<div class="col-sm-6 text-lg-right my-4 my-lg-0">
									<!--strong class="text-uppercase text-1 mr-3 text-dark">follow me</strong-->
									<ul class="social-icons float-lg-right">
                                    <?php 
                                        foreach($member['contact_media'] as $contact => $details):
                                            if(trim($details['link']) != ''):
                                            ?>
										<li class="social-icons-<?= $contact?>"><a href="<?= $details['link'] ?>" target="_blank" title="<?= format_string($contact)?>"><i class="fab <?= $details['follow_icon'] ?>"></i></a></li>

                                        <?php 
                                        endif;
                                        endforeach; ?>
									</ul>
								</div>
							</div>
                        </div>
                    </div>
            </div>
                
            </div>
            <!--div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div-->
        </div>
    </div>
</div>
            <?php
         endif; 
    endif;
    }
    ?>
  