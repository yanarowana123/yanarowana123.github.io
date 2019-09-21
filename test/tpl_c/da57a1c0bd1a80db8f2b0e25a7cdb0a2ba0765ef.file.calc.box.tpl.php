<?php /* Smarty version Smarty-3.1.8, created on 2017-08-16 15:10:54
         compiled from "tpl/en/depo/calc.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9075248675994364ee501c2-13697387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da57a1c0bd1a80db8f2b0e25a7cdb0a2ba0765ef' => 
    array (
      0 => 'tpl/en/depo/calc.box.tpl',
      1 => 1502861658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9075248675994364ee501c2-13697387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calc_pselect' => 0,
    'calc_compnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5994364ee653f6_88582837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994364ee653f6_88582837')) {function content_5994364ee653f6_88582837($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'calc','fields'=>array('sum'=>array('$','Amount','default'=>10),'plan'=>array('S','Plan',0,$_smarty_tpl->tpl_vars['calc_pselect']->value,'skip'=>false),'cmpd'=>array('S','Compaund',0,$_smarty_tpl->tpl_vars['calc_compnd']->value,'skip'=>!$_smarty_tpl->tpl_vars['calc_compnd']->value)),'on_submit'=>'recalc(); return false;','btn_text'=>'Calculate'), 0);?>
<?php }} ?>