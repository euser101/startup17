<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 10:42:53
         compiled from "C:\xampp\htdocs\root\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13267456845a2fa49d0dc359-72158898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07886d79cf1ead3eb9781a5ab1e2e5accadd84e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\modules\\welcome\\views\\navbar.tpl',
      1 => 1513071250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13267456845a2fa49d0dc359-72158898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2fa49d0df8a4_73365998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa49d0df8a4_73365998')) {function content_5a2fa49d0df8a4_73365998($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
