<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 10:42:53
         compiled from "C:\xampp\htdocs\root\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20848876525a2fa49d13d254-80233371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7482cdeac8292746bcb1f35a4c6c5c70560f8b8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1513071250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20848876525a2fa49d13d254-80233371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2fa49d141a09_77469808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa49d141a09_77469808')) {function content_5a2fa49d141a09_77469808($_smarty_tpl) {?>

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
