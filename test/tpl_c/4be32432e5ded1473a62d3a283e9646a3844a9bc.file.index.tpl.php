<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:38:12
         compiled from "tpl/en/system/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27983249573991aebd8546-57756884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be32432e5ded1473a62d3a283e9646a3844a9bc' => 
    array (
      0 => 'tpl/en/system/index.tpl',
      1 => 1568971274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27983249573991aebd8546-57756884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573991aec2a5c6_93481420',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573991aec2a5c6_93481420')) {function content_573991aec2a5c6_93481420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Interface'), 0);?>
<h1>Select interface</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('lang'=>array('S','Language',0,array('en'=>'English','ru'=>'Русский'),'default'=>$_SESSION['_lang'])),'btn_text'=>'Select'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>