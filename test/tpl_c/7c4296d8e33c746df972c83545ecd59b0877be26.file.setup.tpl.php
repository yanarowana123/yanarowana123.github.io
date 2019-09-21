<?php /* Smarty version Smarty-3.1.8, created on 2017-08-28 17:29:08
         compiled from "tpl/ru/confirm/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114032038759a428b4a1ec45-02431433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4296d8e33c746df972c83545ecd59b0877be26' => 
    array (
      0 => 'tpl/ru/confirm/admin/setup.tpl',
      1 => 1503643950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114032038759a428b4a1ec45-02431433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59a428b4a4fad2_85938765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a428b4a4fad2_85938765')) {function content_59a428b4a4fad2_85938765($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Confirmation'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Captcha'=>array('S','Protect by "captcha"',0,array(0=>'no',1=>'auto',2=>'always')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>