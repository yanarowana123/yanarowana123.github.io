<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:02:40
         compiled from "tpl/ru/refsys/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1747451665573a091e8c5542-37740748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5608d2a577ebc05d771d2bba4941fe9194064f9f' => 
    array (
      0 => 'tpl/ru/refsys/index.tpl',
      1 => 1568373375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747451665573a091e8c5542-37740748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a091e929cf2_10637781',
  'variables' => 
  array (
    'reflogin' => 0,
    'refurl' => 0,
    'refs' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a091e929cf2_10637781')) {function content_573a091e929cf2_10637781($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Referral system'), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits">Депозиты</a></li><li><a href="/operations">Операции</a></li><li><a href="/refsys"  style="color:#ffad15; border: 1px solid #f7a610">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><div id="refsys"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('RefLogin'=>array('X','You invited by',0,$_smarty_tpl->tpl_vars['reflogin']->value,'skip'=>!$_smarty_tpl->tpl_vars['reflogin']->value),'RefURL'=>array('X','Ваша реферальная ссылка :',0,"<a href=\"".($_smarty_tpl->tpl_vars['refurl']->value)."\" target=\"_blank\">".($_smarty_tpl->tpl_vars['refurl']->value)."</a>"),'Refs'=>array('U','refsys/_refs.tpl','skip'=>!$_smarty_tpl->tpl_vars['refs']->value)),'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Invites</h2><?php }?><?php }?><div id="adv"><div id="ban"></div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>