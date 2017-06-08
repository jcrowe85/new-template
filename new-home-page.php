<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>   
<script>
$(document).ready(function(){
    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
    $('.title').fadeIn('slow');
    
    
    
    
});


// slide navbar up and down on page scroll
$(window).scroll(function() {
    if($(this).scrollTop() != 0 && $('.navbar a').css('color') != 'rgb(0, 0, 0)'){
    
       $(".header").slideUp(function(){
            $(".navbar a:link").css("color", "black");
            $(".logo span").css("color", "black");
            $(".logo img").attr("src", "/images/logo-red.png"); 
            $(".header").css("background", "rgba(255, 255, 255, 1)");
            $(".header").slideDown();
       }); 
       
    }else if($(this).scrollTop() == 0 && $('.navbar a').css('color') == 'rgb(0, 0, 0)'){
       $('.header').slideUp(function(){
            $(".navbar a:link").css({'color' : 'white'});
            $(".logo span").css("color", "white");
            $(".logo img").attr("src", "/images/logo.png");     
            $(".header").css("background", "rgba(0, 0, 0, 0)");
            $('.header').slideDown();
       });         
    }
});
</script>
<style>
#new-home-page .header{
    background:rgba(0, 0, 0, 0);
    display:inline-block;
    
}
#new-home-page .navbar a:visited {
    /*text-shadow: 0.5px 0.5px 0px rgba(0,0,0,1);*/
}
#new-home-page .navbar a:link {
    /*text-shadow: 0.5px 0.5px 0px rgba(0,0,0,1);*/
}
#new-home-page .navbar a:hover {
    color:black;
}
#new-home-page .main{
    background: -webkit-linear-gradient(141deg, #6293fc, #ff9897);
    background: -moz-linear-gradient(141deg, #6293fc, #ff9897);
    background: -o-linear-gradient(141deg, #6293fc, #ff9897);
    background: linear-gradient(141deg, #6293fc, #ff9897);    
}
#new-home-page .title{
    color:white;
    /*text-shadow: 1px 1px 0px rgba(0,0,0, 0.2);*/
}
#new-home-page .main .container{
    padding-top: 100px;
    padding: 100px 50px;
    display:flex;
    align-items: center;
    justify-content: center;
}
#new-home-page .title h1{
    font-size: 3.5em;
}
#new-home-page .phone img{
    width:60%;
}
#new-home-page .get-started{
    background: none;
    margin-top:5%;
    padding:0px;
    text-align: left;
}
#new-home-page .get-started select{
    padding: 8px;
    border-radius: 5px;
    margin:0px;
    background: url(/images/dropdown-arrow-home-page.png) 96% / 10% no-repeat #fff;
    margin-right:10px;
}
#new-home-page .banner{
    display: flex; 
    align-items: center; 
    justify-content: center;
}
#new-home-page #myForm{
    display: flex; 
    align-items: center; 
}
.myForm button{
    background:red; 
    color:white;
    padding:15px;
    border-radius: 5px;
}
#new-home-page .header{
    padding-top:0px;
}
#new-home-page .dropdown-content {
    background-color: rgba(255,255,255,.8);
}
#new-home-page .dropdown-content a{
    color:black;
}
#new-home-page .title h1{
    display:hidden;
}
</style>
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
                <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
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
                                    <li id='getHelp'><button class="btn btn-primary getHelp" onClick="getHelp()">Get Help</button></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>        
        <div class="main fluid">
            <div class="container">
                <div class="row banner">
                    <div class="col-md-7">
                        <div class="title">
                            <h1>Get the Insurance <br> Every Household Needs</h1>
                            <p style="width:50%;">No salesman. No broker fees. Affordable plans. 100s of carriers.</p>
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
                    <div class="col-md-5 phone">
                        <img src="/images/tilt-phone.png"></img>
                    </div>
                    
                    
                    
                </div>
            </div>
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
