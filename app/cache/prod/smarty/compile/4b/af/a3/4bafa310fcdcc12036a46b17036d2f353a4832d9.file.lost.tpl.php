<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:11
         compiled from "C:\xampp\htdocs\myFoto\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10401113075a38ea33449a27-04734110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bafa310fcdcc12036a46b17036d2f353a4832d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1513674612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10401113075a38ea33449a27-04734110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38ea3344d376_06886095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea3344d376_06886095')) {function content_5a38ea3344d376_06886095($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
