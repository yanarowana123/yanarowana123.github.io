<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 15:09:27
         compiled from "tpl/ru/account/register/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454349514573a083d5b4642-12863383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7154b93126bce2dbc20a1629b89eb3be0536adb6' => 
    array (
      0 => 'tpl/ru/account/register/index.tpl',
      1 => 1568373387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454349514573a083d5b4642-12863383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a083d6c19f8_81393541',
  'variables' => 
  array (
    '_cfg' => 0,
    'valid_ref' => 0,
    'txt_login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a083d6c19f8_81393541')) {function content_573a083d6c19f8_81393541($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Registration'), 0);?>
<div id="reg"><h1>Регистрация</h1><h5>Начните зарабатывать немедленно</h5><?php if (isset($_GET['done'])){?><h2>Регистрация завершена</h2><p class="info">Теперь Вы можете <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">Войти</a> в свой аккаунт</p><?php }elseif(isset($_GET['need_confirm'])){?><h2>Registration NOT complete!</h2><p class="info">To complete the operation, you must confirm your e-mail.<br>Please <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail.<br><br>If message is not coming, then try <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change e-mail</a></p><?php }elseif(isset($_GET['need_confirm_sms'])){?><h2>Registration NOT complete!</h2><p class="info">To complete the operation, you must confirm your phone number.<br>Please <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>that was sent to your phone</p><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==0){?><h2>Регистрация приостановлена!</h2><p class="info">Регистрация на сайте временно приостановлена .<br>По всем вопросам, пожалуйста, обратитесь в  <a href="<?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
">Поддержку</a></p><?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','login'), null, 0);?><?php if (($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2)&&!$_smarty_tpl->tpl_vars['valid_ref']->value){?><h2>Attention!</h2><p class="info">Registration on the site is possible <a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">by invitation</a> <b>only</b>.<br>To do this, you must come to our website<br>by special member ref-link or specify the <?php echo $_smarty_tpl->tpl_vars['txt_login']->value;?>
</p><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Attention!</h2><p class="info">Registration on the site is possible <a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">by invitation</a> <b>only</b>.<br>To do this, you must specify an invitation code</p><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']&&(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==1)||(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2)&&$_smarty_tpl->tpl_vars['valid_ref']->value))&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0)){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>or</h3><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2){?><?php echo "!!";?><?php }?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><?php echo " <<e-mail>>";?><?php }?><?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'udp/rules'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'register_frm','fields'=>array('aName'=>array('T','Your Name',array('name_empty'=>'input Name'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']!=1)),'uLogin'=>array('T','Логин!!',array('login_empty'=>'Enter login','login_short'=>"login is too short [less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinLogin'])."]",'login_wrong'=>'wrong login format','login_used'=>'this login is busy'),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'comment'=>' <span id="login_check" class="err"></span>'),'uMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegConfirm'],'E-mail!! <<confirmation will be sent>>','E-mail!!'),array('mail_empty'=>'input e-mail','mail_wrong'=>'wrong e-mail','mail_used'=>'e-mail is already in use'),'comment'=>' <span id="mail_check" class="err"></span>'),'uPass'=>array('*','Пароль!!',array('pass_empty'=>'input password','pass_short'=>"password is too short [less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinPass'])."]",'pass_wrong'=>'password does not match the format')),'Pass2'=>array('*','Пароль еще раз!!',array('pass_not_equal'=>'passwords do not match')),'aTel'=>array('T','Номер телефона!! <<with country code>>',array('tel_wrong'=>'wrong number'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'uRef'=>array('T',"Вас пригласил".$_tmp2.$_tmp3,array('ref_empty'=>"inpur ".($_smarty_tpl->tpl_vars['txt_login']->value),'ref_not_found'=>($_smarty_tpl->tpl_vars['txt_login']->value)." not found"),'default'=>$_SESSION['_ref'],'skip'=>(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3)||!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']),'disable'=>$_smarty_tpl->tpl_vars['valid_ref']->value),'Invite'=>array('T','Invite code!!',array('inv_empty'=>'input code','inv_not_found'=>'wrong code','inv_used'=>'code is already in use'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']!=3)),'aSQuestion'=>array('T','Секретный вопрос!!',array('secq_empty'=>'input question','secq_short'=>"question is too short [less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('T','Секретный ответ!!',array('seca_empty'=>'input answer','seca_short'=>"answer is too short [less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]",'seqa_equal_secq'=>'answer can not be the same with the question'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'Agree'=>array('CC',"Я принимаю <a href=\"".$_tmp4."\" target=\"_blank\">Правила</a> и согласен с усл. обслуживания",array('must_agree'=>'you must accept the rules'))),'errors'=>array('multi_reg'=>'multiple registration is forbidden'),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_RegCaptcha'],'btn_text'=>'Регистрация'), 0);?>
<?php }?></div><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><script type="text/javascript">function chkLogin(){$('#register_frm_uLogin').removeClass('error');$('#login_check').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=account/register&do=chklogin&login='+encodeURIComponent($('#register_frm_uLogin').val()),success:function(ex){if (ex == 1){$('#register_frm_uLogin').addClass('error');$('#login_check').html('used');}}});}tid2=0;$('#register_frm_uLogin').keypress(function(){clearTimeout(tid2);tid2=setTimeout(function(){ chkLogin(); }, 1000);});chkLogin();</script><?php }?><script type="text/javascript">function chkMail(){$('#register_frm_uMail').removeClass('error');$('#mail_check').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=account/register&do=chkmail&mail='+encodeURIComponent($('#register_frm_uMail').val()),success:function(ex){if (ex == 1){$('#register_frm_uMail').addClass('error');$('#mail_check').html('used');}}});}tid=0;$('#register_frm_uMail').keypress(function(){clearTimeout(tid);tid=setTimeout(function(){ chkMail(); }, 1000);});chkMail();</script><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>