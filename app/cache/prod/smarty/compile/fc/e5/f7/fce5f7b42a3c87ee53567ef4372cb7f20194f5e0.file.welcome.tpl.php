<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:30:09
         compiled from "C:\xampp\htdocs\myFoto\modules\welcome\views\contents\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15959325075a38ea31485ed1-49228440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce5f7b42a3c87ee53567ef4372cb7f20194f5e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\modules\\welcome\\views\\contents\\welcome.tpl',
      1 => 1513674612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15959325075a38ea31485ed1-49228440',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38ea314a6608_33886288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38ea314a6608_33886288')) {function content_5a38ea314a6608_33886288($_smarty_tpl) {?>

<div class="onboarding-welcome">
  <i class="material-icons onboarding-button-shut-down">close</i>
  <p class="welcome"><?php echo smartyTranslate(array('s'=>'Welcome to your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hi! My name is Preston and I\'m here to show you around.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'You will discover a few essential steps before you can launch your shop:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    <?php echo smartyTranslate(array('s'=>'Create your first product, customize your shop, configure shipping and payments...','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="started">
    <p><?php echo smartyTranslate(array('s'=>'Let\'s get started!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="buttons">
    <button class="btn btn-tertiary-outline btn-lg onboarding-button-shut-down"><?php echo smartyTranslate(array('s'=>'Later','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    <button class="blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Start','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
