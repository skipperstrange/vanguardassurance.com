<div class="container py-4 mb-6">
    <div class="row">
        <div class="col-lg-4 order-2">
            <?php include PARTIALS.'news-side-bar.php'?>
        </div>
        <div class="col-lg-8 order-1 loading-overlay-showing"  id="loading-overlay" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
            
            <div class="loading-overlay">
                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
            </div>

                    <div class="blog-posts single-post">
                    
                        <article class="post post-large blog-single-post border-0 m-0 p-0" id="post">
                            
                        </article>
                    </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?=CSS_PATH?>theme-blog.css">

<script>
        $(function(){

            var dataContainer = $('#post')
                axios.get('<?= CONTENT_SERVER ?>posts/<?=$id?>')
                .then(articles =>{
                    var template = postTemplate(articles.data)

                        dataContainer.html('')
                        dataContainer.append(template)
                        $('#loading-overlay').removeClass('loading-overlay-showing')
                })
                .catch(e=>{
                    console.log (e)
                    dataContainer.append(_template())
    			    $('#loading-overlay').removeClass('loading-overlay-showing')
                })


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
