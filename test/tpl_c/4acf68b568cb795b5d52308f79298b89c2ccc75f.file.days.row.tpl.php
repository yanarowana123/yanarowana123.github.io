<?php /* Smarty version Smarty-3.1.8, created on 2016-05-17 18:34:33
         compiled from "tpl/ru/calendar/admin/days.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529239787573b3a097b9ea8-60429361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4acf68b568cb795b5d52308f79298b89c2ccc75f' => 
    array (
      0 => 'tpl/ru/calendar/admin/days.row.tpl',
      1 => 1463420556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529239787573b3a097b9ea8-60429361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'd_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573b3a097ecb81_16418056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b3a097ecb81_16418056')) {function content_573b3a097ecb81_16418056($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
</td><td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['l']->value['cTS'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'calendar/admin/day'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['cPerc'];?>
</a></td><td><a href="<?php echo tplModuleToLink(array('module'=>'calendar/admin/day'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
"><?php echo $_smarty_tpl->tpl_vars['d_types']->value[$_smarty_tpl->tpl_vars['l']->value['cType']];?>
</a></td><?php }} ?>