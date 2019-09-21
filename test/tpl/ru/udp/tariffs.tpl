{include file='header.tpl' title='Тарифы'}


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
							 		{if _uid()}
							<a href="cabinet" class="btn btn_more">Инвестировать</a>
							{else}
							
							<a href="login" class="btn btn_more">Инвестировать</a>
							{/if}
							
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

{include file='footer.tpl'}