<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 18:00:26
         compiled from "views\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2796555fffde661adf4-02244665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cdfb01037f6bc8d5f25a63cac5c53d72c71f1' => 
    array (
      0 => 'views\\contact.tpl',
      1 => 1444320024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2796555fffde661adf4-02244665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fffde661b969_79353747',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fffde661b969_79353747')) {function content_55fffde661b969_79353747($_smarty_tpl) {?><div class="container">
  <h3>For info & bookings:</h3>
info:<a href="mailto: info@slashnroses.com"> slashnroses.com</a>

<p>tel:+31(0)6 15851825</p>
  <div id="contact-area">
    <h2>contact</h2>
  <form role="form" id="form" method="post">
    <input type="text" id="name" placeholder="full name" autocomplete="off">
    <input type="text" id="city" placeholder="city" autocomplete="off">
    <input type="text" id="email" placeholder="email" autocomplete="off">
    <input type="text" id="phone" placeholder="phone" autocomplete="off">
    <textarea id="message" placeholder="message" autocomplete="off"></textarea>
    <input type="submit" id="submit" value="send">
  </form>
  </div>
  <img src="images/record_company.png" width="186" height="186" id="record_image">
</div>
<?php }} ?>
