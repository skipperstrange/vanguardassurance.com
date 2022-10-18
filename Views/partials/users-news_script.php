<script>
    var per_page = 16
    var page = 1
    
    const dataContainer =$('#blog-posts')
    $(function(){
      axios.get('<?= CONTENT_SERVER ?>users/<?=$user_id?>').then(user=>{
        
        $('#user_header').html("Author: "+user.data.name);
      }).catch(error=>{
        console.log(error)
      })
    getArticlesPaginated('<?= CONTENT_SERVER ?>posts?users=<?=$user_id?>',per_page,dataContainer,'blog-posts')

  })
      
</script>