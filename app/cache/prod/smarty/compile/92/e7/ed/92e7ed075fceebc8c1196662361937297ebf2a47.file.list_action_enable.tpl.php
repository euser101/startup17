<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:09
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\helpers\list\list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9193246715a38ea31eedf57-85262288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e7ed075fceebc8c1196662361937297ebf2a47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1513674584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9193246715a38ea31eedf57-85262288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38ea31ef71a9_88135009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea31ef71a9_88135009')) {function content_5a38ea31ef71a9_88135009($_smarty_tpl) {?>
<a class="list-action-enable<?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }?><?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_enable']->value,'html','UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?><?php echo smartyTranslate(array('s'=>'Enabled','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Disabled','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }} ?>
