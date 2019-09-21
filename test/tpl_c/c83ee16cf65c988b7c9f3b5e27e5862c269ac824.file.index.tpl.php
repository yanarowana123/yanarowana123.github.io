<?php /* Smarty version Smarty-3.1.8, created on 2019-09-18 19:15:47
         compiled from "tpl/ru/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1934624187573a09192f8bc9-36233917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83ee16cf65c988b7c9f3b5e27e5862c269ac824' => 
    array (
      0 => 'tpl/ru/cabinet/index.tpl',
      1 => 1568809016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934624187573a09192f8bc9-36233917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0919320d39_15276241',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0919320d39_15276241')) {function content_573a0919320d39_15276241($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet" style="color:#ffad15; border: 1px solid #f7a610">Кабинет</a></li><li><a href="/deposits">Депозиты</a></li><li><a href="/operations">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for cent"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><!--<h1>Cabinet: <?php echo $_smarty_tpl->tpl_vars['user']->value['aName'];?>
</h1>--><p><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</p><div id="btcab"><a href="/operation?add=CASHIN" class="dps">Создать Депозит</a><a href="/operation?add=CASHOUT" class="dps">Вывести Средства</a><a href="/refsys" class="dps">Промо</a></div><?php echo $_smarty_tpl->getSubTemplate ('balance/_stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>