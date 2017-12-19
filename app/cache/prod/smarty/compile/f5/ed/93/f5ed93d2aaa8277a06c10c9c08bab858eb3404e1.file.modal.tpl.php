<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:10
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19740489965a38ea32bebd39-54648144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ed93d2aaa8277a06c10c9c08bab858eb3404e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1513674584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19740489965a38ea32bebd39-54648144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38ea32bedc93_47906332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea32bedc93_47906332')) {function content_5a38ea32bedc93_47906332($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
