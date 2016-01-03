<?php /* Smarty version 2.6.18, created on 2016-01-03 08:01:48
         compiled from achievements/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class="about-sec">
	<div class="container">
		<div class="about-head">
				<h2>科研成果</h2>
		</div>

		<?php unset($this->_sections['dyn']);
$this->_sections['dyn']['loop'] = is_array($_loop=$this->_tpl_vars['achievements']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dyn']['name'] = 'dyn';
$this->_sections['dyn']['show'] = true;
$this->_sections['dyn']['max'] = $this->_sections['dyn']['loop'];
$this->_sections['dyn']['step'] = 1;
$this->_sections['dyn']['start'] = $this->_sections['dyn']['step'] > 0 ? 0 : $this->_sections['dyn']['loop']-1;
if ($this->_sections['dyn']['show']) {
    $this->_sections['dyn']['total'] = $this->_sections['dyn']['loop'];
    if ($this->_sections['dyn']['total'] == 0)
        $this->_sections['dyn']['show'] = false;
} else
    $this->_sections['dyn']['total'] = 0;
if ($this->_sections['dyn']['show']):

            for ($this->_sections['dyn']['index'] = $this->_sections['dyn']['start'], $this->_sections['dyn']['iteration'] = 1;
                 $this->_sections['dyn']['iteration'] <= $this->_sections['dyn']['total'];
                 $this->_sections['dyn']['index'] += $this->_sections['dyn']['step'], $this->_sections['dyn']['iteration']++):
$this->_sections['dyn']['rownum'] = $this->_sections['dyn']['iteration'];
$this->_sections['dyn']['index_prev'] = $this->_sections['dyn']['index'] - $this->_sections['dyn']['step'];
$this->_sections['dyn']['index_next'] = $this->_sections['dyn']['index'] + $this->_sections['dyn']['step'];
$this->_sections['dyn']['first']      = ($this->_sections['dyn']['iteration'] == 1);
$this->_sections['dyn']['last']       = ($this->_sections['dyn']['iteration'] == $this->_sections['dyn']['total']);
?>

			<div class="dynamic">
		        <ul>
		          <h3><a href="/"><?php echo $this->_tpl_vars['achievements'][$this->_sections['dyn']['index']]['title']; ?>
</a></h3>
		          <div class="autor"><span>作者：<?php echo $this->_tpl_vars['achievements'][$this->_sections['dyn']['index']]['authors']; ?>
</span></div>
		          	<a href="<?php echo $this->_tpl_vars['url']; ?>
/detail/pid/<?php echo $this->_tpl_vars['achievements'][$this->_sections['dyn']['index']]['id']; ?>
" target="_blank" class="readmore">全文</a></p>
		        </ul>
	        	<div class="dateview"><?php echo $this->_tpl_vars['achievements'][$this->_sections['dyn']['index']]['date']; ?>
</div>
	      	</div>

	     <?php endfor; endif; ?>

      <?php echo $this->_tpl_vars['fpage']; ?>



    </div>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>