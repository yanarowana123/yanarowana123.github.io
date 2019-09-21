{strip}


				<div class="row main_stat_block">
						<div class="col-sm-4 item wow fadeIn" data-wow-delay="1s">
							<h4>Инвесторов</h4>
							<p>{$stat.users} чел.</p>
						</div>
						<div class="col-sm-4 item wow fadeIn" data-wow-delay="1.5s">
							<h4>Всего инвестировано</h4>
							<p>{$leftstat.zin|string_format:"%.2f"}р</p>
						</div>
						<div class="col-sm-4 item wow fadeIn" data-wow-delay="2s">
							<h4>Выплачено</h4>
							<p>{$leftstat.zout|string_format:"%.2f"} р</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	









{/strip}