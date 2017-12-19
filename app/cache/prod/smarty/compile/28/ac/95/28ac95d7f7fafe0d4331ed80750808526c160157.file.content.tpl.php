<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:10
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5059322545a38ea328f72a0-01015740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28ac95d7f7fafe0d4331ed80750808526c160157' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1513674582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5059322545a38ea328f72a0-01015740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38ea328fbfc4_55997694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea328fbfc4_55997694')) {function content_5a38ea328fbfc4_55997694($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
