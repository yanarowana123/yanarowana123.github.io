<?php /* Smarty version Smarty-3.1.8, created on 2017-08-21 15:33:24
         compiled from "tpl/ru/redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972754464599afd4450c1a6-81193228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce291b161556e67ddd4a970a69721e631dced08' => 
    array (
      0 => 'tpl/ru/redirect.tpl',
      1 => 1503076829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972754464599afd4450c1a6-81193228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_599afd44516d79_01469284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599afd44516d79_01469284')) {function content_599afd44516d79_01469284($_smarty_tpl) {?><?php if ($_SERVER['HTTP_X_REQUESTED_WITH']!='XMLHttpRequest'){?> 
	<script type="text/javascript">
	location.replace("<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"); 
	</script>
	<noscript>
	<meta http-equiv="refresh" content="0; url=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"> 
	</noscript>	
<?php }?><?php }} ?>