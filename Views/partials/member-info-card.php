
<div class="row">
    <div class="col-md-7 order-2">
        <div class="overflow-hidden">
            <h3 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"><?= $member['name'] ?></h3>
        </div>
        <div class="overflow-hidden mb-3">
            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500"><?= $member['title'] ?></p>
        </div>
        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"><?= $member['info'] ?>.</p>
        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
            <div class="col-lg-6">
                <a href="mailto:<?= SUPPORT_EMAIL ?>" class="btn btn-modern btn-primary mt-3">Get In Touch</a>
            </div>
            <?php 
             $contactCount = 0;
              foreach($member['contact_media'] as $contact => $details):
                if(trim($details) != ''):
                    $contactCount++;
                endif;
            endforeach;

            if($contactCount > 0): 
            ?>
            <div class="col-sm-6 text-lg-right my-4 my-lg-0">
                <strong class="text-uppercase text-1 mr-3 text-dark">follow me</strong>
                <ul class="social-icons float-lg-right">
                <?php foreach($member['contact_media'] as $contact => $details):
                    if(trim($details) != ''): ?>
                    <li class="social-icons-<?= $contact ?>"><a href="<?= $details ?>" target="_blank" title="Facebook"><i class="fab fa-<?= $contact ?>"></i></a></li>
                    <?php 
                    endif;
                    endforeach;
                    ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
        <img src="<?= $member['img'] ?>" class="img-fluid" alt="">
    </div>
</div>