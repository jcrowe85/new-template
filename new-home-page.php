<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>   
<script>
$(document).ready(function(){
    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
});
</script>
<style>
#new-home-page .header{
    background-color: transparent;
}
#new-home-page .navbar a:visited {
    text-shadow: 0.5px 0.5px 0px rgba(0,0,0,1);
}
#new-home-page .navbar a:link {
    text-shadow: 0.5px 0.5px 0px rgba(0,0,0,1);
}
#new-home-page .main{
    background: -webkit-linear-gradient(141deg, #83a9fa, #ff9897);
    background: -moz-linear-gradient(141deg, #83a9fa, #ff9897);
    background: -o-linear-gradient(141deg, #83a9fa, #ff9897);
    background: linear-gradient(141deg, #83a9fa, #ff9897);    
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
            <div class="container" style="height:1000px;">
                <div class="row" style="padding:0px;">
                    
                    <div class="col-md-7">
                        <div class="title">
                            <h1>Get the Insurance <br> Every Household Needs</h1>
                            <span>No salesman. No broker fees. Affordable plans. 100s of carriers.</span>
                        </div>                        
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
