






jQuery(document).ready(function () {
     
	handle_BasicChart(); 
    
});

  

    // Function to handel Basic Charts
function handle_BasicChart() {




  var curMonth = ($('#curMonth').val()).split(',');
  var curLang = $('#curLang').val();
  var curDay = ($('#curDay').val()).split(',');
  var curPers = ($('#curPers').val()).split('-'); 
  
  var monthsen = ["January","January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"];
  var monthsru = ["Января", "Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
  var monthssp = ["Enero", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Augusto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  var monthscn = ["一月", "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"];
  var months = ((curLang=='ru')?monthsru:(curLang=='en')?monthsen:(curLang=='sp')?monthssp:monthscn); 
  
     

 
		var d1 = [[0, curPers[14]], [1, curPers[13]], [2, curPers[12]], [3, curPers[11]], [4, curPers[10]], [5, curPers[9]], [6, curPers[8]], [7, curPers[7]], [8, curPers[6]], [9, curPers[5]], [10, curPers[4]], [11, curPers[3]], [12, curPers[2]], [13, curPers[1]], [14, curPers[0]]];
 

        $.plot("#basicChart", [
            {label: "", data: d1, color: '#45B509'} 
        ], {
            series: {
                lines: {show: true},
                points: {show: true}
            }, 
            xaxis: {
                ticks: [
                   [0, curDay[14]], [1, curDay[13]], [2, curDay[12]], [3, curDay[11]], [4, curDay[10]], [5, curDay[9]], [6, curDay[8]], [7, curDay[7]], [8, curDay[6]], [9, curDay[5]], [10, curDay[4]], [11, curDay[3]], [12, curDay[2]], [13, curDay[1]], [14, curDay[0]]
                ]
            },
            yaxis: {
                ticks: 10,
                tickDecimals: 2
            },
            grid: {
                hoverable: true, 
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                }
            },
            tooltip: true,
            tooltipOpts: {
                content: (curLang=='ru')?"Процент начисления: %y.1\%":"Accrual percentage: %y.1\%",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        });
    };
