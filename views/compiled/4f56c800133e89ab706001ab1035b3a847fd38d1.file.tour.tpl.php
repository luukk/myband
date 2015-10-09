<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 19:58:32
         compiled from "views\tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602055fffde5366117-23887930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f56c800133e89ab706001ab1035b3a847fd38d1' => 
    array (
      0 => 'views\\tour.tpl',
      1 => 1444067908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1602055fffde5366117-23887930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fffde5389d21_82099422',
  'variables' => 
  array (
    'tour' => 0,
    'getTour' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fffde5389d21_82099422')) {function content_55fffde5389d21_82099422($_smarty_tpl) {?>  <div class="container">
    <?php  $_smarty_tpl->tpl_vars['getTour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['getTour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['getTour']->key => $_smarty_tpl->tpl_vars['getTour']->value) {
$_smarty_tpl->tpl_vars['getTour']->_loop = true;
?>
    <div class="row tourRow">
      <h1 class="tourDate"><?php echo $_smarty_tpl->tpl_vars['getTour']->value['dat'];?>
</h1>
      <div class="line"></div>
      <div class="info">
        <div class="location">
          <?php echo $_smarty_tpl->tpl_vars['getTour']->value['location'];?>

          <div class="horizontal-line">|</div>
        </div>
        <div class="venue"><?php echo $_smarty_tpl->tpl_vars['getTour']->value['venue'];?>
</div>
      </div>

  </div>
    <?php } ?>
  </div>
</div>
<?php }} ?>
