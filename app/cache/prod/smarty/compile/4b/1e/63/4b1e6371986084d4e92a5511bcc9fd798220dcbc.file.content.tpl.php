<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:16:10
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6917719675a38e6eabec066-24423740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b1e6371986084d4e92a5511bcc9fd798220dcbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\content.tpl',
      1 => 1513674581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6917719675a38e6eabec066-24423740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e6eabeeff8_69883447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e6eabeeff8_69883447')) {function content_5a38e6eabeeff8_69883447($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
