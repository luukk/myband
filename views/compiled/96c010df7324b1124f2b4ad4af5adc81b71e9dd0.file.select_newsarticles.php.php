<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 08:55:13
         compiled from "models\select_newsarticles.php" */ ?>
<?php /*%%SmartyHeaderCode:32349560b8751930c25-90836814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96c010df7324b1124f2b4ad4af5adc81b71e9dd0' => 
    array (
      0 => 'models\\select_newsarticles.php',
      1 => 1443596062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32349560b8751930c25-90836814',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560b8751934633_17677209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b8751934633_17677209')) {function content_560b8751934633_17677209($_smarty_tpl) {?><<?php ?>?php
$nr_items_page = 9;
$offset = ($pagenum -1) * $nr_items_page;
$result = "SELECT * FROM newsarticles LIMIT " . $offset. "," . $nr_items_page;
$data = $mysqli->query($result);

$query = "SELECT * FROM newsarticles";
$rs_result = $mysqli->query($query);
$total_records = $rs_result->num_rows;
$total_pages = ceil($total_records / $nr_items_page);

echo '<a href=?action=home&page=1><|</a>';

for($i=1; $i<=$total_pages; $i++){
  echo '<a href=?action=home&pagenum='.$i.'>'.$i.'</a>    ';

}

echo "<a href='?action=home&pagenum=$total_pages'>".'>|'."</a> ";

?<?php ?>>
<?php }} ?>
