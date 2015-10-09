<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 18:02:08
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1811055f7c49d77d702-16513457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444320126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811055f7c49d77d702-16513457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7c49d7a50a4_87848375',
  'variables' => 
  array (
    'currpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c49d7a50a4_87848375')) {function content_55f7c49d7a50a4_87848375($_smarty_tpl) {?><body>
<div class="jumbotron">
  <nav class="navbar">
      <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['currpage']->value=='home') {?> class="selected"<?php }?>><a href="?action=home">home</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['currpage']->value=='tour') {?> class="selected"<?php }?>><a href="?action=tour">tour</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['currpage']->value=='bio') {?> class="selected"<?php }?>><a href="?action=bio">bio</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['currpage']->value=='contact') {?> class="selected"<?php }?>><a href="?action=contact">contact</a></li>
          </ul>
          <ul>
              <form class="navbar-form" method="get">
                <div class="form-group">
                  <input type="hidden" name="action" value="search" />
                  <input type="text" name="query" id="search" placeholder="search" onkeyup="showHint(this.value)" autocomplete="off">
                  <span class=" glyphicon glyphicon-search"></span>
                  <div id="output"></div>
                </div>

              </form>
          </ul>
            </div>
  </nav>
</div>
</body>
<?php }} ?>
