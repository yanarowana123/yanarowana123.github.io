<?php /* Smarty version Smarty-3.1.8, created on 2017-08-25 20:57:55
         compiled from "tpl/en/balance/_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6010010655738c0e6e0e3c4-85579004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ffda890e3664ef18935ab86239633b03aac7b1a' => 
    array (
      0 => 'tpl/en/balance/_bal.tpl',
      1 => 1503643833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6010010655738c0e6e0e3c4-85579004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0e6e25395_04214727',
  'variables' => 
  array (
    'curr1' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0e6e25395_04214727')) {function content_5738c0e6e25395_04214727($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?>Your balance is <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><b>No funds</b> on your balance<?php }?><?php }} ?>