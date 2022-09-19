<section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-5" style="background-image: url(img/patterns/wild_oliva.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1>Meet the <strong>Our Team</strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="<?= WEBSITE ?>">Home</a></li>
                    <li class="active">Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="container py-4">
    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
        <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
        <?php
        foreach( $teamFilterTags as $tag ) {
            ?>
        <li class="nav-item" data-option-value=".<?= $tag['tag']?>"><a class="nav-link text-1 text-uppercase" href="#"><?= $tag['label']?></a></li></a></li>
    <?php   
    }
        ?>
    </ul>
   
    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
        <div class="row team-list sort-destination" data-sort-id="team">
        <?php
    foreach( $board as $member){
?>
            <div class="col-12 col-sm-6 col-lg-3 isotope-item <?= implode($member['tags']) ?>">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                    <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="<?= $member['img'] ?>" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner"><?= $member['name']?></span>
                                <span class="thumb-info-type"><?= $member['title'] ?></span>
                            </span>
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">About</span>
                        <span class="thumb-info-social-icons mb-4">
                            <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                        </span>
                    </span>
                </span>
            </div>
            <?php
}
    ?>
        </div>
    </div>
</div>
<?php
