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
        centerPadding: '235px',
        slidesToShow: 2.35,
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
            breakpoint: 768,
            settings:{
              slidesToShow:3,
              centerPadding: '100px',
              infinity: false
            }
          }
        ]
      
    
    })

    
});