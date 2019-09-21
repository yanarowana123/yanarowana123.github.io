<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:38:09
         compiled from "tpl/en/info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8089630985738c0e0cfc951-98764404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ab94785bdf0b60a1814da9deadc08d779cd8f2' => 
    array (
      0 => 'tpl/en/info.messages.tpl',
      1 => 1568971261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8089630985738c0e0cfc951-98764404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0e0d31307_97221150',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0e0d31307_97221150')) {function content_5738c0e0d31307_97221150($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Completed','Saved'=>'Saved','Canceled'=>'Canceled','Added'=>'Added','Deleted'=>'Deleted','LogIn'=>'Logged in','LogOut'=>'Logged out','*NoSelected'=>'Select element(s)','*CantComplete'=>'Can\'t complete operation','*AlreadyUsed'=>'Already used','*Error'=>'The operation failed','*ErrorCode'=>'Error code','*NoPage'=>'Page not found','*Denied'=>'Access denied'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?><?php }} ?>