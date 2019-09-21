 <div class="box-calc-label">
	 <div class='box-oper-psys'>
		<label class="current" data-curr='{$_cfg["Bal_RateUSD"]}'  rel='$' data-pow='0'>USD</label>
	</div>
	 <div class='box-oper-psys'>
							<label  data-curr='{$_cfg["Bal_RateBTC"]}'  rel='BTC' data-pow='3'>BTC</label>
	</div>
</div>

 <div class="calculate-box">




              <ul>
                              <li class="calc-select">
                                <p >Выбор инвестиционного плана:</p>
                                <div class="clearfix"></div>
                                <a rel='1' class='active'>130<small>%</small></a>
                                  <a rel='2' >180<small>%</small></a>
                                  <a rel='3' >250<small>%</small></a>
                                  <a rel='4' >520<small>%</small></a>
                                  <a rel='5' >1300<small>%</small></a>

                              </li>

                              <div class="clearfix"></div>
                              <li class='drag-select' >
                              <div class="selector">
                                  <div class="p_before animate" style='width:0px;'><span></span></div>
                                  <div class="p_line"></div>
                                  <div id="drag"  class="drag resize ui-widget-content ui-draggable"
                                                style="left: 0;">
                                      <span>25</span>
                                  </div>
                              </div>
                              <div class="min-value"><span>10</span><small class='depo-curr-label'>$</small></div>
                              <div class="max-value"><span>1000</span><small class='depo-curr-label'>$</small></div>
                          </li>
                          <li class="calc-amount" >
                            <label >Вы инвестируете (<small class='depo-curr-label'>USD</small>):</label>
                              <div class='calc-amount-field'>
                                <input type="text" class='cal-amount-val' value='10' >
                              </div>
                          </li>

                          <li class="calc-profit">
                            <span class='total'><span>30</span><small class='depo-curr-label'>$</small></span>

                              <small>получите<br/> через <i class='period2' style='font-style:normal; font-size:15px;'>30</i> дней </small>
                              <span class='profit'><span>30</span><small class='depo-curr-label'>$</small></span>
                            <small class='small-2' data-caption-first='часа' data-caption='дней'>каждые<br/>
                              <i class='period' style='font-style:normal; font-size:15px;'>24 часа</i></small>

                          </li>
                  </ul>
          </div>