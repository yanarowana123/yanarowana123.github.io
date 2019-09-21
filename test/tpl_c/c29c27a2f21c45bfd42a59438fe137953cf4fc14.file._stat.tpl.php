<?php /* Smarty version Smarty-3.1.8, created on 2017-08-25 20:57:55
         compiled from "tpl/en/balance/_stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15197207195738c0e6e27244-39766706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29c27a2f21c45bfd42a59438fe137953cf4fc14' => 
    array (
      0 => 'tpl/en/balance/_stat.tpl',
      1 => 1503643834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15197207195738c0e6e27244-39766706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0e6e60dd9_73728248',
  'variables' => 
  array (
    'stats' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0e6e60dd9_73728248')) {function content_5738c0e6e60dd9_73728248($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['stats']->value){?><table class="FormatTable" border="1"><tr><th>Pay. system</th><th><small>Referral</small></th><th><small>Added</small></th><th><small>Deposited</small></th><th><small>Accrued</small></th><th><small>Withdrawal</small></th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
 <i><small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></i></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZREF'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZIN'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZINDEPO'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZCALCIN'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZOUT'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td></tr><?php } ?></table><?php }?><?php }} ?>