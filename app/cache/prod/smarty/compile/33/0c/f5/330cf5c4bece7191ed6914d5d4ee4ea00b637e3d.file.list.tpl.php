<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:24:55
         compiled from "C:\xampp\htdocs\myFoto\modules\ps_imageslider\views\templates\hook\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8126141685a38e8f7b442c4-94589205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '330cf5c4bece7191ed6914d5d4ee4ea00b637e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\modules\\ps_imageslider\\views\\templates\\hook\\list.tpl',
      1 => 1513674610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8126141685a38e8f7b442c4-94589205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'slides' => 0,
    'slide' => 0,
    'image_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e8f7b52a44_01996112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e8f7b52a44_01996112')) {function content_5a38e8f7b52a44_01996112($_smarty_tpl) {?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Slides list','d'=>'Modules.Imageslider.Admin'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ps_imageslider&addSlide=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Add new','d'=>'Admin.Actions'),$_smarty_tpl);?>
" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="slidesContent">
		<div id="slides">
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
				<div id="slides_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-3">
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" class="img-thumbnail" />
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">
								#<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
 - <?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>

								<?php if ($_smarty_tpl->tpl_vars['slide']->value['is_shared']) {?>
									<div>
										<span class="label color_field pull-left" style="background-color:#108510;color:white;margin-top:5px;">
											<?php echo smartyTranslate(array('s'=>'Shared slide','d'=>'Modules.Imageslider.Admin'),$_smarty_tpl);?>

										</span>
									</div>
								<?php }?>
							</h4>
							<div class="btn-group-action pull-right">
								<?php echo $_smarty_tpl->tpl_vars['slide']->value['status'];?>


								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ps_imageslider&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ps_imageslider&delete_id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }} ?>
