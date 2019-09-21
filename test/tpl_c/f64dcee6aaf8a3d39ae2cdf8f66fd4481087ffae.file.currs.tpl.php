<?php /* Smarty version Smarty-3.1.8, created on 2017-08-26 12:45:06
         compiled from "tpl/ru/balance/admin/currs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244010566573a097e4fcce9-14101079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64dcee6aaf8a3d39ae2cdf8f66fd4481087ffae' => 
    array (
      0 => 'tpl/ru/balance/admin/currs.tpl',
      1 => 1503643943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1244010566573a097e4fcce9-14101079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a097e54e995_62462562',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a097e54e995_62462562')) {function content_573a097e54e995_62462562($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные системы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные системы','url'=>'*','fields'=>array('cID'=>array('ID'),'cCID'=>array('Код'),'cName'=>array('Наименование'),'cCurr'=>array('Валюта'),'cAPI'=>array('API'),'cDisable'=>array('<small>Откл.</small>'),'cCASHIN'=>array('<small>Пополн.</small>'),'cCASHOUT'=>array('<small>Вывод</small>'),'cEX'=>array('<small>Обмен</small>'),'cTR'=>array('<small>Перевод</small>'),'cBUY'=>array('<small>Покупка</small>'),'cSELL'=>array('<small>Продажа</small>'),'cBUY2'=>array('<small>Услуга</small>'),'cSELL2'=>array('<small>Оказ.услуги</small>'),'cGIVE'=>array('<small>Вклад</small>'),'cTAKE'=>array('<small>Снятие</small>'),'cHidden'=>array('<small>Скрыта</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>