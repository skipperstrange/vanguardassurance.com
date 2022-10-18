<script>
 
    const dataContainer =$('#blog-posts')
    $(function(){
        getArticlesPaginated('<?= CONTENT_SERVER ?>posts',10,dataContainer,'blog-posts')
      
    })
   
</script>