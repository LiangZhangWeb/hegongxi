<{ include file="public/header.tpl" }>


<div class="about-sec">
	<div class="container">
		<div class="about-head">
				<h2>科研成果</h2>
		</div>

		<{section loop=$achievements name="dyn" }>

			<div class="dynamic">
		        <ul>
		          <h3><a href="/"><{$achievements[dyn].title}></a></h3>
		          <div class="autor"><span>作者：<{$achievements[dyn].authors}></span></div>
		          	<a href="<{$url}>/detail/pid/<{$achievements[dyn].id}>" target="_blank" class="readmore">全文</a></p>
		        </ul>
	        	<div class="dateview"><{$achievements[dyn].date}></div>
	      	</div>

	     <{/section}>

      <{$fpage}>


    </div>
</div>


<{ include file="public/footer.tpl" }>