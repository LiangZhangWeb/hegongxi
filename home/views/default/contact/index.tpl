<{ include file="public/header.tpl" }>

<{block name="head"}>
	<link href="<{$res}>/css/demo.css" rel='stylesheet' type='text/css' />
	<link href="<{$res}>/css/set1.css" rel='stylesheet' type='text/css' />
	<link href="<{$res}>/css/contactStyle.css" rel='stylesheet' type='text/css' />
<{/block}>


<div class="about-sec">
	<div class="container">
		<div class="top" id="title">
		  <div align="center"><strong>Contact Us</strong></div>
		</div>
		<div id="contact" class="mainBlock" >
					<div id="interviewBox" >
						<form id="sendEmail" method="post" action="<{$root}>/mail/mail.php">
							<input type="text" name="yName" id="yName" placeholder="您的姓名" class="inputCommon uncommon">
							<input type="text" name="yPro" id="yPro" placeholder="您的电话" class="inputCommon">
							<input type="text" name="yAdd" id="yAdd" placeholder="您的邮箱" class="inputCommon">
							<textarea name="yIdear" id="yIdear" placeholder="您的留言或建议" rows='9'></textarea>
					      <input type="submit" name="submit" id="submit" value="发送">
						</form>
					</div>
		            <div id="contact1">
					<div id="contact2">
		</div>

		<p>中国湖北省武汉市洪山区珞瑜路1037号</p>
		<p>华中科技大学动力楼 430074</p>
		<p>  Building DongLi, 1037 Luoyu Road, Wuhan 430074,P,R China</p>
		<p>dengcc@hust.edu.cn (邓老师)</p>
		</div>
		</div>

	</div>
</div>
<{ include file="public/footer.tpl" }>