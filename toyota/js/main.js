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
        centerPadding: '0px',

        // slidesToShow: 2.35,
        slidesToShow: 3,
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
            breakpoint: 450,
            settings:{
              slidesToShow:1,
              centerPadding: '0px'
              
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
        price.text('От 699 шекелей в месяц');
        title.text('Toyota Yaris Hibrid');
        description.text('Этот автомобиль заряжает энергией города! Он тихий и умный, легкий и надежный! Путешествуйте по городу на электричестве до 50% всего времени в пути без подзарядки — начните ездить по-новому! ')
      }
      else if(y.hasClass('c-hr')){
        price.text('От 1199 в месяц');
        title.text('Toyota C-HR Hibrid');
        description.text('Оригинальный, яркий и смелый кроссовер Toyota C-HR Hybrid, безусловный «хит» на дорогах Израиля. Toyota C-HR построен на основе уникальной модульной архитектуры TNGA — это новейший подход инженеров Toyota, позволяющий создавать более комфортные, управляемые и безопасные автомобили с ярким, экспрессивным дизайном.')
      }
      else if(y.hasClass('corolla')){
        price.text('От 1299 шекелей в месяц');
        title.text('Toyota Corolla Hibrid');
        description.text('Стремительный дизайн, уникальные для своего класса опции, высокий уровень исполнения, а также азартная динамика и управляемость, делают Toyota Corolla Hibrid лучшим седаном в своем классе.')
      } else{
        price.text('Цену новинки уточняйте у наших операторов.');
        title.text('Toyota C-HR Hibrid 2020');
        description.text('Еще ярче, еще лучше и еще технологичнее! Топ-версия Toyota C-HR Hibrid 2020 будет выдавать показатель в 184 лошадиных силы, а также отличаться более спортивными настройками подвески. Изменения коснуться внешнего вида, усовершенствована медиасистема с 8-дюймовым экраном, серьезно улучшена шумоизоляция. Первые автомобили уже в пути!')
      }
    })
    

    
});