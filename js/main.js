// run when dom ready
$(document).ready(function(){
        //home page: animate banner title and phone
    $('.title h1').delay(1000).animate({
        opacity: 1,
        top: "0",
    }, 500, function(){
        $('.title p').animate({
            opacity: 1,
            top: "0px",
        }, 500, function(){
            $('.get-started').animate({
                opacity: 1,
                top: "0px",
            }, 500, function(){
                $('.phone').animate({
                    opacity: 1,
                    left: "0px"
                }, 500, function(){}
                );                
            });            
        });
    });  
    //home page: scroll page to section when menu item is clicked
    $( "#contact" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".footer").offset().top - 60},
        'slow');
    });
    
    $( "#downArrow" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".why-us").offset().top - 60},
        'slow');
    });
    $(".life").click(function() {
      window.location = $(this).find("a").attr("href"); 
      return false;
    });
  
  
  // set sidebar height to main container height on load
    if($(window).width() >= 992){
    // set sidebar height to main height
    var height = $('.main').outerHeight()
    $('.sidebar').css("height", height);  
    
    $(window).resize(function(){
        var height = $('.main').outerHeight()
        $('.sidebar').css("height", height);    
    });    
    }  
  
  // set sidebar height to main container height on resize
  $(window).resize(function(){
    if($(window).width() >= 992){
    // set sidebar height to main height
    var height = $('.main').outerHeight()
    $('.sidebar').css("height", height);  
    
    $(window).resize(function(){
        var height = $('.main').outerHeight()
        $('.sidebar').css("height", height);    
    });    
    }
  });

  // submit form when seleting product on mobile screen
  $('.mobile-primary-quote').click(function(){
      $(this).find(".mobile1").submit()
      });  
  $('.mobile-secondary-quote').click(function(){
      $(this).find(".mobile2").submit()
      });  
      
    // add white background if mobile menu is collapsed
    $(".navbar-toggle").click(function(){
            $(".navbar a:link").css("color", "black");
            $(".logo span").css("color", "black");
            $(".logo img").attr("src", "/images/logo-red.png"); 
            $(".header").css("background", "rgba(255, 255, 255, 1)");
            $(".navbar-toggle").css("border", "1px solid #e92730");
            $(".navbar-toggle span").css("background", "#e92730");
            
            
         if ($('.navbar-toggle').attr('aria-expanded') === "true") {
            $("#new-home-page .header").css("background", "transparent");
            $(".navbar a:link").css("color", "white");
            $(".logo span").css("color", "white");
            $(".logo img").attr("src", "/images/logo.png"); 
            $(".navbar-toggle").css("border", "1px solid white");
            $(".navbar-toggle span").css("background", "white");
        } 
            
    });     
    
    
    // remove phone video on mobile
    if ($(window).width() <= 768){
        $('.ui').remove();
    };              
    
    
    
    
// end document ready      
});

// load on window scroll
$(window).scroll(function() {
    
    // animate sections for phones
    if ($(this).width() <= 414) {
            if ($(this).scrollTop() > 700) {
                $('.proc:eq(0)').animate({
                    opacity: 1
                }, 1000, function(){
                    $('.proc:eq(1)').animate({
                        opacity: 1
                    }, 1000, function(){
                        $('.proc:eq(2)').animate({
                                opacity: 1
                            }, 1000, function(){}
                        );                    
                    }   
                    );                   
                }
                );
            }if ($(this).scrollTop() > 1700) {
                $('.manage-title').animate({
                    opacity: 1,
                    left: 0
                }, 1000, function(){}
                );
                $('.manage-image').animate({
                    opacity: 1,
                    top: 0
                }, 1000, function(){}
                ); 
            }if ($(this).scrollTop() > 2200) {
                $('.quest').animate({
                    opacity: 1,
                }, 1000, function(){}
                );
            }
    }
    
    // animate sections for ipads and tablets 1025x768 and 768x1024
    if ($(this).width() > 414 && $(this).width() <= 768) {
            if ($(this).scrollTop() > 200) {
                $('.proc:eq(0)').animate({
                    opacity: 1
                }, 600, function(){
                    $('.proc:eq(1)').animate({
                        opacity: 1
                    }, 600, function(){
                        $('.proc:eq(2)').animate({
                                opacity: 1
                            }, 600, function(){}
                        );                    
                    }   
                    );                   
                }
                );
            }if ($(this).scrollTop() > 1300) {
                $('.manage-title').animate({
                    opacity: 1,
                    left: 0
                }, 1000, function(){}
                );
                $('.manage-image').animate({
                    opacity: 1,
                    top: 0
                }, 1000, function(){}
                ); 
            }if ($(this).scrollTop() > 1800) {
                $('.quest').animate({
                    opacity: 1,
                }, 1000, function(){}
                );
            }
    }else if ($(window).width() > 768 && $(window).width() <= 1024){
                if ($(this).scrollTop() > 400) {
                    $('.proc:eq(0)').animate({
                        opacity: 1
                    }, 600, function(){
                        $('.proc:eq(1)').animate({
                            opacity: 1
                        }, 600, function(){
                            $('.proc:eq(2)').animate({
                                    opacity: 1
                                }, 600, function(){}
                            );                    
                        }   
                        );                   
                    }
                    );
                }if ($(this).scrollTop() > 900) {
                    $('.manage-title').animate({
                        opacity: 1,
                        left: 0
                    }, 1000, function(){}
                    );
                    $('.manage-image').animate({
                        opacity: 1,
                        top: 0
                    }, 1000, function(){}
                    ); 
                    }if ($(this).scrollTop() > 1300) {
                    $('.quest').animate({
                        opacity: 1,
                    }, 1000, function(){}
                    );
                }
            }    
    // animate sections for desktops            
        if ($(this).width() > 1200) {
                if ($(this).scrollTop() > 400) {
                    $('.proc:eq(0)').animate({
                        opacity: 1
                    }, 700, function(){
                        $('.proc:eq(1)').animate({
                            opacity: 1
                        }, 700, function(){
                            $('.proc:eq(2)').animate({
                                    opacity: 1
                                }, 700, function(){}
                            );                    
                        }   
                        );                   
                    }
                    );
                }if ($(this).scrollTop() > 1000) {
                    $('.manage-title').animate({
                        opacity: 1,
                        left: 0
                    }, 1000, function(){}
                    );
                    $('.manage-image').animate({
                        opacity: 1,
                        top: 0
                    }, 1000, function(){}
                    ); 
                }if ($(this).scrollTop() > 1600) {
                    $('.quest').animate({
                        opacity: 1,
                    }, 1000, function(){}
                    );
                }
        } 
        
    //home page: menu background color change with page scroll
    if($(this).scrollTop() != 0 && $('.navbar a').css('color') != 'rgb(0, 0, 0)'){
    
       $("#new-home-page .header").fadeOut(function(){
            $(".navbar a:link").css("color", "black");
            $(".logo span").css("color", "black");
            $(".logo img").attr("src", "/images/logo-red.png"); 
            $(".header").css("background", "rgba(255, 255, 255, 1)");
            $(".header").slideDown("fast");
            $('.navbar-toggle').css("border", "1px solid #e92730");
            $('.navbar-toggle span').css("background", "#e92730");
       }); 
       
    }else if($(this).scrollTop() == 0 && $('.navbar a').css('color') == 'rgb(0, 0, 0)'){
       $('#new-home-page .header').slideUp(function(){
            $(".navbar a:link").css({'color' : 'white'});
            $(".logo span").css("color", "white");
            $(".logo img").attr("src", "/images/logo.png");     
            $(".header").css("background", "rgba(0, 0, 0, 0)");
            $('.navbar-toggle').css("border", "1px solid #fff");
            $('.navbar-toggle span').css("background", "#fff");
            $('.header').fadeIn();
       });         
    }    
    
});



// home page: load when window resize
$(window).resize(function(){
    //remove video if screen size is less than 992px
        if($(window).width() <= 992){
        $('.ui').hide();
    }if($(window).width() >= 992){
        $('.ui').show();
    }
});


// get help button display chat box

function getHelp(){
    $(this).click(function() {
        !function() {
          var t;
          if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
          t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
          t.factory = function(e) {
            return function() {
              var n;
              return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
            };
          }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
          }), t.load = function(t) {
            var e, n, o, i;
            e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
            n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
          });
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('kbvzw3nrnp5s');

    });
}

function getStarted(){
    var x = document.getElementById("menu");
    var y = x.options[x.selectedIndex].value;
    if (y != ""){
    window.document.location.href=(y);
    }
    else{
       var targeted_popup_class = jQuery('[data-popup-open]').attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350); 
    }
} 


$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

        e.preventDefault();
    });

    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        e.preventDefault();
    });
});

$('.navTrigger').click(function(){
  $(this).toggleClass('active');
});
