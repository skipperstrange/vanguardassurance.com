<script>
 
    var articlesContainer =$('#blog-posts')
    $(function(){
        getArticlesPaginated('<?= CONTENT_SERVER ?>posts',10,articlesContainer,'blog-posts')
      
    })
   
</script>