<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 18:20:03
         compiled from "views\header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5660561174eca09152-25555970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c0e6ece5eda5d3e621b5ffad49e7100f717a2c' => 
    array (
      0 => 'views\\header2.tpl',
      1 => 1444320083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5660561174eca09152-25555970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561174eca2e1f6_60381969',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561174eca2e1f6_60381969')) {function content_561174eca2e1f6_60381969($_smarty_tpl) {?><div id="tourBody">
<nav class="navbar">
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="?action=home">home</a></li>
          <li class="selected"><a href="?action=tour">tour</a></li>
          <li><a href="?action=bio">bio</a></li>
          <li><a href="?action=contact">contact</a></li>
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
<?php }} ?>
