<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:47
         compiled from "tpl/ru/account/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14940831725738c0d1935988-35850219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29dfa5548a246c3c39822f999b8e6e33dc21db48' => 
    array (
      0 => 'tpl/ru/account/login/index.tpl',
      1 => 1568971300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14940831725738c0d1935988-35850219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d198bbd7_98710316',
  'variables' => 
  array (
    'url' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d198bbd7_98710316')) {function content_5738c0d198bbd7_98710316($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Login'), 0);?>
<div id="loginfo"><h1>Логин</h1><h2>Начните зарабатывать немедленно</h2><?php if (isset($_GET['ip_changed'])){?><h2>Security system</h2><p class="info">You are trying to access your account from a different IP-addresses.<br>To continue <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail</p><?php }elseif(isset($_GET['brute_force'])){?><h2>Security system</h2><p class="info">Password has been entered incorrectly multiple times.<br>To continue <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['url']->value){?>Page "<i>...<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</i>" requires authorization<br><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><p class="info">Currently on the site are technical works.<br>Login <b>only</b> for staff</p><?php }?></div><?php echo $_smarty_tpl->getSubTemplate ('account/login/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div id="login-niz"><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><br><a href="<?php echo tplModuleToLink(array('module'=>'account/reset_pass'),$_smarty_tpl);?>
">Забыл Пароль</a><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']>=0){?><a href="<?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
">Регистрация</a><br><?php }?><?php }?></div><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>