<?php /* Smarty version Smarty-3.1.7, created on 2012-03-05 14:52:40
         compiled from "../smarty/templates/hidden/fb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479492114f5519884a91b4-68442540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6bef61c9103ef3cc0e14605ccf696c40619b071' => 
    array (
      0 => '../smarty/templates/hidden/fb.tpl',
      1 => 1330976935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479492114f5519884a91b4-68442540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5519884ac3a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5519884ac3a')) {function content_4f5519884ac3a($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php }} ?>