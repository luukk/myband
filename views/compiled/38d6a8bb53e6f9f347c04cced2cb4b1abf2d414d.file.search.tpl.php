<?php /* Smarty version Smarty-3.1.18, created on 2015-09-29 10:11:29
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297485607cab24967a5-89418210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1443514287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297485607cab24967a5-89418210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5607cab2497663_31051220',
  'variables' => 
  array (
    'hoi' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5607cab2497663_31051220')) {function content_5607cab2497663_31051220($_smarty_tpl) {?><div class="container">
<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hoi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
  <div id="item">
    <h4>
      <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

    </h4>
        <content><?php echo $_smarty_tpl->tpl_vars['foo']->value['content'];?>
</content>
        <img src="<?php echo $_smarty_tpl->tpl_vars['foo']->value['image'];?>
">
  </div>

<?php } ?>
</div>
<?php }} ?>
