<?php /* Smarty version Smarty-3.1.8, created on 2017-08-29 16:32:56
         compiled from "tpl/ru/news/admin/newses.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:808243496573a0b562b11e8-46116611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429b883507bd34c006988f7d0c8e2f21111641a0' => 
    array (
      0 => 'tpl/ru/news/admin/newses.row.tpl',
      1 => 1503985966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808243496573a0b562b11e8-46116611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b562e8010_66987272',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b562e8010_66987272')) {function content_573a0b562e8010_66987272($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cr75309/public_html/smarty3/plugins/modifier.truncate.php';
?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['nID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'news/admin/news'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['nID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['l']->value['nAnnounce'],70);?>
</a></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nDBegin'];?>
</small></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nDEnd'];?>
</small></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['nAttn']){?>Да<?php }?></td><?php }} ?>