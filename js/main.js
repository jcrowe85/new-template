$(document).ready(function(){
  
  
  
    //move to section on click 
    
      // $( "#whyus" ).click(function() {
    //     $('html,body').animate({
    //         scrollTop: $(".why-us").offset().top - 60},
    //     'slow');
    // });
    
    $( "#guide" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".footer").offset().top - 60},
        'slow');
    });
    
    // $( "#about" ).click(function() {
    //     $('html,body').animate({
    //         scrollTop: $(".team").offset().top - 60},
    //     'slow');
    // });
    
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
  
  $('.mobile-primary-quote').click(function(){
      $(this).find(".mobile1").submit()
      });  
  $('.mobile-secondary-quote').click(function(){
      $(this).find(".mobile2").submit()
      });  
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
