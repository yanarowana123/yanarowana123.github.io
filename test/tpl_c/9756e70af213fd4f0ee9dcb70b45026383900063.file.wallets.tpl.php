<?php /* Smarty version Smarty-3.1.8, created on 2019-09-18 19:16:08
         compiled from "tpl/ru/balance/wallets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5502571375995594a677380-18641159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9756e70af213fd4f0ee9dcb70b45026383900063' => 
    array (
      0 => 'tpl/ru/balance/wallets.tpl',
      1 => 1568809014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5502571375995594a677380-18641159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5995594a6cff07_96483134',
  'variables' => 
  array (
    'wfields' => 0,
    '_cfg' => 0,
    'defcurr' => 0,
    'user' => 0,
    'showbutton' => 0,
    'wdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995594a6cff07_96483134')) {function content_5995594a6cff07_96483134($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits">Депозиты</a></li><li><a href="/operations">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets" style="color:#ffad15; border: 1px solid #f7a610">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><div id="wal"><?php if (!$_smarty_tpl->tpl_vars['wfields']->value){?><p class="info">Платежные системы не подключены</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?><?php $_smarty_tpl->tpl_vars['wfields'] = new Smarty_variable(array('DefCurr'=>array('S','Default payment system!!',array('psys_wrong'=>'input pay.system'),array(0=>'- select -')+(array)$_smarty_tpl->tpl_vars['defcurr']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']))+$_smarty_tpl->tpl_vars['wfields']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['showbutton']->value&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']>0)){?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value[] = '';?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value['PIN'] = array('*','Input PIN-code!! <<to confirm changes>>',array('pin_wrong'=>'wrong code'),'size'=>8);?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>$_smarty_tpl->tpl_vars['wfields']->value,'values'=>$_smarty_tpl->tpl_vars['wdata']->value,'btn_text'=>valueIf(!$_smarty_tpl->tpl_vars['showbutton']->value,' ')), 0);?>
<?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>