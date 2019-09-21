$(document).ready(function(){
		var percent 	= [115, 160, 265, 1900];
		var minMoney 	= [5, 50, 100, 120];
		var maxMoney	= [99, 300, 1000, 500];
		$("#money").val(minMoney[0]);
		function calc(){
			money = parseFloat($("#money").val());
			
			id = -1;
			var length = percent.length;
			var i = 0;
			do {
				if(minMoney[i] <= money && money <= maxMoney[i]){
					id = i;
					i = i + length;
				}
				i++
			}
			while(i < length)
			
			if(id != -1){
				profitDaily = money / 100 * percent[id];
				profitDaily = profitDaily.toFixed(8);
				profitHourly = profitDaily / 24;
				profitHourly = profitHourly.toFixed(8);
				profitWeekly = profitDaily * 7;
				profitWeekly = profitWeekly.toFixed(8);
				profitMonthly = profitDaily * 30;
				profitMonthly = profitMonthly.toFixed(8);

				if(money < minMoney[id] || isNaN(money) == true){
					$("#profitHourly").text("Error!");
					$("#profitDaily").text("Error!");
					$("#profitWeekly").text("Error!");
					$("#profitMonthly").text("Error!");
					if($("#selected_plan").length){
						$("#selected_plan").text("Error!");
						$("#percentHourly").text("Error!");
					}
				} else {
				       
					$("#profitHourly").text(profitHourly + " $");
					$("#profitDaily").text(profitDaily + " $");
					$("#profitWeekly").text(profitWeekly + " $");
					$("#profitMonthly").text(profitMonthly + " $");
					if($("#selected_plan").length){
						$("#selected_plan").text($(".plan .boxs:eq(" + id + ") .percent").text());
						$("#percentHourly").text($(".plan .boxs:eq(" + id + ") .text").text());
					}
				}
			} else {
				$("#profitHourly").text("Error!");
				$("#profitDaily").text("Error!");
				$("#profitWeekly").text("Error!");
				$("#profitMonthly").text("Error!");
				if($("#selected_plan").length){
						$("#selected_plan").text("Error!");
						$("#percentHourly").text("Error!");
					}
			}
		}
		if($("#money").length){
			calc();
		}
		$("#money").keyup(function(){
			calc();
		});


});
