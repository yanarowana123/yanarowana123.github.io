<?php /* Smarty version Smarty-3.1.8, created on 2017-08-25 20:57:55
         compiled from "tpl/en/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4749474725738c0e6dd46b9-57078031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc535335df5cb50839fbdf3361c5aacecfbfeb5' => 
    array (
      0 => 'tpl/en/cabinet/index.tpl',
      1 => 1503643836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4749474725738c0e6dd46b9-57078031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0e6dfb2f1_78357335',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0e6dfb2f1_78357335')) {function content_5738c0e6dfb2f1_78357335($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Cabinet'), 0);?>
<h1>Cabinet</h1><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><br><?php echo $_smarty_tpl->getSubTemplate ('balance/_stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>