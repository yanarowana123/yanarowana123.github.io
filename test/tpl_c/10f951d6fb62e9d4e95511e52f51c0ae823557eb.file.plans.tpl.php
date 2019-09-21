<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:07:38
         compiled from "tpl/ru/depo/admin/plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:880750534573a09ed30d9c3-16282807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f951d6fb62e9d4e95511e52f51c0ae823557eb' => 
    array (
      0 => 'tpl/ru/depo/admin/plans.tpl',
      1 => 1568373389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '880750534573a09ed30d9c3-16282807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a09ed3544f4_66771668',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a09ed3544f4_66771668')) {function content_573a09ed3544f4_66771668($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Планы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Планы','url'=>'*','fields'=>array('pID'=>array('ID'),'pHidden'=>array('<small>Невид.</small>'),'pNoCalc'=>array('<small>Не начислять</small>'),'pGroup'=>array('Группа'),'pName'=>array('Наменование'),'pMin'=>array('Мин.'),'pMax'=>array('Макс.'),'pDays'=>array('Длит.'),'pPerc'=>array('<small>Процент</small>'),'z'=>array('<small>Всего вкладов</small>'),'za'=>array('<small>Акт. вкладов</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>