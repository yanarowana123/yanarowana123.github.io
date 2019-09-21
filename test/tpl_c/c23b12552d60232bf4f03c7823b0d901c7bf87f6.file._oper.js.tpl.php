<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:02:24
         compiled from "tpl/ru/balance/_oper.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2038283823573a0acf0dd849-65062098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c23b12552d60232bf4f03c7823b0d901c7bf87f6' => 
    array (
      0 => 'tpl/ru/balance/_oper.js.tpl',
      1 => 1568373371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2038283823573a0acf0dd849-65062098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0acf115175_88024561',
  'variables' => 
  array (
    'oper' => 0,
    'use_sum2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0acf115175_88024561')) {function content_573a0acf115175_88024561($_smarty_tpl) {?><?php if (in_array($_smarty_tpl->tpl_vars['oper']->value,array('CASHIN','CASHOUT','EX','TR','SELL'))){?><script type="text/javascript">function showComis(){$('#csum').html('');<?php if ($_smarty_tpl->tpl_vars['use_sum2']->value){?>$('#sum2').html('');<?php }?>$.ajax({type: 'POST',url: 'ajax',data: 'module=balance&do=getsum'+'&oper='+$('#add_Oper').val()+'&cid='+$('#add_PSys').val()+'&sum='+$('#add_Sum').val()<?php if ($_smarty_tpl->tpl_vars['oper']->value=='EX'){?>+'&cid2='+$('#add_PSys2').val()<?php }?>,success:function(ex){ex=eval(ex);$('#ccurr').html(ex[0]);$('#csum').html(ex[1]);<?php if ($_smarty_tpl->tpl_vars['use_sum2']->value){?>$('#sum2').html(ex[2]);<?php }?>}});}tid=0;tf=function(){clearTimeout(tid);tid=setTimeout(function(){ showComis(); }, 200);};$('#add_PSys').change(tf);$('#add_Sum').keypress(tf);<?php if ($_smarty_tpl->tpl_vars['oper']->value=='EX'){?>$('#add_PSys2').change(tf);<?php }?>showComis();</script><?php }?><?php }} ?>