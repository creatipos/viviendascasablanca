$('#nav').affix({
      offset: {
        top: $('header').height()
      }


}); 


$('#nav').on('affix.bs.affix', function () {
   $('.navbar-brand').css( "display", "block");
   $('.navbar-form').css( "display", "none");


});

$('#nav').on('affixed-top.bs.affix', function () {
   $('.navbar-brand').css( "display", "none");
    $('.navbar-form').css( "display", "block");
});

$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        
    });
});

   jQuery(function($){
            $("#homeslider").bxSlider({
                controls:true,
                pager:false,
                auto:true                                        
            });
            });

$(document).ready(function(){
    
  var clickEvent = false;
  $('#myCarouselhome').carousel({
    interval:   4000  
  }).on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });
})

$(window).load(function() {
    var boxheight = $('#myCarouselhome .carousel-inner').innerHeight();
    var itemlength = $('#myCarouselhome .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
  $('#myCarouselhome .list-group-item').outerHeight(triggerheight);
});