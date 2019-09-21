<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:26
         compiled from "tpl/ru/edit.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10539980785738c0d1a25130-81740701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c565b95fdea38b3e536a949156b05acefc57d3d' => 
    array (
      0 => 'tpl/ru/edit.info.tpl',
      1 => 1568971264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10539980785738c0d1a25130-81740701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d1a45c60_39657271',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d1a45c60_39657271')) {function content_5738c0d1a45c60_39657271($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="edit_<?php echo $_smarty_tpl->tpl_vars['_info']->value[0];?>
_info_box" class="flash_edit_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b></div><?php }?><?php }?><?php }} ?>