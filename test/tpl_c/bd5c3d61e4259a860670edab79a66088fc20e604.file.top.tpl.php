<?php /* Smarty version Smarty-3.1.8, created on 2017-08-22 00:44:20
         compiled from "tpl/ru/depo/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2069091428599b7e64a7d0c7-97574529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5c3d61e4259a860670edab79a66088fc20e604' => 
    array (
      0 => 'tpl/ru/depo/top.tpl',
      1 => 1503076894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2069091428599b7e64a7d0c7-97574529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list2' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599b7e64abdcd1_88630859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599b7e64abdcd1_88630859')) {function content_599b7e64abdcd1_88630859($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('redirect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('link'=>'/home'), 0);?>
<tbody><?php if ($_smarty_tpl->tpl_vars['list2']->value){?><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['top']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['top']['index']++;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['RCNT']>0){?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['top']['index']<5){?><tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
<span><?php echo $_smarty_tpl->tpl_vars['r']->value['RCNT'];?>
</span></td></tr><?php }?><?php }?><?php } ?><?php }else{ ?><tr><td colspan='2' align='center'>операций не найдено</td></tr><?php }?></tbody><?php }} ?>