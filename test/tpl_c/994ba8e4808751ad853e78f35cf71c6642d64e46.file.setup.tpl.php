<?php /* Smarty version Smarty-3.1.8, created on 2017-08-29 17:14:24
         compiled from "tpl/ru/review/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42716321059a576c0687946-93313897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994ba8e4808751ad853e78f35cf71c6642d64e46' => 
    array (
      0 => 'tpl/ru/review/admin/setup.tpl',
      1 => 1503643962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42716321059a576c0687946-93313897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59a576c06a4ea1_06979604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a576c06a4ea1_06979604')) {function content_59a576c06a4ea1_06979604($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Mode'=>array('C','Модерировать отзывы'),'ShowCount'=>array('I','Кол-во отзывов на странице'),'InBlock'=>array('I','Кол-во отзывов в блоке'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>