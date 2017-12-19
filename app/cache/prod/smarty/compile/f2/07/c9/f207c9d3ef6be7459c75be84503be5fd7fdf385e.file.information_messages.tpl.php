<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:28:33
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\new-theme\template\components\layout\information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6795271375a38e9d16a6846-99701366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f207c9d3ef6be7459c75be84503be5fd7fdf385e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1513674585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6795271375a38e9d16a6846-99701366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e9d16ab896_62155293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e9d16ab896_62155293')) {function content_5a38e9d16ab896_62155293($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
