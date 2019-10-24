$(function() {
  

  $('.slider-wrapper').on('init reInit',function(event,slick){
      var amount = slick.slideCount;
      $('#range').attr('max',amount);
 
    })
    
    $('.slider-wrapper').on('afterChange',function(e,slick,currentSlide){
      $('#range').val(currentSlide+1);
    })
    
    $('#range').on('input change',function(){
      $('.slider-wrapper').slick('slickGoTo',this.value-1);
    });

  
  $('.slider-wrapper').slick({
   centerMode: true,
      // centerPadding: '235px',
      centerPadding: '100px',

      // slidesToShow: 2.35,
      slidesToShow: 1.7,
      slidesToScroll:1,
      arrows: false, 
      dots:false,
      customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
    
      // focusOnSelect: true,
      infinity: true,
      responsive: [
        {
          breakpoint: 800,
          settings:{
            slidesToShow:1.7,
            centerPadding: '80px'
            
          }
        },
        {
          breakpoint: 450,
          settings:{
            slidesToShow:1.7,
            centerPadding: '10px'
            
          }
        }
      ]
    
  
  })

  let yaris = $('.yaris');
  let corolla = $('.corolla');
  let chr = $('.c-hr');
  let chr2000 = $('.c-hr');
  let price = $('.header-price__text');
  let title = $('.about__title');
  let description = $('.about__text');
  
  $('.slider-wrapper').on('afterChange',function(e,slick,currentSlide){
    let x =$('.slick-center');
    let y =x.children().children();
   
    if(y.hasClass('yaris')){
      console.log(y);
   
      price.text('699 шекелей в месяц');
      title.text('Toyota Yaris Hibrid');
      description.text('Этот автомобиль заряжает энергией города! Он тихий и умный, легкий и надежный! Путешествуйте по городу на электричестве до 50% всего времени в пути без подзарядки — начните ездить по-новому! ')
    }
    else if(y.hasClass('c-hr')){
   
      price.text('1199 шекелей в месяц');
      title.text('Toyota C-HR Hibrid');
      description.text('Оригинальный, яркий и смелый кроссовер Toyota C-HR Hybrid, безусловный «хит» на дорогах Израиля. Toyota C-HR построен на основе уникальной модульной архитектуры TNGA — это новейший подход инженеров Toyota, позволяющий создавать более комфортные, управляемые и безопасные автомобили с ярким, экспрессивным дизайном.')
    }
    else if(y.hasClass('corolla')){
      
      price.text('1299 шекелей в месяц');
      title.text('Toyota Corolla Hibrid');
      description.text('Стремительный дизайн, уникальные для своего класса опции, высокий уровень исполнения, а также азартная динамика и управляемость, делают Toyota Corolla Hibrid лучшим седаном в своем классе.')
    } else{
    
      price.text('Цену новинки уточняйте у наших операторов.');
      title.text('Toyota C-HR Hibrid 2020');
      description.text('Еще ярче, еще лучше и еще технологичнее! Топ-версия Toyota C-HR Hibrid 2020 будет выдавать показатель в 184 лошадиных силы, а также отличаться более спортивными настройками подвески. Изменения коснуться внешнего вида, усовершенствована медиасистема с 8-дюймовым экраном, серьезно улучшена шумоизоляция. Первые автомобили уже в пути!')
    }
  })
  
  
   let popup= document.querySelector('.popup');
   
         popup.onclick = function(){
      popup.style.right=('-100%');
       $('body').css('overflow', 'auto');
   }
  
  
   $(document).mouseup(function(e) 
{
  if ($('.popup').is(e.target) && $('.popup').has(e.target).length === 0) 
  {
  
    $('.popup').css('right','-100%'); 
      $('body').css('overflow', 'auto');
  }
});
  
  
  $(".form-box form").submit(function() {
    var str = $(this).serialize();
     
    $.ajax({
    type: "POST",
    url: "https://yanarowana123.000webhostapp.com/send.php",
    data: str,
    success: function(msg) {
    if(msg == 'OK') {
     popup.style.right=('0');  
      $('body').css('overflow', 'hidden');
    } else {
    result = msg;
    }
    }
    });
    return false;
    });
  
  

  
});