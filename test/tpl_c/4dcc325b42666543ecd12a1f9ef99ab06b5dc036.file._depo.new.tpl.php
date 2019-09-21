<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:11:24
         compiled from "tpl/ru/depo/_depo.new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2054677399573a0ae2ab9622-89648068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dcc325b42666543ecd12a1f9ef99ab06b5dc036' => 
    array (
      0 => 'tpl/ru/depo/_depo.new.tpl',
      1 => 1568373373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2054677399573a0ae2ab9622-89648068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ae2b19a03_25124903',
  'variables' => 
  array (
    'from_admin' => 0,
    '_cfg' => 0,
    'clist' => 0,
    'plans' => 0,
    'pcmax' => 0,
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ae2b19a03_25124903')) {function content_573a0ae2b19a03_25124903($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'new','title_new'=>valueIf($_smarty_tpl->tpl_vars['from_admin']->value,'New deposit'),'fields'=>array('Login'=>$_GET['user'],'User'=>array('X','User',0,$_GET['user'],'skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Bal'=>array('U','balance/bal.tpl','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value&&$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']),'PSys'=>valueIf(!$_smarty_tpl->tpl_vars['from_admin']->value&&$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],1,array('S','Плат. Система!!',array('psys_empty'=>'select pay.system','psys_wrong'=>'wrong pay.system'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value)),'Sum'=>array('$','Сумма!!',array('sum_empty'=>'input amount','sum_wrong'=>'wrong amount'),'comment'=>' <i><span id="ccurr"></span></i>'),'Plan'=>array('S','План',array('plan_wrong'=>'wrong plan'),array(0=>'- auto -')+(array)$_smarty_tpl->tpl_vars['plans']->value,'skip'=>(count($_smarty_tpl->tpl_vars['plans']->value)<=1)),'Compnd'=>array('%','Compaund',array('compnd_wrong'=>"wrong value [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]",'compnd_wrong1'=>"wrong value for plan '".($_smarty_tpl->tpl_vars['cplan']->value)."'"),'skip'=>!$_smarty_tpl->tpl_vars['pcmax']->value)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'errors'=>array('oper_disabled'=>'operation disabled','low_bal1'=>'insufficient funds')), 0);?>
<script type="text/javascript">function updateCurr(){$('#ccurr').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=balance&do=getcurr'+'&cid='+$('#new_PSys').val(),success:function(ex){$('#ccurr').html(ex);}});}$('#new_PSys').change(updateCurr);updateCurr();</script><?php }} ?>