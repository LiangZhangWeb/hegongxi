<?php /* Smarty version 2.6.18, created on 2016-01-03 09:35:48
         compiled from dynamic/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'dynamic/detail.tpl', 6, false),)), $this); ?>
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
					
				

					<!--<div class="response">
						<h4>Responses</h4>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt=""/>
								</a>
								<h5><a href="#">Admin</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 21, 2013</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt=""/>
										</a>
										<h5><a href="#">Admin</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
											sed do eiusmod tempor incididunt ut labore et.</p>
										<ul>
											<li>MARCH 21, 2014</li>
											<li><a href="single.html">Reply</a></li>
										</ul>		
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt=""/>
								</a>
								<h5><a href="#">Admin</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 21, 2013</li>
									<li><a href="single.html">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form>
						<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="text" value="Subject " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
						<input type="text" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="SUBMIT" >
					</form>
				</div>
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<h4>Categories</h4>
					<div class="list-group">
						<a href="single.html" class="list-group-item">Cras justo odio</a>
						<a href="single.html" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="single.html" class="list-group-item">Morbi leo risus</a>
						<a href="single.html" class="list-group-item">Porta ac consectetur ac</a>
						<a href="single.html" class="list-group-item">Vestibulum at eros</a>
						<a href="single.html" class="list-group-item">Cras justo odio</a>
						<a href="single.html" class="list-group-item">Cras justo odio</a>
						<a href="single.html" class="list-group-item">Cras justo odio</a>
					</div>
				</div>	
				<div class="recent-posts">
					<h4>Recent posts</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>MARCH 5, 2015</label>
							<h5><a href="single.html">FINIBUS BONORUM</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="posts-right">
							<label>MARCH 1, 2015</label>
							<h5><a href="single.html">FINIBUS BONORUM</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>	-->			
			</div>
			<div class="clearfix"> </div>
		</div>	
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>