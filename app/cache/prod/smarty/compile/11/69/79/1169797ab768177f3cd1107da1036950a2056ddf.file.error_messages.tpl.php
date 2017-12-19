<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 11:28:33
         compiled from "C:\xampp\htdocs\myFoto\admin4033a5vm3\themes\new-theme\template\components\layout\error_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2668488075a38e9d16344c8-42998106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1169797ab768177f3cd1107da1036950a2056ddf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myFoto\\admin4033a5vm3\\themes\\new-theme\\template\\components\\layout\\error_messages.tpl',
      1 => 1513674585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2668488075a38e9d16344c8-42998106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'disableDefaultErrorOutPut' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a38e9d16406c9_19095763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38e9d16406c9_19095763')) {function content_5a38e9d16406c9_19095763($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)&&current($_smarty_tpl->tpl_vars['errors']->value)!=''&&(!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)||$_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value==false)) {?>
  <div class="bootstrap">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1) {?>
        <?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

      <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['errors']->value))),$_smarty_tpl);?>

        <br/>
        <ol>
          <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
          <?php } ?>
        </ol>
      <?php }?>
    </div>
  </div>
<?php }?>
<?php }} ?>
