<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:28:33
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\new-theme\template\components\layout\warning_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20514520415a38e9d174ba47-51181043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e16702f282f62a7d8cdc726990899aaaec30b44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\new-theme\\template\\components\\layout\\warning_messages.tpl',
      1 => 1513674585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20514520415a38e9d174ba47-51181043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e9d1751d77_96483563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e9d1751d77_96483563')) {function content_5a38e9d1751d77_96483563($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1) {?>
        <h4><?php echo smartyTranslate(array('s'=>'There are %d warnings:','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value))),$_smarty_tpl);?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
