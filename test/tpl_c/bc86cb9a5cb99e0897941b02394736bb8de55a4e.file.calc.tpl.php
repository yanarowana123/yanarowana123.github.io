<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 16:09:46
         compiled from "tpl/ru/depo/calc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17420569365739c69ac9d048-30376710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc86cb9a5cb99e0897941b02394736bb8de55a4e' => 
    array (
      0 => 'tpl/ru/depo/calc.tpl',
      1 => 1347201912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17420569365739c69ac9d048-30376710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5739c69ad10720_80756727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739c69ad10720_80756727')) {function content_5739c69ad10720_80756727($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Калькулятор'), 0);?>
<h1>Калькулятор инвестора</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>