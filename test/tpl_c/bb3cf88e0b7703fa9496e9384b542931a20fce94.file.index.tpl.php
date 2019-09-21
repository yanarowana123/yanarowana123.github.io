<?php /* Smarty version Smarty-3.1.8, created on 2019-09-18 19:15:56
         compiled from "tpl/ru/account/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:335005515995592cb882d1-05963647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3cf88e0b7703fa9496e9384b542931a20fce94' => 
    array (
      0 => 'tpl/ru/account/index.tpl',
      1 => 1568809012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '335005515995592cb882d1-05963647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5995592cc36080_63542834',
  'variables' => 
  array (
    '_cfg' => 0,
    'user' => 0,
    'utz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995592cc36080_63542834')) {function content_5995592cc36080_63542834($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Account'), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits">Депозиты</a></li><li><a href="/operations">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="color:#ffad15; border: 1px solid #f7a610">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><div id="edit"><h1>Личные настройки</h1><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sec_ForceReConfig']&&$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig']){?><p class="info">Before you begin you must set your personal settings</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','title1'=>'Parameters','fields'=>array('aName'=>array('T','Your Name!!',array('name_empty'=>'input Name'),'readonly'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LockData'],'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']==0)),'uLogin'=>array('X','Ваш Логин',0,'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']),'uMail'=>array('X','Ваш e-mail'),'aTel'=>array('T','Your phone number!! <<with country code>>',array('tel_wrong'=>'wrong number'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'TZ'=>array('T','Часовой пояс!! <<от GMT>>',array('tz_wrong'=>'wrong zone [h:m]'),'comment'=>'+4:00 = Moscow','default'=>$_smarty_tpl->tpl_vars['utz']->value,'size'=>6),'aNoMail'=>array('C','Не получать уведомления на e-mail','skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_NoMail']),99=>'Безопасность','aIPSec'=>array('S','Control IP-address change',0,array(0=>'- default -',1=>'x.0.0.0',2=>'x.x.0.0',3=>'x.x.x.0',4=>'x.x.x.x')),'aSessIP'=>array('C','Привязать сессию к IP-address'),'aSessUniq'=>array('C','Запрет параллельных сессий'),'aTimeOut'=>array('I','Авто выход через N минут <<0 - default>>'),'aSQuestion'=>array('T','Secret question!!',array('secq_empty'=>'input question','secq_short'=>"question is too short [less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('*','Secret answer!! <<input to change>>',array('seca_empty'=>'input answer','seca_short'=>"answer is too short [less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]",'seqa_equal_secq'=>'answer can not be the same with the question'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'PIN'=>array('*','PIN-код!! <<чтобы подтвердить изменения>>',array('pin_wrong'=>'wrong code'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']==0),'size'=>8)),'values'=>$_smarty_tpl->tpl_vars['user']->value,'hide_cancel'=>$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig']), 0);?>
<?php if (!($_smarty_tpl->tpl_vars['_cfg']->value['Sec_ForceReConfig']&&$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig'])){?><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><a href="<?php echo tplModuleToLink(array('module'=>'account/loginza'),$_smarty_tpl);?>
" class="button-gray">Profiles</a>&nbsp;<?php }?><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Account_LockData']){?><a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
" class="button-green">Сменить e-mail</a>&nbsp;<?php }?><h4><a href="<?php echo tplModuleToLink(array('module'=>'account/change_pass'),$_smarty_tpl);?>
" class="button-greens2">Сменить пароль</a></h4><br><br><?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>