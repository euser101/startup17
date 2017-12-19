<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:11
         compiled from "C:\xampp\htdocs\myFoto\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10435698135a38ea334d6ef1-15412827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4180e8b709f6577ef10ae284c182a7eee387b0a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1513674612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10435698135a38ea334d6ef1-15412827',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38ea334d8ee7_84107267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea334d8ee7_84107267')) {function content_5a38ea334d8ee7_84107267($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
