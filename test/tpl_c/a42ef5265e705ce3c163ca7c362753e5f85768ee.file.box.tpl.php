<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:47
         compiled from "tpl/ru/account/login/box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19211539745738c0d199b314-50565862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42ef5265e705ce3c163ca7c362753e5f85768ee' => 
    array (
      0 => 'tpl/ru/account/login/box.tpl',
      1 => 1568971300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19211539745738c0d199b314-50565862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d19cdbe7_68861665',
  'variables' => 
  array (
    '_cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d19cdbe7_68861665')) {function content_5738c0d19cdbe7_68861665($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>or</h3><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Login'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'login_frm','fields'=>array('Login'=>array('T',"Ваш Логин!!",array('login_empty'=>"input ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'login_not_found'=>"wrong ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'not_active'=>'account e-mail is not confirmed','banned'=>"access to the account is suspended ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'account is blocked')),'Pass'=>array('*','Ваш Пароль!!',array()),'Remember'=>array('CC','Запомнить Меня',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha'],'btn_text'=>'Войти'), 0);?>
<?php }} ?>