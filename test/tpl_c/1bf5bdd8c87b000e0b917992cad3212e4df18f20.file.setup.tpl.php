<?php /* Smarty version Smarty-3.1.8, created on 2019-09-04 09:40:02
         compiled from "tpl/ru/account/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043078794599434d7002ed3-41060261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf5bdd8c87b000e0b917992cad3212e4df18f20' => 
    array (
      0 => 'tpl/ru/account/admin/setup.tpl',
      1 => 1567570486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043078794599434d7002ed3-41060261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599434d705c8f8_95500684',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599434d705c8f8_95500684')) {function content_599434d705c8f8_95500684($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('LockData'=>array('C','Запретить изменять личные данные'),'Loginza'=>array('C','Разрешить "быструю" регистрацию и вход,<br>используя аккаунты других сервисов <<провайдер Loginza.ru>>'),1=>'Регистрация','RegMode'=>array('S','Режим',0,array(0=>'запрещена',1=>'разрешена',2=>'только с рефом',3=>'только по пригл.')),'RegCheck'=>array('S','Проверка на множественную регистрацию',0,array(0=>'нет',1=>'по IP-адресу',2=>'по cookie',3=>'по IP-адресу и cookie')),'UseName'=>array('S','Запрашивать имя',0,array(0=>'нет (=логин)',1=>'да',2=>'в личных данных')),'MinLogin'=>array('I','Мин. длина логина'),'LoginRegx'=>array('T','Формат логина <<регулярное выражение>>'),'MinPass'=>array('I','Мин. длина пароля'),'PassRegx'=>array('T','Формат пароля <<регулярное выражение>>'),'RegCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'RegConfirm'=>array('C','Подтверждение операции через SMS/e-mail'),'RegLogin'=>array('C','Входить в аккаунт сразу после окончания регистрации'),'Вход','LoginCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'Смена почты','ChangeMailCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'ChangeMailConfirm'=>array('C','Подтверждение операции через e-mail'),'Сброс пароля','ResetPassCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>