var domainName = document.domain+'vanguardassurance.com'
const domain = window.location.hostname;
const port = window.location.port;


//var FQDN = `http://${domainName}`

$.extend(theme.PluginScrollToTop.defaults, {
	iconClass: 'fa fa-chevron-up'
});

//functions 

function truncate(str, no_words) {
    return str.split(" ").splice(0,no_words).join(" ");
}

//template for articles on news url.
//N.B. Articles are json response recieved from wordpress api posts endpoint

function articlesTemplate(data, id_display='') {
		var template = ''
		for(i = 0, len = data.length; i < len; i++){
			var media = null;
			if(data[i].x_featured_media_large === undefined){
				media = 'public/images/article.jpg'
			}else{
				media = data[i].x_featured_media_large
			}
		template += '<li class="post post-medium article border-bottom my-2 py-2 list-style-none" >\n'
									+'<div class="row mb-3" >\n'
										+'<div class="col-lg-5" >\n'
											+'<div class="post-image" style="overflow:hidden; max-height:;" >\n'
												+'<a href="'+FQDN+'news/'+data[i].id+'" >\n'
													+'<img src="'+media+'" class=" img-thumbnail-no-borders rounded-0" style="width:100%;" alt="" / >\n'
												+'</a >\n'
											+'</div >\n'
										+'</div >\n'
										+'<div class="col-lg-7" >\n'
											+'<div class="post-content" >\n'
												+'<h2 class="font-weight-semibold pt-4 pt-lg-0 text-4 line-height-4 mb-2"><a href="'+FQDN+'news/'+data[i].id+'" >\n'+data[i].title.rendered+'</a></h2 >\n'
												+'<div class="mb-0 text-2" >\n'+truncate(data[i].excerpt.rendered, 20)+'...</div >\n'
											+'</div >\n'
										+'</div >\n'
									+'</div >\n'
									+'<div class="row" >\n'
										+'<div class="col" >\n'
											+'<div class="post-meta text-1" >\n'
												+'<span class="ml-2"> <i class="far fa-calendar-alt"></i> <span  class="timeago" data-livestamp="'+data[i].date+'">'+data[i].date+' </span> </span >\n'
												+'<span class="ml-2"> <i class="far fa-user"></i> By <a href="'+`${FQDN}authors/${data[i].author}`+'/articles" >\n'+data[i].x_author+'</a> </span >\n'
												+'<span class="ml-2"> <i class="far fa-folder"></i> '+data[i].x_categories+' </span >\n'
												+'<!--span class="ml-2"> <i class="far fa-comments"></i> <a href="#">12 Comments</a></span-->\n'
												+'<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="'+FQDN+'news/'+data[i].id+'" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span> \n'
											+'</div >\n'
										+'</div >\n'
									+'</div >\n'
								+'</li> \n'
		}
		return template;
}

function recentArticlesTemplate(data, id_display='') {
	var template = ''
	for(i = 0, len = data.length; i < len; i++){
		var media = null;
		if(data[i].x_featured_media_large === undefined){
			media = 'public/images/article.jpg'
		}else{
			media = data[i].x_featured_media_large
		}
	template += `
	<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
		<article class="post post-medium border-0 pb-0 mb-5">
			<div class="post-image" style=" height:12rem;  max-height:12rem; overflow:hidden;">
				<a href="${FQDN+'news/'+data[i].id}">
					<img src="${media}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="" alt="">
				</a>
			</div>
			<div class="post-content hidden-sm hidden-xs">
				<h2 class="font-weight-semibold text-3 line-height-6 mt-3 mb-2"><a href="${FQDN+'news/'+data[i].id}">${data[i].title.rendered}</a></h2>
				<!--p>
				${truncate(data[i].excerpt.rendered, 12)}...
				</p-->
				<!--div class="post-meta">
					<span><i class="far fa-user"></i> By <a href="${FQDN}authors/${data[i].author}">${data[i].x_author}</a> </span>
					<span><i class="far fa-folder"></i> ${data[i].x_categories} </span>
					<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
					<span class="d-block mt-2"><a href="${FQDN+'news/'+data[i].id}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
				</div-->
			</div>
		</article>
	</div>	`
	}
	return template;
}


function sideArticleTemplate(data){
	var template = ''
		for(i = 0, len = data.length; i < len; i++){
			var media = null;
			if(data[i].x_featured_media === undefined){
				media = FQDN+'public/images/article-small.jpg'
			}else{
				media = data[i].x_featured_media
			}
	template += `
	<li>
		<div class="post-image">
			<div class="img-thumbnail img-thumbnail-no-borders d-block">
				<a href="${FQDN+'news/'+data[i].id}">
					<img src="${media}" width="50" height="50" alt="">
				</a>
			</div>
		</div>
		<div class="post-info">
			<a href="${FQDN+'news/'+data[i].id}">${data[i].title.rendered}</a>
			<div class="post-meta">
				<span class="ml-2"> 
					<i class="far fa-calendar-alt"></i> 
					<span  class="timeago" data-livestamp="${data[i].date}">${data[i].date} </span> 
				</span >

			</div>
		</div>
	</li>
	`
		}
		return template
}

async function getArticlesPaginated(url, per_page=15,  dataContainer, container){
	axios.get(url).then(articles=>{
		 dataContainer.html('')
		 dataContainer.append(articlesTemplate(articles.data))
		 $(".pagination").jPages({
			  containerID  :container,
			  perPage      : per_page,
			  startPage    : 1,
			  startRange   : 1,
			  midRange     : 5,
			  endRange     : 2,
			  keyBrowse    : true,
		  });
			$('#loading-overlay').removeClass('loading-overlay-showing')

	}).catch((err)=>{
		console.log(err)
		//no articles template
			dataContainer.html('')
			dataContainer.append(_template())
			$('#loading-overlay').removeClass('loading-overlay-showing')
	})
}

async function getArticles(url){
	var a;
	axios.get(url).then(articles=>{
		a = articles.data
		return a
	}).catch((err)=>{
		console.log(err)
	})
}




function _template(title = '404!', msg ='Could not load resource.', subMsg = 'Please try later.'){
	return  '<div class="container">\n'
	+'<section class="http-error"></section>\n'
		+'<div class="row justify-content-center py-3">\n'
			+'<div class="col-md-12 ">\n'
				+'<div class="http-error-main">\n'
					+'<h2>'+title+'</h2>\n'
						+'<p>'+msg+'</p>\n'
				+'</div>\n'
				+'<h4 class="text-primary">'+subMsg+'</h4>\n'
			
			+'</div>\n'
		+'</div>\n'
	+'</section>\n'
	+'</div>\n'
  };


  function postTemplate(data){
	console.log(data)
	if(data.x_featured_media === undefined){
		media = FQDN+'public/images/article.jpg'
	}else{
		media = data.x_featured_media_large
	}
	var day = moment().format('Do', data.date)
	var month = moment().format('MMM', data.date)
	console.log(day, month)
	return `
	<div class="post-image ml-0" id="post-image">
		<img src="${media}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
	</div>

	<div class="post-date ml-0">
		<span class="day text-primary" id="day">${day}</span>
		<span class="month bg-primary" id="month">${month}</span>
	</div>

	<div class="post-content ml-0">

		<h2 class="font-weight-bold text-6" id="title">${data.title.rendered}</h2>

		<div class="post-meta" id="post-meta">
			<span><i class="far fa-user"></i> By <a href="#">${data.x_author}</a> </span>
			<span><i class="far fa-folder"></i> ${data.x_categories} </span>
			<!--span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span-->
		</div>

		<p id="content">
		${data.content.rendered}
		</p>


		<!--div class="post-block mt-5 post-share">
			<h4 class="mb-3">Share this Post</h4>

			<!-- AddThis Button BEGIN -->
			<!--div class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_pinterest_pinit"></a>
				<a class="addthis_counter addthis_pill_style"></a>
			</!--div>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
			<!-- AddThis Button END -->
		<!--
		</-div-->
	</div>`
  }


