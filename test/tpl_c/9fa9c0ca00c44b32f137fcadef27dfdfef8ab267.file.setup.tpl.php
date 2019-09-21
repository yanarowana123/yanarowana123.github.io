<?php /* Smarty version Smarty-3.1.8, created on 2017-08-19 09:10:07
         compiled from "tpl/en/refsys/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7740234155998006fe1f5e7-52135747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa9c0ca00c44b32f137fcadef27dfdfef8ab267' => 
    array (
      0 => 'tpl/en/refsys/admin/setup.tpl',
      1 => 1503076956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7740234155998006fe1f5e7-52135747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5998006fe76156_11238184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5998006fe76156_11238184')) {function content_5998006fe76156_11238184($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Settings'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Word'=>array('T','To enable <b>ref.system<b><br>specify the word in a ref-link','comment'=>'../?<u>ref</u>=..'),'Levels'=>array('I','Number of shown levels <<for multilevel>>'),1=>'Add funds','Type'=>array('S','Type','',array('Multilevel'=>'',0=>'<rate> up-level','one level'=>'',2=>'&nbsp;from_num_of_actives_refers&nbsp;-&nbsp;rate(%)&nbsp;',3=>'&nbsp;from_sum_depo_refers&nbsp;-&nbsp;rate(%)&nbsp;',4=>'&nbsp;from_sum_active_depo_of_user&nbsp;-&nbsp;rate(%)&nbsp;')),'_Perc'=>array('A','Values','size'=>5),'Deposit','DType'=>array('S','Type','',array('Multilevel'=>'',0=>'<rate> up-level','one level'=>'',2=>'&nbsp;from_num_of_actives_refers&nbsp;-&nbsp;rate(%)&nbsp;',3=>'&nbsp;from_sum_depo_refers&nbsp;-&nbsp;rate(%)&nbsp;',4=>'&nbsp;from_sum_active_depo_of_user&nbsp;-&nbsp;rate(%)&nbsp;')),'_DPerc'=>array('A','Values','size'=>5),'Accrual','PType'=>array('S','Type','',array('Multilevel'=>'',0=>'<rate> up-level','one level'=>'',2=>'&nbsp;from_num_of_actives_refers&nbsp;-&nbsp;rate(%)&nbsp;',3=>'&nbsp;from_sum_depo_refers&nbsp;-&nbsp;rate(%)&nbsp;',4=>'&nbsp;from_sum_active_depo_of_user&nbsp;-&nbsp;rate(%)&nbsp;')),'_PPerc'=>array('A','Values','size'=>5))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>