<{ include file="public/header.tpl" }>


<div class="about-sec">
	<div class="container">
		<div class="about-head">
				<h2>最新动态</h2>
		</div>

		<{section loop=$dynamics name="dyn" }>

			<div class="dynamic">
		        <ul>
		          <h3><a href="/"><{$dynamics[dyn].title}></a></h3>
		          <p><{$dynamics[dyn].summary}>  <br>
		          	<a href="<{$url}>/detail/pid/<{$dynamics[dyn].id}>" target="_blank" class="readmore">全文</a></p>
		        </ul>
	        	<figure><img src="<{$res}>/images/<{$dynamics[dyn].image}>" ></figure>
	        	<div class="dateview"><{$dynamics[dyn].date}></div>
	      	</div>

	     <{/section}>

      <{$fpage}>


    </div>
</div>


<{ include file="public/footer.tpl" }>