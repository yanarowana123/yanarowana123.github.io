<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:11:24
         compiled from "tpl/ru/depo/depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928451088573a0ae2a69a14-38636148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8ef488716ceb389d219956125877f61baa7272' => 
    array (
      0 => 'tpl/ru/depo/depo.tpl',
      1 => 1568373372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928451088573a0ae2a69a14-38636148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ae2a9a211_14985816',
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ae2a9a211_14985816')) {function content_573a0ae2a9a211_14985816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Deposit'), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits" style="color:#ffad15; border: 1px solid #f7a610">Депозиты</a></li><li><a href="/operations">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><?php if ($_smarty_tpl->tpl_vars['el']->value){?><h1>Deposit</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.interval.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>