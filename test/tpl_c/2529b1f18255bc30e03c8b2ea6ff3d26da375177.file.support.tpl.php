<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 15:12:00
         compiled from "tpl/en/message/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7641820355994365db60f18-38073581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2529b1f18255bc30e03c8b2ea6ff3d26da375177' => 
    array (
      0 => 'tpl/en/message/support.tpl',
      1 => 1568373367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7641820355994365db60f18-38073581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5994365db7c3f5_57857605',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994365db7c3f5_57857605')) {function content_5994365db7c3f5_57857605($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Support'), 0);?>
<h1>Support request</h1><?php if (isset($_GET['done'])){?><h2>Your request has been sent successfully to support!</h2><p class="info">The administrator will respond to you within 24 hours</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('message/support.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>