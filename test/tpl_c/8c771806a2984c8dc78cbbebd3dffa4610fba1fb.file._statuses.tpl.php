<?php /* Smarty version Smarty-3.1.8, created on 2017-08-22 15:41:21
         compiled from "tpl/ru/calendar/admin/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611712442573b39f2b18c10-73155909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c771806a2984c8dc78cbbebd3dffa4610fba1fb' => 
    array (
      0 => 'tpl/ru/calendar/admin/_statuses.tpl',
      1 => 1503076985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611712442573b39f2b18c10-73155909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573b39f2b20377_52984501',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b39f2b20377_52984501')) {function content_573b39f2b20377_52984501($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['d_types'] = new Smarty_variable(array(1=>'рабочий',2=>'выходной',3=>'праздничный'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['d_types'] = clone $_smarty_tpl->tpl_vars['d_types']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['d_types'] = clone $_smarty_tpl->tpl_vars['d_types'];?><?php }} ?>