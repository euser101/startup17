<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:28:33
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\new-theme\template\components\layout\confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13689578525a38e9d16f7a01-39206410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7df98d6ba20c935bde9d855b08f8d5647363a86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1513674585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13689578525a38e9d16f7a01-39206410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e9d16fcf35_23224707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e9d16fcf35_23224707')) {function content_5a38e9d16fcf35_23224707($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
