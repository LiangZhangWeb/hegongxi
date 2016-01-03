<?php /* Smarty version 2.6.18, created on 2016-01-03 09:16:02
         compiled from achievements/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'achievements/detail.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--<article>
 <div class="index_about">
    <h2 class="c_titile"><?php echo $this->_tpl_vars['cruuent']['title']; ?>
</h2>
    <p class="box_c"><span class="d_time">发布时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['current']['date'])) ? $this->_run_mod_handler('date', true, $_tmp, "Y-m-d") : date($_tmp, "Y-m-d")); ?>
</span></p>
    <ul class="infos">
		<?php echo $this->_tpl_vars['current']['content']; ?>


		<p><img src="<?php echo $this->_tpl_vars['current']['image']; ?>
" alt="<?php echo $this->_tpl_vars['current']['title']; ?>
" /></p>
</article>-->

<div class="blog">
		<div class="container">
			<div class="blog-head">
				<h2><?php echo $this->_tpl_vars['current']['title']; ?>
</h2>
				
			</div>

			<div class="col-md-10 blog-left" >
				<div class="blog-info">
					<div class="comment-icons">
						<ul>
							<li><span class="clndr"></span><?php echo $this->_tpl_vars['current']['date']; ?>
</li>
						</ul>
					</div>


					<div class="blog-info-text">
						<?php if (isset ( $this->_tpl_vars['current']['image'] )): ?>
							<div class="blog-img col-md-10">
								<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/<?php echo $this->_tpl_vars['current']['image']; ?>
" alt=""/>
							</div>
						<?php endif; ?>

						<div class="snglp-text">
							<!--<h4><?php echo $this->_tpl_vars['current']['title']; ?>
</h4>-->
							<p class="snglp"><?php echo $this->_tpl_vars['current']['content']; ?>
</p>
							<p></p>
						</div>
						
					</div>
					
					<div class="admin-text">
						<h5>Written By 
							<?php echo $this->_tpl_vars['current']['authors']; ?>

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


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>