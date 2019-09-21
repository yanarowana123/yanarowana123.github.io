<?php /* Smarty version Smarty-3.1.8, created on 2017-08-29 16:32:56
         compiled from "tpl/ru/news/admin/newses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1013149300573a0b323dc4c1-19250327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a759826f8f60845574b5d1e483ed7634e3839a03' => 
    array (
      0 => 'tpl/ru/news/admin/newses.tpl',
      1 => 1503985966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013149300573a0b323dc4c1-19250327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b32418814_89572464',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b32418814_89572464')) {function content_573a0b32418814_89572464($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Публикации'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новости','url'=>'*','fields'=>array('nID'=>array('ID'),'nTS'=>array('Дата публикации'),'nAnnounce'=>array('Анонс'),'nDBegin'=>array('Публиковать с'),'nDEnd'=>array('По'),'nAttn'=>array('<small>Важная</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'news/admin/news'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>