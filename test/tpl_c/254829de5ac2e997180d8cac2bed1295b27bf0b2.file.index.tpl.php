<?php /* Smarty version Smarty-3.1.8, created on 2017-08-25 21:03:11
         compiled from "tpl/ru/account/reset_pass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17876623425998bd7dee2fe1-42985420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254829de5ac2e997180d8cac2bed1295b27bf0b2' => 
    array (
      0 => 'tpl/ru/account/reset_pass/index.tpl',
      1 => 1503643942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17876623425998bd7dee2fe1-42985420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5998bd7df3c780_62618299',
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
    'txt_login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5998bd7df3c780_62618299')) {function content_5998bd7df3c780_62618299($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'shot','title'=>'Восстановление пароля'), 0);?>
<section class="main1"><div class="container"><div class="row"><div class="col-md-12"><center><h1 style='width:500px;'><span>Восстановление пароля</span></h1></center><div class="clearfix"></div><br/><div><?php if (isset($_GET['done'])){?><h4>Операция завершена!</h4><p class="info">Теперь Вы можете <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">войти</a> в свой аккаунт, используя <b>новый</b> пароль.<br>После этого его можно будет сменить на другой</p><?php }elseif(isset($_GET['need_confirm'])){?><h4>Операция НЕ завершена!</h4><p class="info">Для получения временного пароля <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail.<br><br>Если письмо долго не приходит, то попробуйте <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">сменить e-mail</a></p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><div class="clearfix"></div><div class="col-md-8 col-md-offset-2"><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'E-mail','Логин'), null, 0);?><center><?php echo $_smarty_tpl->getSubTemplate ('edit.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','form_class'=>'form-oper ','table_class'=>'table-oper table-oper-1','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value),array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value),'login_not_found'=>'неверная пара Логин/e-mail','mail_not_found'=>'e-mail не найден'),'hint'=>$_smarty_tpl->tpl_vars['txt_login']->value),'Mail'=>array('T','E-mail',array(),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'hint'=>'E-mail')),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ResetPassCaptcha'],'btn_text'=>'Далее'), 0);?>
</center></div><?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>