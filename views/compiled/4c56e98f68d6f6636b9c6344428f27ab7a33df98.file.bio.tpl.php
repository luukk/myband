<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 12:15:55
         compiled from "views\bio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105095616425b3b09c3-56079237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c56e98f68d6f6636b9c6344428f27ab7a33df98' => 
    array (
      0 => 'views\\bio.tpl',
      1 => 1444237518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105095616425b3b09c3-56079237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5616425b4f7458_74628955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5616425b4f7458_74628955')) {function content_5616425b4f7458_74628955($_smarty_tpl) {?>
<div class="container" id="contact">
  <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h1>
    <content><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['picture'];?>
" id="image"></content>

    <div id="media"><iframe width="420" height="315"
    src="<?php echo $_smarty_tpl->tpl_vars['info']->value['media'];?>
" frameborder="0" allowfullscreen>
    </iframe></div>
  <?php } ?>
</div>
<?php }} ?>
