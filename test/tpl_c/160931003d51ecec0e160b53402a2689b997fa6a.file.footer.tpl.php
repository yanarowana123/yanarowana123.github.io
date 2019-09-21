<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:38:11
         compiled from "tpl/en/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6547697175738c0e3c847b1-90612783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '160931003d51ecec0e160b53402a2689b997fa6a' => 
    array (
      0 => 'tpl/en/footer.tpl',
      1 => 1568971261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6547697175738c0e3c847b1-90612783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0e3c9ac01_39625079',
  'variables' => 
  array (
    'short' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0e3c9ac01_39625079')) {function content_5738c0e3c9ac01_39625079($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['short']->value){?></div></td><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['UI_RightPanel']){?><td class="_panel"><?php echo $_smarty_tpl->getSubTemplate ('panel.right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }?></tr></table><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['UI_BottomPanel']){?><?php echo $_smarty_tpl->getSubTemplate ('panel.bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->getSubTemplate ('line.bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></center></body></html><?php }} ?>