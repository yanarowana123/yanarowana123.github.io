<?php /* Smarty version Smarty-3.1.8, created on 2017-08-16 12:45:31
         compiled from "tpl/ru/news/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096422806573a06fb1c8b03-19844882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee1877530194ee1ff15cd13bb7d9ded97e5bf40' => 
    array (
      0 => 'tpl/ru/news/block.tpl',
      1 => 1502861697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096422806573a06fb1c8b03-19844882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a06fb217f24_92751395',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a06fb217f24_92751395')) {function content_573a06fb217f24_92751395($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/c/ct27347/public_html/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/c/ct27347/public_html/smarty3/plugins/modifier.truncate.php';
?>
<?php if ($_smarty_tpl->tpl_vars['list']->value){?>
    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lastnews']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lastnews']['index']++;
?>

    		 <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastnews']['index']==0){?>class='act'<?php }?> >
                <div>
                  <i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['nTS'],"%d");?>
<small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['nTS'],"%b");?>
</small></i>
                  <a href="<?php echo tplModuleToLink(array('module'=>'news/show','chpu'=>array($_smarty_tpl->tpl_vars['l']->value['nID'],$_smarty_tpl->tpl_vars['l']->value['nTopic'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['nTopic'];?>
</a>
                  <p>
                    <?php echo smarty_modifier_truncate(nl2br($_smarty_tpl->tpl_vars['l']->value['nAnnounce']),150);?>

                  </p>
                </div>
              </li>





    <?php } ?>
<?php }?>









<?php }} ?>