<?php /* Smarty version Smarty-3.1.8, created on 2019-09-04 09:26:12
         compiled from "tpl/en/system/admin/setup_ui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19224358459980091a0abf6-57584188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3913343d049c256ec5f6deb77419a8e15c0d23ee' => 
    array (
      0 => 'tpl/en/system/admin/setup_ui.tpl',
      1 => 1567570484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19224358459980091a0abf6-57584188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59980091a5d356_24873840',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59980091a5d356_24873840')) {function content_59980091a5d356_24873840($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Interface'), 0);?>
<?php ob_start();?><?php echo tplModuleToLink(array('module'=>'udp/intro'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('_Langs'=>array('A','Interface languages (folder names in "/tpl/")','size'=>4),'ShowIntro'=>array('S',"Show <a href=\"".$_tmp1."\" target=\"_blank\">intro</a> <<Intro>>",0,array(0=>'no',1=>'only first time',2=>'always')),'TopPanel'=>array('C','Show top panel'),'LeftPanel'=>array('C','Show left panel'),'RightPanel'=>array('C','Show right panel'),'BottomPanel'=>array('C','Show bottom panel'),'DefaultTZ'=>array('I','Time zone by default <<in hours GMT>>','comment'=>'+4 = Moscow','size'=>4),'NumDec'=>array('S','Number of decimal places',0,array(0=>'no decimal (only integer)',1=>'1 (.0)',2=>'2 (.00)',3=>'3 (.000)')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>