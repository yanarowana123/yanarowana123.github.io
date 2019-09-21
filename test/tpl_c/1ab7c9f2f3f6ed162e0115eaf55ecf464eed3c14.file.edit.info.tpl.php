<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:57
         compiled from "tpl/en/edit.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7407381085738c0d8377526-27907730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab7c9f2f3f6ed162e0115eaf55ecf464eed3c14' => 
    array (
      0 => 'tpl/en/edit.info.tpl',
      1 => 1568971261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7407381085738c0d8377526-27907730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d8398719_32095771',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d8398719_32095771')) {function content_5738c0d8398719_32095771($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="edit_<?php echo $_smarty_tpl->tpl_vars['_info']->value[0];?>
_info_box" class="flash_edit_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b></div><?php }?><?php }?><?php }} ?>