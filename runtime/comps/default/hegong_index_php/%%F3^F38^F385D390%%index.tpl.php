<?php /* Smarty version 2.6.18, created on 2016-01-03 09:34:21
         compiled from member/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<link href="<?php echo $this->_tpl_vars['res']; ?>
/css/demo.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo $this->_tpl_vars['res']; ?>
/css/set1.css" rel='stylesheet' type='text/css' />

<div class="about-sec">
<div class="container">
	<div class="content">
	
		<h2> 系主任 </h2>
        <!--1-->
		<div class="grid">
			<figure class="effect-lily">
				<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/LI yx.jpg" alt="img12"/>
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
		<?php if ($this->_tpl_vars['professor']): ?>
			<h2>教授</h2>
			<?php unset($this->_sections['pro']);
$this->_sections['pro']['loop'] = is_array($_loop=$this->_tpl_vars['professor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pro']['name'] = 'pro';
$this->_sections['pro']['show'] = true;
$this->_sections['pro']['max'] = $this->_sections['pro']['loop'];
$this->_sections['pro']['step'] = 1;
$this->_sections['pro']['start'] = $this->_sections['pro']['step'] > 0 ? 0 : $this->_sections['pro']['loop']-1;
if ($this->_sections['pro']['show']) {
    $this->_sections['pro']['total'] = $this->_sections['pro']['loop'];
    if ($this->_sections['pro']['total'] == 0)
        $this->_sections['pro']['show'] = false;
} else
    $this->_sections['pro']['total'] = 0;
if ($this->_sections['pro']['show']):

            for ($this->_sections['pro']['index'] = $this->_sections['pro']['start'], $this->_sections['pro']['iteration'] = 1;
                 $this->_sections['pro']['iteration'] <= $this->_sections['pro']['total'];
                 $this->_sections['pro']['index'] += $this->_sections['pro']['step'], $this->_sections['pro']['iteration']++):
$this->_sections['pro']['rownum'] = $this->_sections['pro']['iteration'];
$this->_sections['pro']['index_prev'] = $this->_sections['pro']['index'] - $this->_sections['pro']['step'];
$this->_sections['pro']['index_next'] = $this->_sections['pro']['index'] + $this->_sections['pro']['step'];
$this->_sections['pro']['first']      = ($this->_sections['pro']['iteration'] == 1);
$this->_sections['pro']['last']       = ($this->_sections['pro']['iteration'] == $this->_sections['pro']['total']);
?>
				<div class="grid">
					<figure class="effect-sadie">
							<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/<?php echo $this->_tpl_vars['professor'][$this->_sections['pro']['index']]['image']; ?>
" alt="img02"/>
						<figcaption>
							<h2><span><?php echo $this->_tpl_vars['professor'][$this->_sections['pro']['index']]['username']; ?>
</span></h2>
							<p><?php echo $this->_tpl_vars['professor'][$this->_sections['pro']['index']]['email']; ?>
</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					
				</div>
			<?php endfor; endif; ?>
		<?php endif; ?>
	
		
		<!--副教授-->
		<?php if ($this->_tpl_vars['professor']): ?>
			<h2>副教授</h2>
			<?php unset($this->_sections['ass']);
$this->_sections['ass']['loop'] = is_array($_loop=$this->_tpl_vars['assPro']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ass']['name'] = 'ass';
$this->_sections['ass']['show'] = true;
$this->_sections['ass']['max'] = $this->_sections['ass']['loop'];
$this->_sections['ass']['step'] = 1;
$this->_sections['ass']['start'] = $this->_sections['ass']['step'] > 0 ? 0 : $this->_sections['ass']['loop']-1;
if ($this->_sections['ass']['show']) {
    $this->_sections['ass']['total'] = $this->_sections['ass']['loop'];
    if ($this->_sections['ass']['total'] == 0)
        $this->_sections['ass']['show'] = false;
} else
    $this->_sections['ass']['total'] = 0;
if ($this->_sections['ass']['show']):

            for ($this->_sections['ass']['index'] = $this->_sections['ass']['start'], $this->_sections['ass']['iteration'] = 1;
                 $this->_sections['ass']['iteration'] <= $this->_sections['ass']['total'];
                 $this->_sections['ass']['index'] += $this->_sections['ass']['step'], $this->_sections['ass']['iteration']++):
$this->_sections['ass']['rownum'] = $this->_sections['ass']['iteration'];
$this->_sections['ass']['index_prev'] = $this->_sections['ass']['index'] - $this->_sections['ass']['step'];
$this->_sections['ass']['index_next'] = $this->_sections['ass']['index'] + $this->_sections['ass']['step'];
$this->_sections['ass']['first']      = ($this->_sections['ass']['iteration'] == 1);
$this->_sections['ass']['last']       = ($this->_sections['ass']['iteration'] == $this->_sections['ass']['total']);
?>
				<div class="grid">
					<figure class="effect-zoe">
							<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/<?php echo $this->_tpl_vars['assPro'][$this->_sections['ass']['index']]['image']; ?>
" alt="img02"/>
						<figcaption>
							<h2><span><?php echo $this->_tpl_vars['assPro'][$this->_sections['ass']['index']]['username']; ?>
</span></h2>
							<p><?php echo $this->_tpl_vars['assPro'][$this->_sections['ass']['index']]['email']; ?>
</p>
							<a href="#">View more</a>
						</figcaption>				
					</figure>
				</div>
			<?php endfor; endif; ?>
		<?php endif; ?>

	
		<!--讲师-->
		<h2>讲师</h2>
		<div class="grid">
			<figure class="effect-roxy">
				<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/chen.jpg" alt="img15"/>
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
				<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/wang.png" alt="img20"/>
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
				<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/gaorui.jpg" alt="img11"/>
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


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>