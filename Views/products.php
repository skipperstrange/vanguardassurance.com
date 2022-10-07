<?php
//include_once PARTIALS.'sub-header.php';
include PARTIALS.'sub-header.php';
$active_index = 'personal_lines';
$active = '';
?>
<div class="col">
    <div class="tabs tabs-bottom tabs-center tabs-simple">
    <ul class="nav nav-tabs">
                <?php foreach($products as $index => $product){
                    if($active_index == $index){
                        $active = 'active';
                    }else{
                        $active = '';
                    }

            ?>
                <li class="nav-item <?= $active; ?>">
                    <a class="nav-link text-2 text-uppercase " style="font-weight:700;" href="#_<?= $index?>" data-toggle="tab"><?=format_string($index) ?></a>
                </li>
            <?php
                } ?>
                
            </ul>
        <div class="tab-content">
        <?php foreach($products as $index => $product){
                    if($active_index == $index){
                        $active = 'active';
                    }else{
                        $active = '';
                    }
					?>
            <div class="tab-pane text-2 <?= $active?>" id="_<?=$index?>">

                <div class="container py-2">
                <h1><?=format_string($index)?></h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                <ul class="nav nav-tabs col-sm-3">
                                <?php 
                                $catalogue = $products[$index];
                                foreach($catalogue as $product_index => $product) { 
                                    if($active_index == $product_index){
                                        $active = 'active';
                                    }else{
                                        $active = '';
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#<?= $index.'_'.$product['product_name']?>" data-toggle="tab"><?=format_string($product['title']);?></a>
                                    </li>
                                <?php 
                                }
                                ?>
                                
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                                    <?php
                                    $sub_active_index = 0;
                                    foreach($catalogue as $product_index => $product) { 
                                        if($sub_active_index == $product_index){
                                            $active = 'active';
                                        }else{
                                            $active = '';
                                        }
                                        ?>
                                    <div class="tab-pane tab-pane-navigation <?=$active;?>" id="<?=  $index.'_'.$product['product_name']?>">
                                        <h4 class="text-uppercase"><strong><?=format_string($product['title']);?></strong></h4>
                                        <p class="text-2"><?php 
                                        if($product['template'] == true){
                                            include STATIC_DATA.'/products/'.$index.'_'.$product['product_name'].'.php';
                                        }
                                        else{
                                            echo $product['description'] ;
                                        }
                                        ?></p>  
                                        <p><?= $product['writeup'];?></p>  
                                    </div>
                                    <?php 
                                } ?>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</div>
<?php 
include PARTIALS.'footer-banner.php'; 
include_once PARTIALS.'get-quote-block.php';
?>