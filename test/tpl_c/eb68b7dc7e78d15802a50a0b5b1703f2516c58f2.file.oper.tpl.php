<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:02:24
         compiled from "tpl/ru/balance/oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1939169195573a0b1cc47090-90539836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb68b7dc7e78d15802a50a0b5b1703f2516c58f2' => 
    array (
      0 => 'tpl/ru/balance/oper.tpl',
      1 => 1568373371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1939169195573a0b1cc47090-90539836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b1cddea59_88660864',
  'variables' => 
  array (
    'el' => 0,
    'op_names' => 0,
    'dfields' => 0,
    'opc' => 0,
    'b' => 0,
    'oper' => 0,
    '_cfg' => 0,
    'clist' => 0,
    'user' => 0,
    'plans' => 0,
    'pcmax' => 0,
    's' => 0,
    'icurr' => 0,
    'clist2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b1cddea59_88660864')) {function content_573a0b1cddea59_88660864($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<div id="cabin"><div class="mycab left-cb"><div class="mycab-menu"><ul><li><a href="/cabinet">Кабинет</a></li><li><a href="/deposits">Депозиты</a></li><li><a href="/operations" style="color:#ffad15; border: 1px solid #f7a610">Операции</a></li><li><a href="/refsys">Партнеры</a></li><li><a href="/balance/wallets">Кошельки</a></li><li><a href="/account" style="margin-right:0px;">Настройки</a></li></ul></div><!--<div id="m-con"><div class="for"><a href="#" target="_blank">MMG</a></div><div class="for"><a href="#" target="_blank">MMGP</a></div><div class="for"><a href="#" target="_blank">TG</a></div></div>--></div><div class="mycab right-cb"><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><h1><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']];?>
</h1><?php if (isset($_GET['check'])){?><p class="info">Waiting for payment confirmation...</p><?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['el']->value['oState']<=1)){?><?php $_smarty_tpl->tpl_vars['opc'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['oOper']!='CASHIN')||$_smarty_tpl->tpl_vars['dfields']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['opc']->value){?><p class="info">Operation NOT confirmed by you!</p><?php }?><?php }elseif($_smarty_tpl->tpl_vars['el']->value['oState']==2){?><p class="info">The operation will be processed by the Administrator shortly</p><?php }?><?php $_smarty_tpl->tpl_vars['b'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=2){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['cancel'] = 'Cancel';?><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']>=5){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['del'] = 'Delete';?><?php }?><div id="infom"><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bt'=>valueIf($_smarty_tpl->tpl_vars['opc']->value,'Confirm',' '),'b'=>$_smarty_tpl->tpl_vars['b']->value,'errors'=>array('oper_not_found'=>'wrong state','oper_disabled'=>'operation disabled','low_bal1'=>'insufficient funds','data_date_wrong'=>'wrong operation date','data_sum_wrong'=>'wrong amount','data_batch_wrong'=>'batch-number empty','batch_exists'=>'operation with batch-number already exists')), 0);?>
<?php }?><?php }else{ ?></div><div id="addfunds"><?php $_smarty_tpl->tpl_vars['oper'] = new Smarty_variable($_GET['add'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['oper']->value=='CASHIN'){?><!--<h1>Add funds</h1>--><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Depo_AutoDepo']){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.interval.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><p><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','Плат. Система!!',array('psys_empty'=>'select pay.system'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'wrong amount'),'comment'=>' <i><span id="ccurr"></span></i>'),'Plan'=>array('S','План',array('plan_wrong'=>'Неверный План'),array(0=>'- auto -')+(array)$_smarty_tpl->tpl_vars['plans']->value,'skip'=>(count($_smarty_tpl->tpl_vars['plans']->value)<=1)),'Compnd'=>array('%','Compaund',array('compnd_wrong'=>"wrong value [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]",'compnd_wrong1'=>"wrong value for plan '".($_smarty_tpl->tpl_vars['cplan']->value)."'"),'skip'=>!$_smarty_tpl->tpl_vars['pcmax']->value)),'errors'=>array('oper_disabled'=>'operation disabled')), 0);?>
</div><?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='CASHOUT'){?><!--<h1>Withdraw</h1>--><?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],'Amount!! <<in internal units>>','Сумма!!'), null, 0);?><p><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','Плат. Система!!',array('psys_empty'=>'pay.system wrong'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']),'Sum'=>array('$',$_smarty_tpl->tpl_vars['s']->value,array('sum_wrong'=>'wrong amount','limit_exceeded'=>'limit exceeded'),'comment'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']," <b>".($_smarty_tpl->tpl_vars['icurr']->value)."</b>",' <i><span id="ccurr"></span></i>')),'PIN'=>array('*','Input PIN-code!!',array('pin_wrong'=>'wrong code'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Bal_NeedPIN'],'size'=>8)),'errors'=>array('low_bal1'=>'insufficient funds','oper_disabled'=>'operation disabled')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='EX'){?><h1>Exchange</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','From payment system!!',array('psys_empty'=>'pay.system wrong'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value),'Sum'=>array('$','Amount!!',array('sum_wrong'=>'wrong amount'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Comission','comment'=>' <i><span id="csum"></span></i>'),'PSys2'=>array('S','To payment system!!',array('psys2_empty'=>'pay.system wrong','psys2_equal_psys'=>'pay.system must be different','ex_rate_not_set'=>'exchange rate is not specified'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist2']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist2']->value),'Sum2'=>array('X','Amount to receive','comment'=>' <i><span id="sum2"></span></i>')),'errors'=>array('low_bal1'=>'insufficient funds','oper_disabled'=>'operation disabled')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='TR'){?><h1>Transfer</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],1,array('S','Payment system!!',array('psys_empty'=>'pay.system wrong'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value)),'Sum'=>array('$','Amount!!',array('sum_wrong'=>'wrong amount'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Comission','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('X','The recipient will be transfered','comment'=>' <i><span id="sum2"></span></i>'),'Login2'=>array('T','Recipient!!',array('user2_empty'=>'user not found','user2_equal_user'=>'users must be different')),'Memo'=>array('W','Memo','size'=>4)),'errors'=>array('low_bal1'=>'insufficient funds','oper_disabled'=>'operation disabled')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oper'=>$_smarty_tpl->tpl_vars['oper']->value,'use_sum2'=>true), 0);?>
<?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>