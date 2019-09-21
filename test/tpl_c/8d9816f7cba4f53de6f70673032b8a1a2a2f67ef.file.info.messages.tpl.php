<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:38:21
         compiled from "tpl/ru/info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1249909431573a09767ebfa6-40714529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9816f7cba4f53de6f70673032b8a1a2a2f67ef' => 
    array (
      0 => 'tpl/ru/info.messages.tpl',
      1 => 1568971265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249909431573a09767ebfa6-40714529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a09768199d6_07603638',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a09768199d6_07603638')) {function content_573a09768199d6_07603638($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Completed','Saved'=>'Saved','Canceled'=>'Canceled','Added'=>'Added','Deleted'=>'Deleted','LogIn'=>'Logged in','LogOut'=>'Logged out','*NoSelected'=>'Select element(s)','*CantComplete'=>'Can\'t complete operation','*AlreadyUsed'=>'Already used','*Error'=>'The operation failed','*ErrorCode'=>'Error code','*NoPage'=>'Page not found','*Denied'=>'Access denied'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?><?php }} ?>