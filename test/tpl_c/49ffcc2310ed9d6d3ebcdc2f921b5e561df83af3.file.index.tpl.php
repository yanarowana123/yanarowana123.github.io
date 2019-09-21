<?php /* Smarty version Smarty-3.1.8, created on 2017-08-30 15:40:54
         compiled from "tpl/ru/confirm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107378806159993d1cc8d256-47967410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ffcc2310ed9d6d3ebcdc2f921b5e561df83af3' => 
    array (
      0 => 'tpl/ru/confirm/index.tpl',
      1 => 1503643875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107378806159993d1cc8d256-47967410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59993d1cce3392_77491050',
  'variables' => 
  array (
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59993d1cce3392_77491050')) {function content_59993d1cce3392_77491050($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Confirmation'), 0);?>
<section class="section-page"><div class="container"><div class="row"><div class="col-md-6  col-md-offset-3"><h1 class='title'>Confirmation </h1><?php if (isset($_GET['done'])){?><h4>Operation complete!</h4><?php }else{ ?><?php if (isset($_GET['need_confirm_sms'])){?><h4>Operation NOT complete!</h4><p class="info">To complete the operation, you must input confirmation code<br>that was sent to your phone</p><?php }?><br/><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Code'=>array('T','Confirmation code!!',array('code_empty'=>'input code','code_not_found'=>'wrong code','code_used'=>'code is already outdated','code_expired'=>'code has expired','dif_ip'=>'confirmation from your IP-address can not be done','oper_wrong'=>'wrong operation','oper_unkn'=>'operation is not implemented'),'size'=>40,'hint'=>'Confirmation code','default'=>$_GET['code'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Confirm_Captcha'],'btn_text'=>'Execute'), 0);?>
<?php }?></div><div class="clearfix"></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>