<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 20:59:40
         compiled from "tpl/ru/depo/admin/charge.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096622261573a0a8c980a82-08875066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84169a3f26c1044809c4f3cf1faecde8590eb805' => 
    array (
      0 => 'tpl/ru/depo/admin/charge.row.tpl',
      1 => 1463420574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096622261573a0a8c980a82-08875066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0a8c9be908_64884868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0a8c9be908_64884868')) {function content_573a0a8c9be908_64884868($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pHidden']){?>*<?php }?></td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMax'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pDays'];?>
</td><td><input name="p[<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value['pPerc'];?>
" type="text" size="5"></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cnt'];?>
</td><?php }} ?>