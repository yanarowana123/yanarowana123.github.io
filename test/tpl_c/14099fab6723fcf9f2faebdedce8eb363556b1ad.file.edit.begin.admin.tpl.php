<?php /* Smarty version Smarty-3.1.8, created on 2019-09-04 09:40:00
         compiled from "tpl/ru/edit.begin.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328518409573a095eae6f83-68612279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14099fab6723fcf9f2faebdedce8eb363556b1ad' => 
    array (
      0 => 'tpl/ru/edit.begin.admin.tpl',
      1 => 1567570428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328518409573a095eae6f83-68612279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a095eb335e3_62884026',
  'variables' => 
  array (
    'values' => 0,
    'title' => 0,
    'title_new' => 0,
    'edit_is_new' => 0,
    'form' => 0,
    'edit_form_name' => 0,
    'url' => 0,
    '_selfLink' => 0,
    'data' => 0,
    'form_class' => 0,
    'on_submit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a095eb335e3_62884026')) {function content_573a095eb335e3_62884026($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['edit_descr_rem'] = new Smarty_variable('<span class="descr_rem">(', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['edit_descr_rem'] = clone $_smarty_tpl->tpl_vars['edit_descr_rem']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['edit_descr_rem'] = clone $_smarty_tpl->tpl_vars['edit_descr_rem'];?><?php $_smarty_tpl->tpl_vars['edit_descr_star'] = new Smarty_variable('<span class="descr_star">*</span>', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['edit_descr_star'] = clone $_smarty_tpl->tpl_vars['edit_descr_star']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['edit_descr_star'] = clone $_smarty_tpl->tpl_vars['edit_descr_star'];?><?php $_smarty_tpl->tpl_vars['edit_is_new'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['values']->value, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['edit_is_new'] = clone $_smarty_tpl->tpl_vars['edit_is_new']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['edit_is_new'] = clone $_smarty_tpl->tpl_vars['edit_is_new'];?><?php if ($_smarty_tpl->tpl_vars['title']->value||$_smarty_tpl->tpl_vars['title_new']->value){?><h2><?php if (!$_smarty_tpl->tpl_vars['title_new']->value||!$_smarty_tpl->tpl_vars['edit_is_new']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['title_new']->value;?>
<?php }?></h2><?php }?><?php $_smarty_tpl->tpl_vars['edit_form_name'] = new Smarty_variable(getFormName($_smarty_tpl->tpl_vars['form']->value), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['edit_form_name'] = clone $_smarty_tpl->tpl_vars['edit_form_name']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['edit_form_name'] = clone $_smarty_tpl->tpl_vars['edit_form_name'];?><?php echo $_smarty_tpl->getSubTemplate ('edit.info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_info'=>getInfoData($_smarty_tpl->tpl_vars['edit_form_name']->value)), 0);?>
<form method="post"	<?php if ($_smarty_tpl->tpl_vars['url']->value){?> action="<?php if ($_smarty_tpl->tpl_vars['url']->value=='*'){?><?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php }?>"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value){?> enctype="multipart/form-data"<?php }?><?php if ($_smarty_tpl->tpl_vars['form_class']->value){?> class="<?php echo $_smarty_tpl->tpl_vars['form_class']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['on_submit']->value){?> onSubmit="<?php echo $_smarty_tpl->tpl_vars['on_submit']->value;?>
"<?php }?>><?php }} ?>