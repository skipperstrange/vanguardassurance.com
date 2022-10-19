
        <aside class="sidebar">
            <form action="<?= _link('search')?>" method="post">
                <div class="input-group mb-3 pb-1">
                    <input class="form-control text-1" placeholder="Search..." name="query" id="s" type="text" value="<?=$query;?>">
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                    </span>
                </div>
            </form>
            <h5 class="font-weight-bold pt-4">Categories</h5>
            <ul class="nav nav-list flex-column mb-5" id="category-list">
            </ul>
            <div class="tabs tabs-primary mb-4 pb-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Popular</a></li>
                    <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Recent</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="popularPosts">
                        <ul class="simple-post-list" id="popular-news-section">
                          
                        </ul>
                    </div>
                    <div class="tab-pane" id="recentPosts">
                        <ul class="simple-post-list" id="recent-news-section">
                            
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Facebook -->
           <div class="fb-page" data-href="<?=FACEBOOK ?>" data-width="" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="<?=FACEBOOK ?>">
                        <a href="<?=FACEBOOK ?>"><?=WEB_URL ?></a>
                    </blockquote>
                </div>
            </div>
            <!-- End Facebook -->

            <!--div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'VanguardGH', 'count': 2}">
                    <p>Please wait...</p>
                </div-->
                <div id="tweets" class="text-1 my-4">
                <a class="twitter-timeline" data-dnt="true" data-theme="light" data-chrome="noscrollbar" data-height="400" href="<?= TWITTER ?>" data-widget-id="628348263834456064">Tweets by @<?= CLIENT_NAME ?></a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
        </aside>

<script>
    var recentNewsContainer = $('#recent-news-section')
    var popularNewsContainer = $('#popular-news-section')
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
        
        
        //Get recently posted articles
        axios.get('<?= CONTENT_SERVER ?>posts/?per_page=5')
        .then(articles =>{
                template = sideArticleTemplate(articles.data)
                recentNewsContainer.html('')
                recentNewsContainer.append(template).fadeIn('slow')
        })
        .catch(e=>{
            console.log (e)
            dataContainer.append(_template())
        })

        //get popular posts - not working
        axios.get('<?= CONTENT_SERVER ?>posts/?order_by=relevance&per_page=5')
        .then(articles =>{
                template = sideArticleTemplate(articles.data)
                popularNewsContainer.html('')
                popularNewsContainer.append(template).fadeIn('slow')
        })
        .catch(e=>{
            console.log (e)
            dataContainer.append(_template())
        })
    })

   

</script>
<link rel="stylesheet" href="<?=CSS_PATH?>theme-blog.css">
