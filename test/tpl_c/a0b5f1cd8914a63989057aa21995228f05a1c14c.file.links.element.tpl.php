<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:38:21
         compiled from "tpl/ru/links.element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3235201555738c0cb5b8e39-03246385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b5f1cd8914a63989057aa21995228f05a1c14c' => 
    array (
      0 => 'tpl/ru/links.element.tpl',
      1 => 1568971265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3235201555738c0cb5b8e39-03246385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0cb5e0c37_65307108',
  'variables' => 
  array (
    'module' => 0,
    'params' => 0,
    'tpl_module' => 0,
    'tpl_vmodule' => 0,
    'current' => 0,
    'text' => 0,
    'text2' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0cb5e0c37_65307108')) {function content_5738c0cb5e0c37_65307108($_smarty_tpl) {?><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value){?>?<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
<?php }?>"<?php if (($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_module']->value)||($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_vmodule']->value)||$_smarty_tpl->tpl_vars['current']->value){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['text2']->value){?><span><?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><b><sup><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</sup></b><?php }?></a><?php }} ?>