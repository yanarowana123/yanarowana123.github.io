$(function(){



$('.calculate-select').on('change',function()
{
	var plan=$(this).val();
	var data = sw(plan);
	$('.calculate-amount').val(data.min);
	calc(data,data.min);
})
$('.calculate-amount').on('change keyup', function()
{
	var amount=$(this).val();
	var plan=$('.calculate-select').val();
	var data = sw(plan);
	if (amount>data.max) amount=data.max;
	$(this).val(amount);
	calc(data, amount);
}).on('keypress', isNumber);

function isNumber(event)
{
	var charCode = (event.which) ? event.which : event.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
function sw(plan)
{
		data=[];
		data.min=10;
		data.max=10;
		amount=$('.calculate-amount').val();
		data.percent=120;
		switch (plan)
		{
		case '1':
				data.min = 10;
				data.max = 10;
				data.percent=120;
				break;
		case '2':
				data.min = 20;
				data.max = 20;
				data.percent=120;
				break;
		case '3':
				data.min = 30;
				data.max = 30;
				data.percent=120;
				break;
	    case '4':
				data.min = 40;
				data.max = 40;
				data.percent=120;
				break;
		case '5':
				data.min = 50;
				data.max = 50;
				data.percent=120;
				break;
		
		}
	return data;
}

function calc(data, amount)
{
	if (jQuery.isEmptyObject(data))
	{
		data = sw();
		amount = data.min;
		$('.amount').val(data.min);
		calculate(amount,data.percent,data.id);

	}
	calculate(amount,data.percent,data.id,data.daily,data.duration,data.ret);
}

 function calculate(amount,percent,id,daily,duration,ret)
 {
 	var plan=id;
 	var amount=Number(amount);
 	var active=Number(id);
 	var ret=Number(ret);
 	var daily=Number(daily);
 	var duration=Number(duration);
	var percent=Number(percent);
	var total=Math.round(amount*percent).toFixed(0)/100;
	$('.total').html(total);
 }





});

