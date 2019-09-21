<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:02:51
         compiled from "tpl/ru/depo/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670389207573a0a65ef4118-12893250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df7454e379f185ec6ea9351e409ac81b1e64eba' => 
    array (
      0 => 'tpl/ru/depo/_statuses.tpl',
      1 => 1568373373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670389207573a0a65ef4118-12893250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0a65efea35_28630153',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0a65efea35_28630153')) {function content_573a0a65efea35_28630153($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['ststrs'] = new Smarty_variable(array(0=>'Canceled',1=>'Active',2=>'Completed',3=>'Close'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs'];?>
<?php }} ?>