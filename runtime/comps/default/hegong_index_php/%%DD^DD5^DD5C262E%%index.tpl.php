<?php /* Smarty version 2.6.18, created on 2016-01-02 19:16:10
         compiled from contact/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<link href="<?php echo $this->_tpl_vars['res']; ?>
/css/demo.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo $this->_tpl_vars['res']; ?>
/css/set1.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo $this->_tpl_vars['res']; ?>
/css/contactStyle.css" rel='stylesheet' type='text/css' />


<div class="about-sec">
	<div class="container">
		<div class="top" id="title">
		  <div align="center"><strong>Contact Us</strong></div>
		</div>
		<div id="contact" class="mainBlock" >
					<div id="interviewBox" >
						<form id="sendEmail" method="post" action="<?php echo $this->_tpl_vars['root']; ?>
/mail/mail.php">
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>