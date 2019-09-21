<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:02:58
         compiled from "tpl/ru/balance/_oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810004697573a0b1cde8521-21434125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77122362571ecfef6793b9afc99cce8c29817627' => 
    array (
      0 => 'tpl/ru/balance/_oper.tpl',
      1 => 1568373371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810004697573a0b1cde8521-21434125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b1d015c32_21639181',
  'variables' => 
  array (
    'el' => 0,
    'op_statuses' => 0,
    'from_admin' => 0,
    'op_sums' => 0,
    'afields' => 0,
    'bt' => 0,
    'b' => 0,
    'pvalues' => 0,
    'pform' => 0,
    'pfields' => 0,
    'f' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b1d015c32_21639181')) {function content_573a0b1d015c32_21639181($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('oID'=>array(),'oState'=>array('X','State',0,"<b>".($_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['el']->value['oState']])."</b>"),'oCTS'=>array('X','Date'),'uLogin'=>array('X','User',0,"<a href=\"".$_tmp1."?id=".($_smarty_tpl->tpl_vars['el']->value['uID'])."\">".($_smarty_tpl->tpl_vars['el']->value['uLogin'])."</a>",'skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Login2'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='TR','Receiver','Sender'),0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp2."?id=".($_smarty_tpl->tpl_vars['el']->value['oParams']['uid2'])."\">".($_smarty_tpl->tpl_vars['el']->value['oParams']['user'])."</a>",$_smarty_tpl->tpl_vars['el']->value['oParams']['user']),'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['uid2']),'PSys'=>array('X','Payment system',0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp3."?id=".($_smarty_tpl->tpl_vars['el']->value['ocID'])."\">".($_smarty_tpl->tpl_vars['el']->value['cName'])."</a>",$_smarty_tpl->tpl_vars['el']->value['cName'])),'PayTo'=>array('X','Pay to account',0,$_GET['payto'],'skip'=>!$_GET['payto']),'oSum'=>array('X','Amount',0,_z($_smarty_tpl->tpl_vars['el']->value['oSum'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1)),'oComis'=>array('X','Comission',0,_z($_smarty_tpl->tpl_vars['el']->value['oComis'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1),'skip'=>($_smarty_tpl->tpl_vars['el']->value['oComis']==0)),'Sum'=>array('X',$_smarty_tpl->tpl_vars['op_sums']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']],0,_z($_smarty_tpl->tpl_vars['el']->value['oSum']-$_smarty_tpl->tpl_vars['el']->value['oComis'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1),'skip'=>($_smarty_tpl->tpl_vars['el']->value['oComis']==0)),'PSys2'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='EX','To payment system','From payment system'),0,$_smarty_tpl->tpl_vars['el']->value['oParams']['psys'],'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['cid2']),'Sum2'=>array('X','Amount to receive',0,_z($_smarty_tpl->tpl_vars['el']->value['oParams']['sum2'],exValue($_smarty_tpl->tpl_vars['el']->value['ocID'],$_smarty_tpl->tpl_vars['el']->value['oParams']['cid2']),1),'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['sum2']),'Acc'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHOUT','Payeer account','Payeer account'),0,$_smarty_tpl->tpl_vars['el']->value['oParams2']['acc'],'skip'=>!in_array($_smarty_tpl->tpl_vars['el']->value['oOper'],array('CASHIN','CASHOUT'))||!$_smarty_tpl->tpl_vars['el']->value['oParams2']['acc']),'oBatch'=>array('X','Batch-number','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oBatch']),'oMemo'=>array('X','Memo','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oMemo'],0,valueIf(!$_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oMemo'][0]=='~'),'Error',$_smarty_tpl->tpl_vars['el']->value['oMemo'])),'oTS'=>array('X','Modified','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oTS']),'oNTS'=>array('X','Completed','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oNTS']))+(array)$_smarty_tpl->tpl_vars['afields']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>$_smarty_tpl->tpl_vars['bt']->value,'btns'=>$_smarty_tpl->tpl_vars['b']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['afields']->value){?><br><p class="info">For current payment system not set <a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['el']->value['ocID'];?>
">API settings</a><br>You can perform this operation by specifying the settings above. <br>It's safe, because entered data are not stored anywhere</p><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHIN'){?><?php if (!isset($_GET['payto'])){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_pform.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Pay through the merchant'), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value['acc']){?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=1){?><br><p class="info"><?php if ($_smarty_tpl->tpl_vars['pform']->value){?>If you can not pay directly through the merchant,<br><?php }?>You can make a payment on the specified details manually,<br>and then specify the details of this payment in the form below</p><?php }?><h2>Our payment details<br>(to pay manually through <?php echo $_smarty_tpl->tpl_vars['el']->value['cName'];?>
)</h2><table class="formatTable"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value[$_smarty_tpl->tpl_vars['f']->value]){?><tr><td align="right"><?php $_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value[0] = str_replace('*',' <span class="descr_rem">(optional)</span>',$_smarty_tpl->tpl_vars['v']->value[0]);?><?php if ($_smarty_tpl->tpl_vars['f']->value==='acc'){?>Payee account <span class="descr_rem">(<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
)</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
<?php }?></td><td><span class="uline"><?php echo $_smarty_tpl->tpl_vars['pvalues']->value[$_smarty_tpl->tpl_vars['f']->value];?>
</span></td></tr><?php }?><?php } ?><tr><td align="right">Amount</td><td><span class="uline"><?php echo _z($_smarty_tpl->tpl_vars['el']->value['oSum'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1);?>
</span></td></tr></table><?php }?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value['acc']||($_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']<=2))){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oComis'=>0), 0);?>
<?php }?><?php }elseif(($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHOUT')&&($_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']<=2))){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oComis'=>$_smarty_tpl->tpl_vars['el']->value['oComis']), 0);?>
<?php }?><?php }} ?>