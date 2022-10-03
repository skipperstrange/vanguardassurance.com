<?php
$subHeaderTitle = "";
$subHeaderTitle = '<h1>Page not found!!</h1>';
$pageTitle = '404';

include_once PARTIALS.'sub-header-left.php';
include_once DATA.'nav.php';
?>

<div class="container">
<section class="http-error">
    <div class="row justify-content-center py-3">
        <div class="col-md-7 ">
            <div class="http-error-main">
                <h2>404!</h2>
                <p>We're sorry, but the page you were looking for doesn't exist.</p>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <h4 class="text-primary">Here are some useful links</h4>
            <ul class="nav nav-list flex-column">
                <?php
                foreach ($navLinks as $key => $link){
                    if($link['href'] != "#" && !is_array($navLinks[$key]['href'])){
                        ?>
                        <li class="nav-item"><a class="nav-link" href="<?=$link['href']?>"><?=format_string($key)?></a></li>
                        <?php
                    }
                }?>
                
            </ul>
        </div>
    </div>
</section>
</div>