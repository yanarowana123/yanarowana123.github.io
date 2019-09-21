<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:26
         compiled from "tpl/ru/message/support.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11858646495739def232d221-89009405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88185889e28648d6c729fccb7bec6fcabc9f3656' => 
    array (
      0 => 'tpl/ru/message/support.box.tpl',
      1 => 1568971282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11858646495739def232d221-89009405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5739def2381df5_96937701',
  'variables' => 
  array (
    'user' => 0,
    'cats' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739def2381df5_96937701')) {function content_5739def2381df5_96937701($_smarty_tpl) {?><center><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Mail'=>array('T','Ваш e-mail!! <<для связи>>',array('user_not_found'=>'укажите e-mail','mail_wrong'=>'неверный e-mail'),'skip'=>_uid(),'default'=>$_smarty_tpl->tpl_vars['user']->value['uMail']),'Category'=>array('S','Категория',0,$_smarty_tpl->tpl_vars['cats']->value,'skip'=>!$_smarty_tpl->tpl_vars['cats']->value),'Topic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'Message'=>array('W','Текст!!',array('text_empty'=>'укажите текст'),'size'=>12,'cols'=>60)),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Captcha'],'btn_text'=>'Отправить'), 0);?>
</center><?php }} ?>