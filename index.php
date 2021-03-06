<?php include_once('head.php') ?>   
<script>
$(window).load(function(){
    
    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    // demo video popup ! do not add to main.js
      jQuery(function(){
          jQuery("a.bla-1").YouTubePopUp();
          jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
      });    
});    
</script>
    <body id="new-home-page">
    <?php include_once('header.php') ?>      
        <div class="banner fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h1>Protect Your Family with Affordable Life Insurance</h1>
                            <p> No salesman. No broker fees. Affordable plans. 100s of carriers.</p>
                        </div>  
                        <div class="get-started">
                            <form name="" id="myForm" class="myForm">
                                <select name="menu" id="menu" style="display:none;">
                                    <option value="/life.php" selected="selected">Life Insurance</option>
                                    <option style="background-color:#808080;" value="/life.php">$50,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$75,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$100,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$125,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$150,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$175,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$200,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$225,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$250,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$300,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$350,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$400,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$450,000</option>
                                    <option style="background-color:#808080;" selected="selected" value="/life.php">$500,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$550,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$600,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$650,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$700,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$750,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$800,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$900,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$1,000,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$1,100,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$1,250,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$1,500,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$1,750,000</option>
                                    <option style="background-color:#808080;" value="/life.php">$2,000,000</option>
                                    <option value="" data-popup-open="popup-1">Health Insurance</option>
                                    <option value="" data-popup-open="popup-1">Home Insurance</option>
                                    <option value="" data-popup-open="popup-1">Auto Insurance</option>
                                    <option value="" data-popup-open="popup-1">Disability Insurance</option>
                                </select>
                                <button type="button" onClick="getStarted();" class="btn" style="">Start a quote</button>
                            </form>                               
                        </div>
                    </div>
                    <figure class="col-md-5 col-md-offset-1 phone">
                        <img src="/images/tilt-phone-new-layout.png"></img>
                        <video class="ui" autoplay="" preload="metadata" muted="" loop="" style="">
                        <source src="/mobile-quote-life-new-layout.mp4" type="video/mp4">
                    </figure>                        
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
                            <p>Complete a 1 minute survey and get a quote. Your name and email are <u>not</u> required.</p>
                        </div>
                        <div class="proc">
                            <img src="/images/carrier.png" alt="">
                            <h3>Carrier</h3>
                            <p>Review, compare, and select a top-rated carrier.</p>
                        </div>
                        <div class="proc">
                            <img src="/images/application.png" alt="">
                            <h3>Application</h3>
                            <p>Complete a simple application in 5 minutes or less.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="manage fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 manage-title">
                            <h2>Manage Your Polices in One Place</h2>
                            <p>Log in to access your policies in one place. You can view policy details and contact your insurance consultant with questions or concerns.</p>
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
