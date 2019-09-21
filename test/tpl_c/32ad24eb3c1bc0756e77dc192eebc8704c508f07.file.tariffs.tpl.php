<?php /* Smarty version Smarty-3.1.8, created on 2019-09-13 23:18:43
         compiled from "tpl/ru/udp/tariffs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4341266865d7bf9a31069f1-08591978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ad24eb3c1bc0756e77dc192eebc8704c508f07' => 
    array (
      0 => 'tpl/ru/udp/tariffs.tpl',
      1 => 1568373377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4341266865d7bf9a31069f1-08591978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d7bf9a31332f7_41325235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7bf9a31332f7_41325235')) {function content_5d7bf9a31332f7_41325235($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Тарифы'), 0);?>



<main>

	<section class="investors">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-heading">
						Инвестиционные предложения 
					</h2>
				</div>

				<div class="col-md-8 col-md-offset-2">
					<div class="select_plan_wrap clear">
						<div class="tarif_descr">
							<p></p>
							 		<?php if (_uid()){?>
							<a href="cabinet" class="btn btn_more">Инвестировать</a>
							<?php }else{ ?>
							
							<a href="login" class="btn btn_more">Инвестировать</a>
							<?php }?>
							
						</div>
						<div class="item frst">
							<p class="percent wow flipInY">
								<span>1.5</span>%
							</p>
							<p class="period  wow flipInY">СРОК <span></span> БЕССРОЧНО</p>
							
							<img class="tarif_arrow wow zoomInUp" src="assets2/main/img/sec/tarif_arrow.png" alt="">
							<input type="radio" name="change-tarif" class="hidden" id="tarif-1" checked>
							<label for="tarif-1" class="circle">
								<p><span class="min">100</span>р<br>-<br><span class="max">499</span>р<br></p>
							</label>
							<p class="descr hidden">Начисление по данному тарифному плану 1.5% в сутки.
</p>
						</div>
						<div class="item nd">
							<p class="percent wow flipInY">
								<span>2</span>%
							</p>
							<p class="period  wow flipInY">СРОК <span></span> БЕССРОЧНО</p>
							<img class="tarif_arrow  wow fadeIn" src="assets2/main/img/sec/tarif_arrow.png" alt="">
							<input type="radio" name="change-tarif" class="hidden" id="tarif-2">
							<label for="tarif-2" class="circle">
								<p><span class="min">500</span>р<br>-<br><span class="max">9999</span>р<br></p>
							</label>
							<p class="descr hidden">Начисление по данному тарифному плану 2% в сутки.</p>
						</div>
						<div class="item rd">
							<p class="percent wow flipInY">
								<span>2.5</span>%
							</p>
							<p class="period wow flipInY">Срок <span>2 </span> дня</p>
							<img class="tarif_arrow wow zoomInUp" src="assets2/main/img/sec/tarif_arrow.png" alt="">
							<input type="radio" name="change-tarif" class="hidden" id="tarif-3">
							<label for="tarif-3" class="circle">
								<p><span class="min">10000</span>р<br>-<br><span class="max">49999</span>р<br></p>
							</label>
							<p class="descr hidden">Начисление по данному тарифному плану 2.5% в сутки.
</p>
						</div>
						<div class="item th">
							<p class="period  wow flipInY">СРОК <span></span> БЕССРОЧНО</p>
							<p class="percent wow flipInY visible-myxs">
								3%
							</p>
							<input type="radio" name="change-tarif" class="hidden" id="tarif-4">
							<label for="tarif-4" class="circle">
								<p><span class="min">50000</span>р<br>-<br><span class="max">99999</span>р<br></p>
							</label>
							<img class="tarif_arrow wow fadeIn" src="assets2/main/img/sec/tarif_arrow.png" alt="">
							<p class="period wow flipInY hidden-myxs">Срок <span>3</span> дня</p>
							<p class="percent wow flipInY hidden-myxs">
								<span>3.5</span>%
							</p>
							<p class="descr hidden">Начисление по данному тарифному плану 3% в сутки.</p>
						</div>
						<div class="item fifth">
							<p class="percent wow flipInY">
								<span>3.5</span>%
							</p>
							<p class="period wow flipInY">Срок <span>4</span> дней</p>
							<img class="tarif_arrow wow zoomInUp" src="assets2/main/img/sec/tarif_arrow.png" alt="">
							<input type="radio" name="change-tarif" class="hidden" id="tarif-5">
							<label for="tarif-5" class="circle">
								<p><span class="min">100000</span>р<br>-<br><span class="max">999999</span>р<br></p>
							</label>
							<p class="descr hidden">Начисление по данному тарифному плану 3.5 в сутки.</p>
						</div>
						<div class="item sixth">
							<p class="percent wow flipInY">
								<span>4.4</span>%
							</p>
							<p class="period  wow flipInY">СРОК <span></span> БЕССРОЧНО</p>
							<img class="tarif_arrow wow fadeIn" src="assets2/main/img/sec/tarif_arrow.png" alt="">
							<input type="radio" name="change-tarif" class="hidden" id="tarif-6">
							<label for="tarif-6" class="circle">
								<p><span class="min">1000000</span>р<br>-<br><span class="max">15000000</span>р<br></p>
							</label>
							<p class="descr hidden">Начисление по данному тарифному плану 4.4% в сутки.</p>
						</div>
					</div>
				</div>

				
	</section>

</main>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>