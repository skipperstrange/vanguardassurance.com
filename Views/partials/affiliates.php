
<div class="row align-items-center text-center py-2 my-0 mt-0" style="background:#eceff7">
        <?php foreach($affiliates as $affiliate){ 
            if(trim($affiliate['logo']) != ''):
            ?>
                <div class="col-sm-4 col-lg-4">
                    <img src="<?= IMAGES_URL.$affiliate['logo'] ?>" alt="<?= $affiliate['title'] ?>" title="Affiliations: <?= $affiliate['title'] ?>" class="img-fluid" style="max-width: 14rem ;">
                </div>
        <?php 
        endif;
    } ?>
</div>