<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 15:12:10
         compiled from "tpl/en/account/login/box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33313148573a0ceb440448-13047742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb71231214113b28ddfd5d2f7623313c99cf5070' => 
    array (
      0 => 'tpl/en/account/login/box.tpl',
      1 => 1568373378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33313148573a0ceb440448-13047742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ceb4fd061_84812773',
  'variables' => 
  array (
    '_cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ceb4fd061_84812773')) {function content_573a0ceb4fd061_84812773($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>or</h3><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Login'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'login_frm','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"input ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'login_not_found'=>"wrong ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'not_active'=>'account e-mail is not confirmed','banned'=>"access to the account is suspended ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'account is blocked')),'Pass'=>array('*','Password!!',array()),'Remember'=>array('CC','Remember me',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha'],'btn_text'=>'Login'), 0);?>
<?php }} ?>