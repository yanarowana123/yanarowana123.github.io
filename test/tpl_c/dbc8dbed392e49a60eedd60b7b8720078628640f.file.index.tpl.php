<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 15:12:10
         compiled from "tpl/en/account/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1963011047573a0ceb2cd007-63353919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc8dbed392e49a60eedd60b7b8720078628640f' => 
    array (
      0 => 'tpl/en/account/login/index.tpl',
      1 => 1568373378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963011047573a0ceb2cd007-63353919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ceb3f2e79_22567785',
  'variables' => 
  array (
    'url' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ceb3f2e79_22567785')) {function content_573a0ceb3f2e79_22567785($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Login'), 0);?>
<h1>Login</h1><?php if (isset($_GET['ip_changed'])){?><h2>Security system</h2><p class="info">You are trying to access your account from a different IP-addresses.<br>To continue <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail</p><?php }elseif(isset($_GET['brute_force'])){?><h2>Security system</h2><p class="info">Password has been entered incorrectly multiple times.<br>To continue <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['url']->value){?>Page "<i>...<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</i>" requires authorization<br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><p class="info">Currently on the site are technical works.<br>Login <b>only</b> for staff</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('account/login/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><br><a href="<?php echo tplModuleToLink(array('module'=>'account/reset_pass'),$_smarty_tpl);?>
">Forgot password</a><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']>=0){?><a href="<?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
">I do not have a login</a><br><?php }?><a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">Confirm</a> or <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change</a> e-mail<br><?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>