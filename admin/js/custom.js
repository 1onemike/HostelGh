/** 
 
  Custom JS
  

  1. FIXED NAVBAR 
  2. AGENTS SLIDER
  3. TESTIMONIAL SLIDER  
  4. CLIENT BRAND SLIDER (SLICK SLIDER)
  5. TOP SLIDER (SLICK SLIDER)
  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
  7. HOVER DROPDOWN MENU
  8. ADVANCE SEARCH FILTER  (noUiSlider SLIDER)
  9. MIXIT FILTER ( FOR GALLERY ) 
  10. FANCYBOX ( FOR PORTFOLIO POPUP VIEW )
  11. SCROLL TOP BUTTON
  12. PRELOADER
  13. GRID AND LIST LAYOUT CHANGER 
  14.RELATED ITEM SLIDER (SLICK SLIDER)

  
**/

jQuery(function($){


  /* ----------------------------------------------------------- */
  /*  1. FIXED NAVBAR 
  /* ----------------------------------------------------------- */
    
    
  
  
  /* ----------------------------------------------------------- */
  /*  2. AGENTS SLIDER
  /* ----------------------------------------------------------- */    

   

  /* ----------------------------------------------------------- */
  /*  3. TESTIMONIAL SLIDER 
  /* ----------------------------------------------------------- */    

   
  /* ----------------------------------------------------------- */
  /*  4. CLIENT BRAND SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */  

  
  /* ----------------------------------------------------------- */
  /*  5. TOP SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

   
  /* ----------------------------------------------------------- */
  /*  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */      

    jQuery('.aa-properties-details-img').slick({
      dots: false,
      infinite: true,
      arrows: true,
      speed: 500,      
      cssEase: 'linear'
    });

      
  /* ----------------------------------------------------------- */
  /*  7. HOVER DROPDOWN MENU
  /* ----------------------------------------------------------- */ 
  
  
 
  /* ----------------------------------------------------------- */
  /* 8. ADVANCE SEARCH FILTER  (noUiSlider SLIDER)
  /* ----------------------------------------------------------- */        

   

        // FOR PRICE SECTION

      
  /* ----------------------------------------------------------- */
  /*  9. MIXIT FILTER ( FOR GALLERY ) 
  /* ----------------------------------------------------------- */  

    jQuery(function(){
      jQuery('#mixit-container').mixItUp();
    });

  /* ----------------------------------------------------------- */
  /*  10. FANCYBOX ( FOR PORTFOLIO POPUP VIEW ) 
  /* ----------------------------------------------------------- */ 
      
    jQuery(document).ready(function() {
      jQuery(".fancybox").fancybox();
    });  
   
    
  /* ----------------------------------------------------------- */
  /*  11. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button
  
  /* ----------------------------------------------------------- */
  /*  12. PRELOADER
  /* ----------------------------------------------------------- */

   


  /* ----------------------------------------------------------- */
  /*  13. GRID AND LIST LAYOUT CHANGER 
  /* ----------------------------------------------------------- */

  jQuery("#aa-list-properties").click(function(e){
    e.preventDefault(e);
    jQuery(".aa-properties-nav").addClass("aa-list-view");
  });
  jQuery("#aa-grid-properties").click(function(e){
    e.preventDefault(e);
    jQuery(".aa-properties-nav").removeClass("aa-list-view");
  });


  /* ----------------------------------------------------------- */
  /*  14. RELATED ITEM SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */      

    jQuery('.aa-related-item-slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    }); 

 
});

