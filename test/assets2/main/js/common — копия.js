$(document).ready(function() {

// menu
  $('#btn-mobile').click(function () {
    $(this).toggleClass('open');
    $('.nav').toggleClass('active');
  });
  $('.nav li a').click(function () {
    $('.nav').removeClass('active');
    $('#btn-mobile').removeClass('open');
  });

//запрет на ввод букв в поле input type="number"
  $("input[type='number']").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57)) {
      return false;
    }
  });

  $('.str').liMarquee({
    direction: 'right', //Указывает направление движения содержимого контейнера (left | right | up | down)
    loop: -1, //Задает, сколько раз будет прокручиваться содержимое. "-1" для бесконечного воспроизведения движения
    scrolldelay: 0, //Величина задержки в миллисекундах между движениями
    scrollamount: 50, //Скорость движения контента (px/sec)
    circular: true, //Если "true" - строка непрерывная
    drag: true, //Если "true" - включено перетаскивание строки
    runshort: true, //Если "true" - короткая строка тоже "бегает", "false" - стоит на месте
    hoverstop: false, //true - строка останавливается при наведении курсора мыши, false - строка не останавливается
    inverthover: false, //false - стандартное поведение. Если "true" - строка начинает движение только при наведении курсора
  });

//Убрать plasholder при клике
  $('input,textarea').focus(function () {
    $(this).data('placeholder', $(this).attr('placeholder'));
    $(this).attr('placeholder', '');
  });
  $('input,textarea').blur(function () {
    $(this).attr('placeholder', $(this).data('placeholder'));
  });

//select
  $('select').each(function () {
    $(this).siblings('p').text($(this).children('option:selected').text());
  });
  $('select').change(function () {
    $(this).siblings('p').text($(this).children('option:selected').text());
  });

  //accordion
  (function($) {
    $('.accordion > li:eq(0) .accordion-title').addClass('active').next().slideDown().parent().addClass('active');

    $('.accordion .accordion-title').click(function(j) {
      var dropDown = $(this).closest('li').find('.question-block');

      $(this).closest('.accordion').find('.question-block').not(dropDown).slideUp();


      if ($(this).hasClass('active')) {
        $(this).removeClass('active').parent().removeClass('active');
      } else {
        $(this).closest('.accordion').find('.accordion-title.active').removeClass('active').parent().removeClass('active');
        $(this).addClass('active').parent().addClass('active');
      }

      dropDown.stop(false, true).slideToggle();

      j.preventDefault();
    });
  })(jQuery);

  //popup video
    $('.video-popup').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });

    //popup gallery
  $('.document_galery').on('click', function(event) {
    event.preventDefault();

    var gallery = $(this).attr('href');

    $(gallery).magnificPopup({
      delegate: 'a',
      type:'image',
      gallery: {
        enabled: true
      }
    }).magnificPopup('open');
  });

     $( "#slider" ).slider({
        value:100,
        min: 100,
        max: 100000,
        slide: function( event, ui ) {
            $( "#amount" ).val( ui.value + " р" );
            if( $( "#slider" ).slider( "value" ) >=100 && $( "#slider" ).slider( "value" ) <=499 ){
                $('#tarif-1').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=500 && $( "#slider" ).slider( "value" ) <=2499 ){
                $('#tarif-2').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=2500 && $( "#slider" ).slider( "value" ) <=4999 ){
                $('#tarif-3').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=5000 && $( "#slider" ).slider( "value" ) <=9999 ){
                $('#tarif-4').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=10000 && $( "#slider" ).slider( "value" ) <=59999 ){
                $('#tarif-5').prop('checked', true);
            }
            percent = $('.select_plan_wrap .item input:checked').parent('.item').find('.percent span').text();
            period = $('.select_plan_wrap .item input:checked').parent('.item').find('.period span').text();
            amount = $( "#slider" ).slider( "value" );
            $( "#slider2" ).slider( "value", percent );
            $( "#slider3" ).slider( "value", period );
            summ = amount /100 * percent * period;
            summ = summ.toFixed(2);
            $('.calc_profit_amount').text(summ +'$');
        },
        change: function( event, ui ) {
            $( "#amount" ).val( $( "#slider" ).slider( "value" ) +" р" );
            if( $( "#slider" ).slider( "value" ) >=100 && $( "#slider" ).slider( "value" ) <=499 ){
                $('#tarif-1').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=500 && $( "#slider" ).slider( "value" ) <=2499 ){
                $('#tarif-2').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=2500 && $( "#slider" ).slider( "value" ) <=4999 ){
                $('#tarif-3').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=5000 && $( "#slider" ).slider( "value" ) <=9999 ){
                $('#tarif-4').prop('checked', true);
            } else if( $( "#slider" ).slider( "value" ) >=10000 && $( "#slider" ).slider( "value" ) <=59999 ){
                $('#tarif-5').prop('checked', true);
            }
            percent = $('.select_plan_wrap .item input:checked').parent('.item').find('.percent span').text();
            period = $('.select_plan_wrap .item input:checked').parent('.item').find('.period span').text();
            amount = $( "#slider" ).slider( "value" );
            $( "#slider2" ).slider( "value", percent );
            $( "#slider3" ).slider( "value", period );
            summ = amount /100 * percent * period;
            summ = summ.toFixed(2);
            $('.calc_profit_amount').text(summ +'$');
        }
    });
    $( "#amount" ).val( $( "#slider" ).slider( "value" ) +" р" );
    $( "#slider .slider_min" ).text( $( "#slider" ).slider( "option", "min"  ) +" р" );
    $( "#slider .slider_max" ).text( $( "#slider" ).slider( "option", "max"  ) +" р" );


    $( "#slider2" ).slider({
        value:5,
        min: 1,
        max: 115,
        step: 0.5,
        slide: function( event, ui ) {
            $( "#amount2" ).val( ui.value + " %" );
        },
        change: function( event, ui ) {
            $( "#amount2" ).val( $( "#slider2" ).slider( "value" ) +" %" );
        }
    });
    $( "#amount2" ).val( $( "#slider2" ).slider( "value" ) + " %" );
    $( "#slider2 .slider_min" ).text( $( "#slider2" ).slider( "option", "min"  ) +" %" );
    $( "#slider2 .slider_max" ).text( $( "#slider2" ).slider( "option", "max"  ) +" %" );

	var days_translit = $('#days_translit').val();
    $( "#slider3" ).slider({
        value:30,
        min: 1,
        max: 30,
        slide: function( event, ui ) {
            $( "#amount3" ).val( ui.value + days_translit );
        },
        change: function( event, ui ) {
            $( "#amount3" ).val( $( "#slider3" ).slider( "value" ) + days_translit);

        }
    });
    $( "#amount3" ).val( $( "#slider3" ).slider( "value" ) + days_translit );
    $( "#slider3 .slider_min" ).text( $( "#slider3" ).slider( "option", "min"  ) + days_translit);
    $( "#slider3 .slider_max" ).text( $( "#slider3" ).slider( "option", "max"  ) + days_translit );

    $('.circle').click(function () {
       percent = $(this).parent('.item').find('.percent span').text();
       period2 = $(this).parent('.item').find('.period span').text();
       min_val = $(this).find('span.min').text();
        $( "#slider" ).slider( "value", min_val );
        $( "#slider2" ).slider( "value", percent );
        $( "#slider3" ).slider( "value", period2 );

    });

    $( "#slider2" ).slider( "disable" );
    $( "#slider3" ).slider( "disable" );



    var os1 = new OnScreen({
        tolerance: -200,
        debounce: 20,
        container: window
    });

    os1.on('enter', '.circle-bar', function(element, event){

        $('.circle-bar').circleProgress({
            size: 189,
            startAngle: -190,
            thickness: 50,
            animation: { duration: 7000, easing: "circleProgressEasing" },
            emptyFill: "rgba(255, 255, 255, 1)",
            fill: {
                gradient: ["#81e022", "#22e0d3"]
            }
        });

        os1.destroy();
    });

    var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       150,          // distance to the element when triggering the animation (default is 0)
            mobile:       false,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();

    var text = $('.investors .select_plan_wrap .item.frst').find('.descr').text();
    $('.investors .select_plan_wrap .tarif_descr p').text(text);

    $('.investors .select_plan_wrap .item').click(function () {
        text = $(this).find('.descr').text();
        $('.investors .select_plan_wrap .tarif_descr p').text(text);
    });


});