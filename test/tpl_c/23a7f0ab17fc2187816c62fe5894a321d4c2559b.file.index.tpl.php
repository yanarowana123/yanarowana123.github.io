<?php /* Smarty version Smarty-3.1.8, created on 2017-08-19 09:14:49
         compiled from "tpl/en/refsys/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14391339459980189243ed1-71124988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a7f0ab17fc2187816c62fe5894a321d4c2559b' => 
    array (
      0 => 'tpl/en/refsys/index.tpl',
      1 => 1503076863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14391339459980189243ed1-71124988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reflogin' => 0,
    'refurl' => 0,
    'refs' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5998018928fd85_84483631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5998018928fd85_84483631')) {function content_5998018928fd85_84483631($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Referral system'), 0);?>
<h1>Referral system</h1><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('RefLogin'=>array('X','You invited by',0,$_smarty_tpl->tpl_vars['reflogin']->value,'skip'=>!$_smarty_tpl->tpl_vars['reflogin']->value),'RefURL'=>array('X','Your referral link',0,"<a href=\"".($_smarty_tpl->tpl_vars['refurl']->value)."\" target=\"_blank\">".($_smarty_tpl->tpl_vars['refurl']->value)."</a>"),'Refs'=>array('U','refsys/_refs.tpl','skip'=>!$_smarty_tpl->tpl_vars['refs']->value)),'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Invites</h2><?php }?><?php }?><h2>Promo materials</h2>Banners here<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>