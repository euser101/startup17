<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 10:42:52
         compiled from "C:\xampp\htdocs\root\admin529q2cv96\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7799609975a2fa49c86a4d8-98720430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58128c9550ff4cd37f8d1877237b2b7764e9b069' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\admin529q2cv96\\themes\\default\\template\\content.tpl',
      1 => 1513071220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7799609975a2fa49c86a4d8-98720430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2fa49c86cdd3_18645906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa49c86cdd3_18645906')) {function content_5a2fa49c86cdd3_18645906($_smarty_tpl) {?>
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
