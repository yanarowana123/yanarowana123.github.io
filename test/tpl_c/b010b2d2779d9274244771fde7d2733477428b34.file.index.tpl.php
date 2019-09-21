<?php /* Smarty version Smarty-3.1.8, created on 2017-08-28 18:58:08
         compiled from "tpl/ru/review/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1806388247573a0ba4831fb5-43077778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b010b2d2779d9274244771fde7d2733477428b34' => 
    array (
      0 => 'tpl/ru/review/index.tpl',
      1 => 1503935887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1806388247573a0ba4831fb5-43077778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ba4895422_34008132',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ba4895422_34008132')) {function content_573a0ba4895422_34008132($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'shot','title'=>'Отзывы'), 0);?>
<section class="main1"><div class="container"><div class="row"><div class="col-md-12"><center><h1><span>О нас говорят</span></h1></center><div class="clearfix"></div><br/><div class="wrapper"><div style="text-align:center;"><div style="color:red;"><h2></h2></div></div><h1></h1><table class="formatTable" width="100%"><div class="col-md-8"><?php if (isset($_GET['awating'])){?><center><h4>Your review has successfully added!</h4><p class="info">The administrator will check it in the near future</p></center><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><ul class='box-faq'><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><li ><a><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
 <span style='float:right;'><?php echo $_smarty_tpl->tpl_vars['l']->value['oTS'];?>
</span></a><div class="box"><div><?php echo nl2br($_smarty_tpl->tpl_vars['l']->value['oText']);?>
</div></div></li><?php } ?></ul><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><div class="box">- Нет отзывов -</div><?php }?><?php }?></div><div class="col-md-4"><?php if (_uid()){?><h3>Оставить отзыв</h3><?php echo $_smarty_tpl->getSubTemplate ('edit.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'','form_class'=>'form-oper ','table_class'=>'table-oper table-oper-1','fields'=>array('Text'=>array('W','',array('text_empty'=>'input text'),'size'=>5,'hint'=>'Text...')),'btn_text'=>'Добавить'), 0);?>
<?php }else{ ?><div class="clearfix"></div><?php }?></div></div></div></div></section></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>