<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:28:19
         compiled from "module:ps_customtext/ps_customtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9369060525a38e9c3c65146-44404963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:ps_customtext/ps_customtext.tpl',
      1 => 1513674609,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9369060525a38e9c3c65146-44404963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e9c3c66c18_51119081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e9c3c66c18_51119081')) {function content_5a38e9c3c66c18_51119081($_smarty_tpl) {?>

<div id="custom-text">
  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

</div>
<?php }} ?>
