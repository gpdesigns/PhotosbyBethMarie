$(window).load(function(){ 
  
    var $container = $('.portfolio'); 
    $container.isotope({ 
        filter: '*', 
        animationOptions: { 
            duration: 750, 
            easing: 'linear', 
            queue: false, 
        } 
    }); 
  $('#sidebar-wrapper ul a').click(function(){ 
          var selector = $(this).attr('data-filter'); 
          $container.isotope({ 
              filter: selector, 
              animationOptions: { 
                  duration: 750, 
                  easing: 'linear', 
                  queue: false, 
              } 
          }); 
        return false; 
      }); 
});