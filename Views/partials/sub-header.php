<section class="page-header page-header-classic page-header-background page-header-background-pattern page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-5" style="background-image: url(<?=$headerBackground?>); background-position:top; background-attachment: fixed; background-size:contain;">
    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-md-12 align-self-center p-static order-2 text-center appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <?= $headerTitle ?>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 400ms;">
                    <li><a href="<?= WEB_URL ?>">Home</a></li>
                    <li class="active"><?= $pageTitle ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>