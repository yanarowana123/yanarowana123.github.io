let primeNum = document.querySelector('.prime');


// primeNum.addEventListener('change', (e)=>isPrime(e.target.value));




// function isPrime(value) {
// 	var i, max;
	
// 	if (!value) {
// 		alert('Введите число');	
// 	}
	
// 	if (value < 2 || value % 2 === 0 && value !== 2) {
//         alert('Введите простое число');	
// 	}
	
// 	max = Math.round(Math.sqrt(value)) + 1;
	
	
// 	for (i = 3; i < max; i += 2) {
// 		if (value % i === 0) {
//             alert('Введите простое число');	
// 		}
// 	}
	
// 	return true;
// }


// let p = document.querySelector('.prime')
let p = $("#p")

$(document).on('change',p,function(){

	val = p.val();
	console.log(val)

	


	

})


