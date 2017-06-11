<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>   
<script>
$(window).load(function(){
    
    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
    
    // animate banner title and phone
    $('.title h1').animate({
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
            }
            );            
        });
    });
    
    // remove phone video on mobile
    if ($(window).width() <= 768){
        $('.ui').remove();
    }       
    
    // demo video popup
      jQuery(function(){
          jQuery("a.bla-1").YouTubePopUp();
          jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
      });    

    
    
});


// menu background color change with page scroll
$(window).scroll(function() {
    if($(this).scrollTop() != 0 && $('.navbar a').css('color') != 'rgb(0, 0, 0)'){
    
       $(".header").fadeOut(function(){
            $(".navbar a:link").css("color", "black");
            $(".logo span").css("color", "black");
            $(".logo img").attr("src", "/images/logo-red.png"); 
            $(".header").css("background", "rgba(255, 255, 255, 1)");
            $(".header").slideDown("fast");
       }); 
       
    }else if($(this).scrollTop() == 0 && $('.navbar a').css('color') == 'rgb(0, 0, 0)'){
       $('.header').slideUp(function(){
            $(".navbar a:link").css({'color' : 'white'});
            $(".logo span").css("color", "white");
            $(".logo img").attr("src", "/images/logo.png");     
            $(".header").css("background", "rgba(0, 0, 0, 0)");
            $('.header').fadeIn();
       });         
    }
});

// animate sections for phones
$(window).scroll(function() {
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

    
});

// animate sections for ipads and tablets 1025x768 and 768x1024
$(window).scroll(function() {
    if ($(this).width() > 414 && $(this).width() < 768) {
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
            }if ($(this).scrollTop() > 1800) {
                $('.quest').animate({
                    opacity: 1,
                }, 1000, function(){}
                );
            }
    }else if ($(window).width() >= 768 && $(window).width() <= 1024){
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
                }if ($(this).scrollTop() > 1100) {
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
                }if ($(this).scrollTop() > 1700) {
                $('.quest').animate({
                    opacity: 1,
                }, 1000, function(){}
                );
            }
            }
});

// animate sections for desktops
$(window).scroll(function() {
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
});
 
</script>
    <body id="new-home-page">
        <div class="header navbar-fixed-top fluid">
            <div class="container">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="/"><img src="/images/logo.png" alt="">
                        <span>Usurit</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <nav class="navbar navbar-static-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a id="whyus" href="/index.php">Home</a></li>
                                    <li><a id="whyus" href="/why-usurit.php">Why Usurit?</a></li>
                                    <li class="dropdown"><a id="guide" href="#">Insurance Guides</a>
                                      <div class="dropdown-content">
                                        <a href="/guide-life.php">Life Insurance</a>
                                        <a href="/guide-health.php">Health Insurance</a>
                                      </div>        
                                     </li>
                                    <li><a id="about" href="#">About Us</a></li>
                                    <li><a id="about" href="/team.php">Team</a></li>
                                    <li><a id="contact" href="#">Contact</a></li>
                                    <li id='getHelp'><button class="btn getHelp" onClick="getHelp()" style="color:white;">Get Help</button></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>        
        <div class="banner fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h1>Get the Insurance <br> Every Household Needs</h1>
                            <p> No salesman. No broker fees. Affordable plans. 100s of carriers.</p>
                        </div>  
                        <div class="get-started">
                            <form name="" id="myForm" class="myForm">
                                <select name="menu" id="menu">
                                    <option value="/life.php" selected="selected">Life Insurance</option>
                                    <option value="" data-popup-open="popup-1">Health Insurance</option>
                                    <option value="" data-popup-open="popup-1">Home Insurance</option>
                                    <option value="" data-popup-open="popup-1">Auto Insurance</option>
                                    <option value="" data-popup-open="popup-1">Disability Insurance</option>
                                </select>
                                <button type="button" onClick="getStarted();" class="btn" style="">Go</button>
                            </form>                               
                        </div>
                    </div>
                    <figure class="col-md-5 col-md-offset-1 phone">
                        <img src="/images/tilt-phone.png"></img>
                        <video class="ui" autoplay="" preload="metadata" muted="" loop="" style="">
                            <source src="/mobile-life-quote2.mp4" type="video/mp4">
                        </video>                        
                    </div>
                </div>
            </div> 
            </div>
            <div class="container">
                <div class="row how-it-works">
                    <h2>How it works</h2>
                    <div><a class="bla-1" href="https://youtu.be/Fv8yOkpcQ_o">See Demo <img src="/images/playbutton.png" class="play"></img></a></div>
                    <div class="process" style="margin-top:50px;">
                        <div class="proc">
                            <img src="/images/survey.png" alt="">
                            <h3>Quote</h3>
                            <p>Complete a 1 minute survey and get a quote. Name or Email not required.</p>
                        </div>
                        <div class="proc">
                            <img src="/images/carrier.png" alt="">
                            <h3>Carrier</h3>
                            <p>Select a carrier from 100s of our top-rated, hand selected list.</p>
                        </div>
                        <div class="proc">
                            <img src="/images/application.png" alt="">
                            <h3>Application</h3>
                            <p>Complete a simple application in less than 5 minutes and you're done!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="manage fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 manage-title">
                            <h2>Manage Your Polices in One Place</h2>
                            <p>Log in to access your policies in one place. You can policies details and contact your advisor for any questions or concerns you might have.</p>
                        </div>
                        <div class="col-md-6 manage-image">
                            <img src="/images/dashboard.png" style="width:100%;"></img>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('_questions.php'); ?>
        <!-- services popup -->
        <div class="popup" data-popup="popup-1">
            <div class="popup-inner">
                <h2 style="">We're Only Offering <u>Life Insurance</u> Quotes at this Time.</h2>
                <h5 style="color:gray;">Let's Refer You to One of Our Partners.</h5>
                <p>
                    Although we're only offering life insurance at this time, you can head over to one of our trusted partners to get a quote.
                    By clicking 'Leave Site' we'll forward you to their website to get the quote. By pressing 'Stay Here' we'll take you back to our site.
                    <div>
                    <button class="btn btn-warning btn-lg" data-popup-close="popup-1">Stay Here</button>    
                    <button class="btn btn-default btn-lg">Leave Site</button>
                    </div>
                </p>
                <a class="popup-close" data-popup-close="popup-1" href="#" style="color:white;">x</a>
            </div>
        </div>          
<?php include_once('footer.php') ?>
