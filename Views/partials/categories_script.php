<script>
    var per_page = 16
    var page = 1
    
    const dataContainer =$('#blog-posts')
    $(function(){
      axios.get('<?= CONTENT_SERVER ?>categories/<?=$cat_id?>').then(category=>{
        
        $('#cat_header').html(category.data.name);
      }).catch(error=>{
        console.log(error)
      })

    getArticlesPaginated('<?= CONTENT_SERVER ?>posts?categories=<?=$cat_id?>',16,dataContainer,'blog-posts')

  })

      
</script>
