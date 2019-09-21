<?php /* Smarty version Smarty-3.1.8, created on 2017-08-19 09:14:49
         compiled from "tpl/en/refsys/_refs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158008191599801892ab2e3-84390108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623736c5d8c758bc6059f565f723eacc9b501f79' => 
    array (
      0 => 'tpl/en/refsys/_refs.tpl',
      1 => 1503076863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158008191599801892ab2e3-84390108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refs' => 0,
    'i' => 0,
    'r' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599801892dab21_41143017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599801892dab21_41143017')) {function content_599801892dab21_41143017($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['states'] = new Smarty_variable(array(0=>'Non-active',1=>'Active',2=>'Blocked',3=>'Disabled'), null, 0);?>Приглашенные<table class="FormatTable" border="1"><tr><th>User</th><th>Reg.date</th><th>Deposits</th><th>Amount</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if (count($_smarty_tpl->tpl_vars['refs']->value)>1){?><tr><td colspan="4" align="center">Level <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
<?php if ($_smarty_tpl->tpl_vars['r']->value['perc']){?>: <?php echo $_smarty_tpl->tpl_vars['r']->value['perc'];?>
%<?php }?></td></tr><?php }?><?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['r']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['u']->key;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value['uLogin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['aCTS'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['u']->value['ZDepo'],1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['u']->value['ZRef'],1);?>
</td></tr><?php } ?><?php } ?></table><?php }} ?>