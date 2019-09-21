<?php /* Smarty version Smarty-3.1.8, created on 2017-08-21 15:33:24
         compiled from "tpl/ru/account/change_mail/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:373509998599afd444887a3-28038172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c869cc211977dd07f3cb67022cd80b8938cf989' => 
    array (
      0 => 'tpl/ru/account/change_mail/index.tpl',
      1 => 1503076971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '373509998599afd444887a3-28038172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
    'txt_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599afd44508724_07993458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599afd44508724_07993458')) {function content_599afd44508724_07993458($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('redirect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('link'=>'/home'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Change e-mail'), 0);?>
<section class="section-page"><div class="container"><div class="row"><div class="col-md-6 col-md-offset-3 "><br/><br/><center><h1 class='h1-center'>Change  <span>e-mail</span></h1></center><?php if (isset($_GET['done'])){?><center><h4>Е-mail changed!</h4></center><?php }elseif(isset($_GET['need_confirm'])){?><center><h4>Operation NOT complete!</h4><p class="info">To complete the operation, you must confirm your e-mail.<br>Please <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail.<br><br>If message is not coming, then try <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change e-mail</a></p></center><?php }elseif(isset($_GET['already_used'])){?><center><h4>The operation could not be completed!</h4><p class="info">This e-mail can not be confirmed by you,<br>because it is already used by another user</p></center><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'E-mail','Login'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"input ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'login_not_found'=>"wrong ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'banned'=>"access to the account is suspended ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'account is blocked'),'skip'=>_uid(),'hint'=>$_smarty_tpl->tpl_vars['txt_login']->value),'Pass'=>array('*','Password!!',array('pass_not_found'=>'wrong Password'),'hint'=>'Password'),'NewMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailConfirm'],'Новый e-mail!! <<будет выслано подтверждение>>','Новый e-mail!!'),array('mail_empty'=>'input e-mail','mail_wrong'=>'wrong e-mail','mail_used'=>'e-mail is already used'),'hint'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailConfirm'],'New e-mail','New e-mail'))),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailCaptcha'],'btn_text'=>'Next'), 0);?>
<?php }?></div><div class="clearfix"></div><br/><br/></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>