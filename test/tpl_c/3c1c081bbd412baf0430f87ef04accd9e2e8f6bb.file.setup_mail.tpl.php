<?php /* Smarty version Smarty-3.1.8, created on 2017-08-28 16:14:08
         compiled from "tpl/ru/system/admin/setup_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777240053599852f9cc69f2-96017856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c1c081bbd412baf0430f87ef04accd9e2e8f6bb' => 
    array (
      0 => 'tpl/ru/system/admin/setup_mail.tpl',
      1 => 1503643965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777240053599852f9cc69f2-96017856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599852f9d39f19_26910191',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599852f9d39f19_26910191')) {function content_599852f9d39f19_26910191($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Почта'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Host'=>array('T','Адрес сервера'),'Port'=>array('I','Порт'),'Secure'=>array('C','Защищенное соединение'),'Username'=>array('T','Логин'),'Password'=>array('*','Пароль <<пусто - отправлять обычным способом>>'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>