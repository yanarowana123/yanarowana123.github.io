<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:02:51
         compiled from "tpl/ru/depo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611331432599416442bbab1-11075388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309774a261a2c09449191a8f5eb3056617ff98ff' => 
    array (
      0 => 'tpl/ru/depo/index.tpl',
      1 => 1568373372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611331432599416442bbab1-11075388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599416442e7a50_38634944',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599416442e7a50_38634944')) {function content_599416442e7a50_38634944($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits" style="color:#ffad15; border: 1px solid #f7a610">Депозиты</a></li><li><a href="/operations">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><div id="dep-but"><h4><a href="/operation?add=CASHIN" align="center" class="button-greens">Создать Депозит</a></h4><h4><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" align="center" class="button-greens">Реинвест</a></h4></div><br><div id="depo"><!--<h1>Deposits</h1>--><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('dCTS'=>array('Дата начала'),'cName'=>array('Плат.система'),'dZD'=>array('Сумма'),'pName'=>array('План'),'dLTS'=>array('Посл. начисл.'),'dN'=>array('Начислений'),'dZP'=>array('<small>Начислено</small>'),'dNTS'=>array('След.начисл.'),'dState'=>array('Статус')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?><p><b>У Вас пока нет вкладов</b></p><br><br><?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>