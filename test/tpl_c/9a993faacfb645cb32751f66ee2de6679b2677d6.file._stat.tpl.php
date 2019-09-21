<?php /* Smarty version Smarty-3.1.8, created on 2019-09-18 19:15:47
         compiled from "tpl/ru/balance/_stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739520418573a091955a9b6-34630416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a993faacfb645cb32751f66ee2de6679b2677d6' => 
    array (
      0 => 'tpl/ru/balance/_stat.tpl',
      1 => 1568809014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739520418573a091955a9b6-34630416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a09195a7355_05315977',
  'variables' => 
  array (
    'stats' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a09195a7355_05315977')) {function content_573a09195a7355_05315977($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['stats']->value){?><table class="FormatTable" border="1"><tr><th>Плат. система</th><th><small>Рефские</small></th><th><small>Введено</small></th><th><small>На депозитах</small></th><th><small>Начислено</small></th><th><small>Выведено</small></th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
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