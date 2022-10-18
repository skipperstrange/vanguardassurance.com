<section class="section bg-transparent position-relative border-0 m-0 p-0 appear-animation" data-appear-animation="fadeIDownShorterPlus" data-appear-animation-delay="100">
					<div class="container pt-5 pb-5-5 mt-4">
					<div class="row">
							<div class="col text-center">
								<h2 class="text-color-dark font-weight-medium text-8 mb-5 appear-animation" data-appear-animation="fadeIDownShorterPlus" data-appear-animation-delay="300"><strong>Recent</strong> Articles</h2>
							</div>
						</div>
						<div class="row" id="recent-articles">
							
						</div>	
					</div>
				</section>

<script>
    $(function(){
     var dataContainer = $('#recent-articles')
      axios.get('<?= CONTENT_SERVER ?>posts/?order=desc&per_page=6')
      .then(articles =>{
        var template = recentArticlesTemplate(articles.data)

            dataContainer.html('')
			dataContainer.append(template)
      })
      .catch(e=>{
        console.log (e)
        dataContainer.append(_template())
      })
    })
</script>