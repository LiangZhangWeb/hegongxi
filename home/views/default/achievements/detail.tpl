<{ include file="public/header.tpl" }>

<!--<article>
 <div class="index_about">
    <h2 class="c_titile"><{$cruuent.title}></h2>
    <p class="box_c"><span class="d_time">发布时间：<{$current.date|date:"Y-m-d"}></span></p>
    <ul class="infos">
		<{$current.content}>

		<p><img src="<{$current.image}>" alt="<{$current.title}>" /></p>
</article>-->

<div class="blog">
		<div class="container">
			<div class="blog-head">
				<h2><{$current.title}></h2>
				
			</div>

			<div class="col-md-10 blog-left" >
				<div class="blog-info">
					<div class="comment-icons">
						<ul>
							<li><span class="clndr"></span><{$current.date}></li>
						</ul>
					</div>


					<div class="blog-info-text">
						<{if isset($current.image)}>
							<div class="blog-img col-md-10">
								<img src="<{$res}>/images/<{$current.image}>" alt=""/>
							</div>
						<{/if}>

						<div class="snglp-text">
							<!--<h4><{$current.title}></h4>-->
							<p class="snglp"><{$current.content}></p>
							<p></p>
						</div>
						
					</div>
					
					<div class="admin-text">
						<h5>Written By 
							<{$current.authors}>
						</h5>
						<!--<div class="admin-text-left">
							<a href="#"><img src="images/icon1.png" alt=""/></a>
						</div>
						<div class="admin-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<span>View all posts by:<a href="#"> Admin </a></span>
						</div>-->
						<div class="clearfix"> </div>
					</div>
				

					
			</div>
			<div class="clearfix"> </div>
		</div>	
</div>


<{ include file="public/footer.tpl" }>