<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:57
         compiled from "tpl/en/links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9404377265738c0d820b9a9-58954098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d6e8f7b5e576ce01e044979c51a2f5544a8d8c0' => 
    array (
      0 => 'tpl/en/links.tpl',
      1 => 1568971261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9404377265738c0d820b9a9-58954098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d82335b9_77607740',
  'variables' => 
  array (
    'class' => 0,
    'elements' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d82335b9_77607740')) {function content_5738c0d82335b9_77607740($_smarty_tpl) {?><div<?php if ($_smarty_tpl->tpl_vars['class']->value){?> class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"<?php }?>><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['e']->value['skip']){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['e']->value[0],'text'=>$_smarty_tpl->tpl_vars['e']->value[1],'text2'=>$_smarty_tpl->tpl_vars['e']->value[2],'text3'=>$_smarty_tpl->tpl_vars['e']->value[3],'count'=>$_smarty_tpl->tpl_vars['e']->value['count'],'params'=>$_smarty_tpl->tpl_vars['e']->value['params']), 0);?>
<?php }?><?php } ?></div><?php }} ?>