$(function(){
   var mobIcon = $(".mobIcon"),
   	   headerMenu = $('.header__menu'),
   	   partner = $('.partnerLink'),
       linkHidden = $('.link-hidden');

   mobIcon.on("click",function(){
   		headerMenu.slideToggle();
   })

   partner.on("click",function(e){
        e.preventDefault();
        var linkThis = $(this);
        new Clipboard('.partnerLink', {
          text: function() {
            return linkThis.html();
          }
        });
        alert('Link affiliate copied');
    });

      linkHidden.on("click",function(e){
        e.preventDefault();
        var linkThis = $(this);
        new Clipboard('.link-hidden a', {
          text: function() {
            return linkThis.html();
          }
        });
        alert('Link affiliate copied');
    });

});