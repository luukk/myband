<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 18:24:12
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2052355f7cfc27e3f62-01595320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444235050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2052355f7cfc27e3f62-01595320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7cfc2816306_62215070',
  'variables' => 
  array (
    'data' => 0,
    'newsItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7cfc2816306_62215070')) {function content_55f7cfc2816306_62215070($_smarty_tpl) {?><div class="container">

<?php  $_smarty_tpl->tpl_vars['newsItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItems']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['newsItems']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['newsItems']->key => $_smarty_tpl->tpl_vars['newsItems']->value) {
$_smarty_tpl->tpl_vars['newsItems']->_loop = true;
 $_smarty_tpl->tpl_vars['newsItems']->index++;
?>
<?php if ($_smarty_tpl->tpl_vars['newsItems']->index<1) {?>
<div class="row">
  <div class="col-md-9">
    <article>
      <h1><?php echo $_smarty_tpl->tpl_vars['newsItems']->value['title'];?>
</h1>
      <div class="date_created">
        <span class="glyphicon glyphicon-time"></span>
        <?php echo $_smarty_tpl->tpl_vars['newsItems']->value['date_created'];?>

      </div>
      <content><?php echo $_smarty_tpl->tpl_vars['newsItems']->value['content'];?>
</content>
      <img src="<?php echo $_smarty_tpl->tpl_vars['newsItems']->value['image'];?>
">
  </article>
  <div class="row">
  <div class="col-md-12">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['newsItems']->index>0&&$_smarty_tpl->tpl_vars['newsItems']->index<4) {?>
        <div class="col-md-4">
          <article>
            <h4><?php echo $_smarty_tpl->tpl_vars['newsItems']->value['title'];?>
</h4>
            <div class="date_created">
              <span class="glyphicon glyphicon-time"></span>
              <?php echo $_smarty_tpl->tpl_vars['newsItems']->value['date_created'];?>

            </div>
            <content><?php echo $_smarty_tpl->tpl_vars['newsItems']->value['content'];?>
</content>
            <img src="<?php echo $_smarty_tpl->tpl_vars['newsItems']->value['image'];?>
" ALIGN="Top">
          </article>
        </div>
        <?php }?>
<?php if ($_smarty_tpl->tpl_vars['newsItems']->index==3) {?>
</div>
</div>
</div>
<div class="col-md-3">
  <a class="twitter-timeline" href="https://twitter.com/Slash" data-widget-id="651109152278872065">Tweets door @Slash</a>
</div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['newsItems']->index==4) {?>
  <div class="row">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['newsItems']->index>3&&$_smarty_tpl->tpl_vars['newsItems']->index<9) {?>
<div class="col-md-3">
  <article>
    <h4><?php echo $_smarty_tpl->tpl_vars['newsItems']->value['title'];?>
</h4>
    <div class="date_created">
      <span class="glyphicon glyphicon-time"></span>
      <?php echo $_smarty_tpl->tpl_vars['newsItems']->value['date_created'];?>

    </div>
    <content><?php echo $_smarty_tpl->tpl_vars['newsItems']->value['content'];?>
</content>
    <img src="<?php echo $_smarty_tpl->tpl_vars['newsItems']->value['image'];?>
">
</article>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['newsItems']->index==8) {?>
</div>
<?php }?>
<?php } ?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
