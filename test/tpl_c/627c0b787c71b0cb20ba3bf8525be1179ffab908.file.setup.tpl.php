<?php /* Smarty version Smarty-3.1.8, created on 2017-08-28 17:27:52
         compiled from "tpl/ru/captcha/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164943997059a4286879fde6-23073547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '627c0b787c71b0cb20ba3bf8525be1179ffab908' => 
    array (
      0 => 'tpl/ru/captcha/setup.tpl',
      1 => 1503643873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164943997059a4286879fde6-23073547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59a428687ca470_37946300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a428687ca470_37946300')) {function content_59a428687ca470_37946300($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Captcha'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('View'=>array('S','Type',0,array(1=>'Distortion',2=>'Mosaic',3=>'Shadows')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>