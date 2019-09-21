<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:09:04
         compiled from "tpl/ru/depo/admin/plans.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2045097001573a0a63a81ee4-34639774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cefe649a975adad77ba2611dff5f702dec543810' => 
    array (
      0 => 'tpl/ru/depo/admin/plans.row.tpl',
      1 => 1568373389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2045097001573a0a63a81ee4-34639774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0a63acee42_51951475',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0a63acee42_51951475')) {function content_573a0a63acee42_51951475($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pHidden']){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pNoCalc']){?>*<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pGroup'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMax'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pDays'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pPerc'];?>
</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['l']->value['cnt'];?>
 (<?php echo _z($_smarty_tpl->tpl_vars['l']->value['dsum'],1);?>
)</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['l']->value['acnt'];?>
 (<?php echo _z($_smarty_tpl->tpl_vars['l']->value['adsum'],1);?>
)</td><?php }} ?>