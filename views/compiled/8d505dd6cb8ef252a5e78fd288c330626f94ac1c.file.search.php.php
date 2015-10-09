<?php /* Smarty version Smarty-3.1.18, created on 2015-09-27 16:37:56
         compiled from "views\search.php" */ ?>
<?php /*%%SmartyHeaderCode:95265607fc971bb960-49193398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d505dd6cb8ef252a5e78fd288c330626f94ac1c' => 
    array (
      0 => 'views\\search.php',
      1 => 1443364674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95265607fc971bb960-49193398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5607fc97205333_61897991',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5607fc97205333_61897991')) {function content_5607fc97205333_61897991($_smarty_tpl) {?><<?php ?>?php
$name = $_POST['name'];
echo $name;
$GET =$_GET['query'];
echo $GET;
echo 'hoi';
 ?<?php ?>>
<?php }} ?>
