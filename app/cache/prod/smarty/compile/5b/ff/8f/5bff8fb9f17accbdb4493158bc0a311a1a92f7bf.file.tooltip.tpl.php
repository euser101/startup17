<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 10:42:53
         compiled from "C:\xampp\htdocs\root\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15832953105a2fa49d1de822-93608833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bff8fb9f17accbdb4493158bc0a311a1a92f7bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1513071250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15832953105a2fa49d1de822-93608833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2fa49d1e0680_92416268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa49d1e0680_92416268')) {function content_5a2fa49d1e0680_92416268($_smarty_tpl) {?>

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
