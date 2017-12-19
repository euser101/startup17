<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:09
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19195720215a38ea31e3fd46-11377239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df666ecbd30d92e908666edb2b01babe47b183b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1513674584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19195720215a38ea31e3fd46-11377239',
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
  'unifunc' => 'content_5a38ea31e43af4_04694754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea31e43af4_04694754')) {function content_5a38ea31e43af4_04694754($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
