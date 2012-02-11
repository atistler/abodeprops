<?php /* Smarty version Smarty-3.1.7, created on 2012-02-11 18:25:31
         compiled from "../smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15107071544f36f81cad4432-74900999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c04115701025fdf186966beead194600e6e675d' => 
    array (
      0 => '../smarty/templates/index.tpl',
      1 => 1329002728,
      2 => 'file',
    ),
    '73eb0337940e16283b562f0928ed27fb8d6e091d' => 
    array (
      0 => '../smarty/templates/hidden/layout.tpl',
      1 => 1329001953,
      2 => 'file',
    ),
    '1f7826ce7e13df53e0ee343f85a4dca939ab9e0e' => 
    array (
      0 => '../smarty/templates/hidden/header.tpl',
      1 => 1328947578,
      2 => 'file',
    ),
    '6ce2637a24583b2ffa23d9c568aee820537a568a' => 
    array (
      0 => '../smarty/templates/hidden/menu.tpl',
      1 => 1329002079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15107071544f36f81cad4432-74900999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f36f81cb2882',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f36f81cb2882')) {function content_4f36f81cb2882($_smarty_tpl) {?><html>
<?php echo $_smarty_tpl->getSubTemplate ("hidden/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div class="container">
    
        <?php /*  Call merged included template "hidden/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("hidden/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15107071544f36f81cad4432-74900999');
content_4f36f8eb522c1($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "hidden/header.tpl" */?>
    
    
<div class="content">
    <div class="slider">
        <img src="/img/living_room.jpg"/>
        <img src="/img/living_room.jpg"/>
        <img src="/img/living_room.jpg"/>
        <img src="/img/living_room.jpg"/>
        <img src="/img/living_room.jpg"/>
    </div>
    <div class="horizontal_spacer"></div>
    <?php /*  Call merged included template "hidden/menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("hidden/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15107071544f36f81cad4432-74900999');
content_4f36f8eb53425($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "hidden/menu.tpl" */?>
</div>

</div>
</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.7, created on 2012-02-11 18:25:31
         compiled from "../smarty/templates/hidden/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f36f8eb522c1')) {function content_4f36f8eb522c1($_smarty_tpl) {?><div class="header">
    <div class="description">A Boutique Real Estate Agency</div>
    <div class="title">Abode<br>Properties</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.7, created on 2012-02-11 18:25:31
         compiled from "../smarty/templates/hidden/menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f36f8eb53425')) {function content_4f36f8eb53425($_smarty_tpl) {?><div class="menu">
    <div class="about_us item">
        <a href="/about_us">
            <div class="title">About Us</div>
            <img src="/img/dining_room.jpg">
        </a>
    </div>
    <div class="vertical_spacer"></div>
    <div class="philosophy item">
        <a href="/philosophy">
            <div class="title">Philosophy</div>
            <img src="/img/dining_room.jpg">
        </a>
    </div>
    <div class="vertical_spacer"></div>
    <div class="services item">
        <a href="/services">
            <div class="title">Services</div>
            <img src="/img/dining_room.jpg">
        </a>
    </div>
    <div class="vertical_spacer"></div>
    <div class="contact item">
        <a href="/contact">
            <div class="title">Contact</div>
            <img src="/img/dining_room.jpg">
        </a>
    </div>
    <div style="clear:both"></div>
</div><?php }} ?>