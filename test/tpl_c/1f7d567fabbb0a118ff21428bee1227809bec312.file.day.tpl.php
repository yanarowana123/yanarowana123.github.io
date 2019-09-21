<?php /* Smarty version Smarty-3.1.8, created on 2016-05-17 18:34:11
         compiled from "tpl/ru/calendar/admin/day.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953289522573b39f3f0e8c5-00037524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f7d567fabbb0a118ff21428bee1227809bec312' => 
    array (
      0 => 'tpl/ru/calendar/admin/day.tpl',
      1 => 1463420556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953289522573b39f3f0e8c5-00037524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'today' => 0,
    'd_types' => 0,
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573b39f4010372_10757249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b39f4010372_10757249')) {function content_573b39f4010372_10757249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'День'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('calendar/admin/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'День','title_new'=>'Новый день','fields'=>array('cID'=>array(),'cTS'=>array('D','Дата!!',array('date_empty'=>'укажите дату','date_exist'=>'дата уже существует'),'default'=>$_smarty_tpl->tpl_vars['today']->value),'cType'=>array('S','Тип!!',array('type_empty'=>'укажите тип'),array(0=>'- выберите тип -')+$_smarty_tpl->tpl_vars['d_types']->value),'cPerc'=>array('%','Процент',array('perc_wrong'=>'укажите процент'))),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>