<?php /* Smarty version Smarty-3.1.8, created on 2017-08-28 13:22:34
         compiled from "tpl/ru/review/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1360199206573a0b97025326-09174826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d1c7ea182e0939b388db153147f0d4b394706f' => 
    array (
      0 => 'tpl/ru/review/admin/index.tpl',
      1 => 1503643962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1360199206573a0b97025326-09174826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b9705c3b4_83354963',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b9705c3b4_83354963')) {function content_573a0b9705c3b4_83354963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы','url'=>'*','fields'=>array('oID'=>array('ID'),'oTS'=>array('Дата'),'uLogin'=>array('Автор'),'oText'=>array('Текст'),'oState'=>array('<small>Одобрен</small>'),'oOrder'=>array('<small>Вес</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('accept'=>'Одобрить','del'=>'Удалить')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>