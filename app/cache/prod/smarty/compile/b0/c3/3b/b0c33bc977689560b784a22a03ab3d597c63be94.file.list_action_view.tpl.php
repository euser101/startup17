<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:09
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13432388015a38ea31df24f2-60006688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0c33bc977689560b784a22a03ab3d597c63be94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1513674584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13432388015a38ea31df24f2-60006688',
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
  'unifunc' => 'content_5a38ea31df5f42_46967120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea31df5f42_46967120')) {function content_5a38ea31df5f42_46967120($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
