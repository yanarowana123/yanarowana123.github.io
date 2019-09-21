<?php /* Smarty version Smarty-3.1.8, created on 2017-08-22 15:41:21
         compiled from "tpl/ru/calendar/admin/days.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67464753573b39f2ad2230-29733962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb125a430af168372b5c79561b93f11cf5266c39' => 
    array (
      0 => 'tpl/ru/calendar/admin/days.tpl',
      1 => 1503076985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67464753573b39f2ad2230-29733962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573b39f2b09248_45666843',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b39f2b09248_45666843')) {function content_573b39f2b09248_45666843($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Дни'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('calendar/admin/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Дни','url'=>'*','fields'=>array('cID'=>array('ID'),'cTS'=>array('Дата'),'cPerc'=>array('%'),'cType'=>array('<small>Тип</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'calendar/admin/day'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>