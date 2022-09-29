<?php
include_once PARTIALS.'sub-header.php';
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
                    <a class="nav-link text-1 text-uppercase " href="#_<?= $index?>" data-toggle="tab"><?=format_string($index) ?></a>
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
            <div class="tab-pane text-1 <?= $active?>" id="_<?=$index?>">

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
                                        <a class="nav-link" href="#<?= $product['product_name']?>" data-toggle="tab"><?=format_string($product['title']);?></a>
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
                                    <div class="tab-pane tab-pane-navigation <?=$active;?>" id="<?= $product['product_name']?>">
                                        <h4><?=format_string($product['title']);?></h4>
                                        <p><?php 
                                        if($product['template'] == true){
                                            include_once STATIC_DATA.'products.php';
                                        }
                                        else{
                                            echo $product['description'] ;
                                        }
                                        ?></p>    
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