<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:24:54
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\controllers\modules\modal_translation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16123822955a38e8f617aad4-26545799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9b6d387750ad88f97483082b39c81392f84aaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\controllers\\modules\\modal_translation.tpl',
      1 => 1513674582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16123822955a38e8f617aad4-26545799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_languages' => 0,
    'language' => 0,
    'translateLinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e8f61819f0_00575203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e8f61819f0_00575203')) {function content_5a38e8f61819f0_00575203($_smarty_tpl) {?>
<div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo smartyTranslate(array('s'=>'Manage translations'),$_smarty_tpl);?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<li>
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['translateLinks']->value[$_smarty_tpl->tpl_vars['language']->value['iso_code']],'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8');?>
</a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }} ?>
