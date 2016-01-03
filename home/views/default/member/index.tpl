<{ include file="public/header.tpl" }>

<{block name="head"}>
	<link href="<{$res}>/css/demo.css" rel='stylesheet' type='text/css' />
	<link href="<{$res}>/css/set1.css" rel='stylesheet' type='text/css' />
<{/block}>

<div class="about-sec">
<div class="container">
	<div class="content">
	
		<h2> 系主任 </h2>
        <!--1-->
		<div class="grid">
			<figure class="effect-lily">
				<img src="<{$res}>/images/LI yx.jpg" alt="img12"/>
				<figcaption>
					<div>
						<h2><span>杨军（教授）</span></h2>
						<p>We believe in doing “in possible”</p>
					</div>
					<a href="#">View more</a>
				</figcaption>			
			</figure>
          
		</div>
		<!--教授-->
		<{if $professor}>
			<h2>教授</h2>
			<{section loop=$professor name="pro"}>
				<div class="grid">
					<figure class="effect-sadie">
							<img src="<{$res}>/images/<{$professor[pro].image}>" alt="img02"/>
						<figcaption>
							<h2><span><{$professor[pro].username}></span></h2>
							<p><{$professor[pro].email}></p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					
				</div>
			<{/section}>
		<{/if}>
	
		
		<!--副教授-->
		<{if $professor}>
			<h2>副教授</h2>
			<{section loop=$assPro name="ass"}>
				<div class="grid">
					<figure class="effect-zoe">
							<img src="<{$res}>/images/<{$assPro[ass].image}>" alt="img02"/>
						<figcaption>
							<h2><span><{$assPro[ass].username}></span></h2>
							<p><{$assPro[ass].email}></p>
							<a href="#">View more</a>
						</figcaption>				
					</figure>
				</div>
			<{/section}>
		<{/if}>

	
		<!--讲师-->
		<h2>讲师</h2>
		<div class="grid">
			<figure class="effect-roxy">
				<img src="<{$res}>/images/chen.jpg" alt="img15"/>
				<figcaption>
					<h2>Weiqi  <span>&nbsp;&nbsp;Chen</span></h2>
					<p>Yesterday you said tomorrow.</p>
					<a href="#">View more</a>
				</figcaption>			
			</figure>
           
		</div>
		
		<h2>研 究 生</h2>
		
		<div class="grid">
			<figure class="effect-sarah">
				<img src="<{$res}>/images/wang.png" alt="img20"/>
				<figcaption>
					<h2>Wenxuan <span>&nbsp;&nbsp;Wang</span></h2>
					<p>Sarah likes to watch clouds. She's quite depressed.</p>
					<a href="#">View more</a>
				</figcaption>			
			</figure>
		</div>
		
		<!--<h2>Software&nbsp;&nbsp; group</h2>
		<div class="grid">
			<figure class="effect-milo">
				<img src="<{$res}>/images/gaorui.jpg" alt="img11"/>
				<figcaption>
					<h2>Rui <span>&nbsp;&nbsp;Gao</span></h2>
					<p>If you don’t walk today.you will have run tomorrow.</p>
					<a href="#">View more</a>
				</figcaption>			
			</figure>          
		</div>-->
		
	</div>
</div>
</div>


<{ include file="public/footer.tpl" }>