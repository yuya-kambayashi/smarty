<?php /* Smarty version 2.6.31, created on 2022-04-21 09:43:05
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.tpl', 8, false),array('modifier', 'upper', 'index.tpl', 10, false),array('modifier', 'lower', 'index.tpl', 12, false),array('modifier', 'capitalize', 'index.tpl', 14, false),)), $this); ?>
<html>
<head>
<title>Smartyのテスト</title>
</head>
<body>
Hello, <?php echo $this->_tpl_vars['name']; ?>
!
<br>
現在の日時は <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M:%S')); ?>
 です。
<p>このサイトはSmarty version<?php echo '2.6.31'; ?>
 で作成されています。</p>
名前は <?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
 です。
<br>
名前は <?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
 です。
<br>
住所は <?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
 です。
<br>

住所は <?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
 です。
<br>
<?php if ($this->_tpl_vars['engine'] == 'yahoo'): ?>
  <p>検索サイトは<a href="https://www.yahoo.co.jp/">Yahoo</a>です</p>
<?php elseif ($this->_tpl_vars['engine'] == 'Google'): ?>
  <p>検索サイトは<a href="https://www.google.co.jp/">Google</a>です</p>
<?php else: ?>
  <p>検索サイトは指定されていません</p>
<?php endif; ?>
<br>

<?php $_from = $this->_tpl_vars['personaldata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loopname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loopname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['keyname'] => $this->_tpl_vars['var']):
        $this->_foreach['loopname']['iteration']++;
?>
<p>キー:<?php echo $this->_tpl_vars['keyname']; ?>
</p>
<p>要素:<?php echo $this->_tpl_vars['var']; ?>
</p>
<p>(<?php echo $this->_foreach['loopname']['iteration']; ?>
) <?php echo $this->_tpl_vars['var']; ?>
</p>
<p>[<?php echo ($this->_foreach['loopname']['iteration']-1); ?>
]<?php echo $this->_tpl_vars['var']; ?>
</p>
<?php endforeach; endif; unset($_from); ?>

<?php $_from = $this->_tpl_vars['personaldata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loopname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loopname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['var']):
        $this->_foreach['loopname']['iteration']++;
?>
<p>要素:<?php echo $this->_tpl_vars['var']; ?>
</p>
<?php endforeach; else: ?>
<p>値がありません</p>
<?php endif; unset($_from); ?>

</body>
</html>