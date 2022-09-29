
<section class="section section-height-3 border-0 m-0" id="products">
    <div class="container pb-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                <strong>Products</strong>
            </h2>
            </div>
        </div>
        <div class="row justify-content-center gy-5 mb-5">
            <?php foreach ($products as $product){?>
            <div class="col-9 col-sm-10 col-md-7 col-lg-6 col-xl-3 text-center appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                <div class="animated-icon animated fadeDown svg-fill-color-primary mb-3">
                    <h1 class="text-12 text-color-primary">
                        <img src="<?= $product['icon'] ?>" class="img-fluid" style="max-height:90px"> 
                    </h1>
                </div>
                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-4-5"><?= $product['title'] ?></h3>
                <p class="text-3-5"><?= limit_to_numwords($product['description'], 20); ?>... </p>
                <a href="" class="text-decoration-none custom-link-hover-effects">
                    <!--span class="custom-view-more d-inline-flex font-weight-semibold text-color-primary">
                        View More
                        <i class="animated-icon animated fadeIn svg-fill-color-primary ms-2 fa fa-arrow-right">

                        </i>
                    </span-->
                </a>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?=_link('products#personal_lines')?>" class="btn btn-secondary btn-rounded border-0 font-weight-bold text-3 btn-px-5 py-3 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="100" style="animation-delay: 100ms;">VIEW INSURANCE POLICIES</a>
            </div>
        </div>
    </div>

</section>