<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:57
         compiled from "tpl/en/admin/line.module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2613447505738c0d8287990-84921380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c65694a3b7c53471edb6e635c64ce55d346dc76' => 
    array (
      0 => 'tpl/en/admin/line.module.tpl',
      1 => 1568971268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613447505738c0d8287990-84921380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d829e104_50004255',
  'variables' => 
  array (
    'up_category' => 0,
    'up_modules' => 0,
    'm' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d829e104_50004255')) {function content_5738c0d829e104_50004255($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['up_category']->value){?><h1><?php echo $_smarty_tpl->tpl_vars['up_category']->value;?>
</h1><div class="_menuPanel"><ul class="mainMenu"><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['up_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['m']->key;
?><?php echo $_smarty_tpl->getSubTemplate ('menu.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['m']->value,'text'=>$_smarty_tpl->tpl_vars['n']->value), 0);?>
<?php } ?></ul></div><br><?php }?><?php }} ?>