<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:57
         compiled from "tpl/en/links.element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9638733825738c0d8235774-60684056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35358fe789b8799c26520db4aa75a909d039f65f' => 
    array (
      0 => 'tpl/en/links.element.tpl',
      1 => 1568971261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9638733825738c0d8235774-60684056',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d825f679_84871370',
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
<?php if ($_valid && !is_callable('content_5738c0d825f679_84871370')) {function content_5738c0d825f679_84871370($_smarty_tpl) {?><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value){?>?<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
<?php }?>"<?php if (($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_module']->value)||($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_vmodule']->value)||$_smarty_tpl->tpl_vars['current']->value){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['text2']->value){?><span><?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><b><sup><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</sup></b><?php }?></a><?php }} ?>