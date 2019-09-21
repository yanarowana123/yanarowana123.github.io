<?php /* Smarty version Smarty-3.1.8, created on 2019-09-18 19:18:57
         compiled from "tpl/ru/balance/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:487444012573a091d275825-34192928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdb983248e9d44975cd00b602023ef76a420eac' => 
    array (
      0 => 'tpl/ru/balance/index.tpl',
      1 => 1568809014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487444012573a091d275825-34192928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a091d2be744_34824257',
  'variables' => 
  array (
    '_selfLink' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a091d2be744_34824257')) {function content_573a091d2be744_34824257($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Balance'), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits">Депозиты</a></li><li><a href="/operations" style="color:#ffad15; border: 1px solid #f7a610">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><div id="bal"><?php if (isset($_GET['fail'])){?><h2>Operation NOT complete!</h2><p class="info">The operation was was aborted or an error occurs.<br>Try <a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">again</a> later</p><?php }else{ ?><div id="bal-a"><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="button-green">Пополнить</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="button-green">Вывести</a><br></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'','url'=>'*','fields'=>array('oTS'=>array('Дата'),'oOper'=>array('Операция'),'oCID'=>array('Плат.система'),'oSum1'=>array('Приход'),'oSum2'=>array('Расход'),'oBatch'=>array('Batch-номер'),'oState'=>array('Статус'),'oMemo'=>array('Примечание')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }?><?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>