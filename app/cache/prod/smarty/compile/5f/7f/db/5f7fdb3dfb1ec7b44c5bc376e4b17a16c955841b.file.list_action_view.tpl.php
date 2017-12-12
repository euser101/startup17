<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 10:43:53
         compiled from "C:\xampp\htdocs\root\admin529q2cv96\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11613267495a2fa4d987ffe8-01487311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7fdb3dfb1ec7b44c5bc376e4b17a16c955841b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\admin529q2cv96\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1513071222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11613267495a2fa4d987ffe8-01487311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2fa4d9883807_59002849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa4d9883807_59002849')) {function content_5a2fa4d9883807_59002849($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
