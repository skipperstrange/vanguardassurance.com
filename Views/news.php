<?php
//include_once PARTIALS.'sub-header.php';
include PARTIALS.'header-jumbo.php';
?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-4 col-md-5 order-lg-2 order-sm-2 order-xs-2">
            <?php include PARTIALS.'news-side-bar.php'; ?>
        </div>
        <div class="col-lg-8 col-md-7 order-lg-1 order-sm-1 order-xs-1 loading-overlay-showing"  id="loading-overlay" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
            
        <div class="loading-overlay">
                <div class="bounce-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            <ul class="blog-posts article" id="blog-posts"  style="list-style:none;">
        
            </ul>
            <ul class="pagination float-right">
            </ul>
            </div>
            <ul class="blog-posts article" id="blog-posts"  style="list-style:none;">
        
            </ul>
            <ul class="pagination float-right">
            </ul>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?=CSS_PATH?>theme-blog.css">
<script src="<?=JS_PATH?>jPages.js"></script>

<?php
include_once PARTIALS.$controller.'_script.php';
?>

<script>
    $(function(){
      axios.get('<?= CONTENT_SERVER ?>categories').then(d=>{
        categories = d.data
          cat_template = '';
          for(i=0;i<categories.length;i++){
            cat_template += '<li class="nav-item"><a class="nav-link" id="cat_'+categories[i].id+'" data-category-id="'+categories[i].id+'" href="<?=_link('categories&id=')?>'+categories[i].id+'"> '+categories[i].name+' ('+categories[i].count+')</a></li>\n';
          }
         
          $('#category-list').html(cat_template);
          $('#cat_<?=$cat_id?>').addClass('active');
        }).catch((err)=>{
          console.log(err)  
        })
      
    })
   
</script>