<script>
 
    const dataContainer =$('#blog-posts')
    $(function(){
        getArticlesPaginated('<?= CONTENT_SERVER ?>posts?search=<?= $query?>&order_by=relevance',10,dataContainer,'blog-posts')
      
    })
   
</script>