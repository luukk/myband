<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 09:49:51
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26390560925c6661285-85459424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1444376513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26390560925c6661285-85459424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560925c6663124_45822324',
  'variables' => 
  array (
    'pagenum' => 0,
    'to' => 0,
    'number' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560925c6663124_45822324')) {function content_560925c6663124_45822324($_smarty_tpl) {?><ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['pagenum']->value!=1) {?>
  <li><a href=?action=home&pagenum=<?php echo $_smarty_tpl->tpl_vars['pagenum']->value-1;?>
>vorige</a></li>
<?php }?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <li <?php if ($_smarty_tpl->tpl_vars['number']->value==$_smarty_tpl->tpl_vars['i']->value) {?> class="active"<?php }?>><a href=?action=home&pagenum=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
<?php }} ?>
<?php if ($_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['to']->value) {?>
  <li><a href=?action=home&pagenum=<?php echo $_smarty_tpl->tpl_vars['pagenum']->value+1;?>
>volgende</a></li>
<?php }?>
</ul>
<?php }} ?>
