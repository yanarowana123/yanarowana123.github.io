$(function(){

	calc();

	$('#calc_plan').on('change', calc);
	$('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);

});

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode > 31 && (charCode < 45 || charCode > 57))
		return false;
	return true;
}

function calc() {

	var plan = $('#calc_plan').val();
	var amount = $('#inv_amount').val();
	var percent;

	switch (plan) {
		case '1':
			switch (true) {
				case (amount<1):
					percent = 0;
					break;
				case (amount>50):
					percent = 0;
					break;
				case (amount<=2000):
					percent = 105;
					break;	
                case (amount<=5000):
					percent = 105;
					break;	
                case (amount<=20000):
					percent = 112;
					break;	
                case (amount<=50000):
					percent = 122;
					break;	
			   default:
					percent = 0;
			}
			break;


		case '2':
			switch (true) {
				case (amount<50):
					percent = 0;
					break;
				case (amount>150):
					percent = 0;
					break;
				case (amount<=2000):
					percent = 111;
					break;	
                case (amount<=5000):
					percent = 125;
					break;	
                case (amount<=20000):
					percent = 160;
					break;	
                case (amount<=50000):
					percent = 200;
					break;	
			   default:
					percent = 0;
			}
			break;




		case '3':
			switch (true) {
				case (amount<150):
					percent = 0;
					break;
				case (amount>250):
					percent = 0;
					break;
				case (amount<=2000):
					percent = 118;
					break;	
                case (amount<=5000):
					percent = 160;
					break;	
                case (amount<=20000):
					percent = 250;
					break;	
                case (amount<=50000):
					percent = 350;
					break;	
			   default:
					percent = 0;
			}
			break;




		case '4':
			switch (true) {
				case (amount<251):
					percent = 0;
					break;
				case (amount>2000):
					percent = 0;
					break;
				case (amount<=5000):
					percent = 145;
					break;	
                case (amount<=10000):
					percent = 240;
					break;	
                case (amount<=20000):
					percent = 500;
					break;	
                case (amount<=50000):
					percent = 700;
					break;	
			   default:
					percent = 0;
			}
			break;




		case '5':
			switch (true) {
				case (amount<10):
					percent = 0;
					break;
				case (amount>50000):
					percent = 0;
					break;
				case (amount<=2000):
					percent = 200;
					break;	
                case (amount<=5000):
					percent = 400;
					break;	
                case (amount<=20000):
					percent = 1100;
					break;	
                case (amount<=50000):
					percent = 1500;
					break;	
			   default:
					percent = 0;
			}
			break;
			
			
	}

$('#assign_per').text(percent+'%');
	var total = amount*percent/100;
	$('#total_return').text('$'+total.toFixed(2));
	
	if(total <= 0){
		$('#net_profit').text(''+'0.00');
	}else{
		$('#net_profit').text('$'+(total-amount).toFixed(2));
	}
	
	
	

}