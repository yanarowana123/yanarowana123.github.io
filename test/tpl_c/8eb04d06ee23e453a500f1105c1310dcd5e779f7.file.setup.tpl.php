<?php /* Smarty version Smarty-3.1.8, created on 2017-08-29 16:32:58
         compiled from "tpl/ru/news/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944100501573a0b350f6e43-49941602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb04d06ee23e453a500f1105c1310dcd5e779f7' => 
    array (
      0 => 'tpl/ru/news/admin/setup.tpl',
      1 => 1503985966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944100501573a0b350f6e43-49941602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b351231c2_11640907',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b351231c2_11640907')) {function content_573a0b351231c2_11640907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('ShowCount'=>array('I','Кол-во новостей на странице'),'InBlock'=>array('I','Кол-во новостей в блоке'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>