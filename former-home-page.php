<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>   
<script>
$(document).ready(function(){
    

    // $(document).scroll(function(){
    //     console.log($(document).scrollTop())
    // });
    
    // $(document).scroll(function() {
    // if ($(window).width() > 549) {
    //     if($(window).scrollTop() > 60) {
            
    //      firstAnimation();
         
    //     }
        
    // }
   
    // });
    // var firstAnimation = function () {
    //     $('.features').show();
    //     $('.features .feat').each(function(){
    //         function(){
    //             $(this).show().delay(500).animate({
    //                 opacity: 1;
    //             })
    //         });


    // }
    
    
    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
});
</script>
    <body id="home-page">
        <?php include_once('header.php') ?>
        <div class="main fluid">
            <div class="container">
                <div class="row" style="padding:0px;">
                    <div class="title">
                        <h1>Get the Insurance <br> Every Household Needs</h1>
                        <span>No salesman. No broker fees. Affordable plans. 100s of carriers.</span>
                    </div>
                    <div class="services">
                        <div style="cursor:pointer" class="serv life"><a href="/life.php"><h3>Life</h3></a></div>
                        <div style="cursor:pointer" class="serv" data-popup-open="popup-1"><h3>Health</h3></div>
                        <div style="cursor:pointer" class="serv" data-popup-open="popup-1"><h3>Home</h3></div>
                        <div style="cursor:pointer" class="serv" data-popup-open="popup-1"><h3>Auto</h3></div>
                        <div style="cursor:pointer" class="serv" data-popup-open="popup-1"><h3>Disability</h3></div>                        
                    </div>
                </div>
            </div>
            <div class="carrier-logo">
                <div class="c-logo"><img src="/images/nyl.png" alt=""></div>
                <div class="c-logo"><img src="/images/prudential-white.png" alt=""></div>
                <div class="c-logo"><img src="/images/legal-general.png" alt=""></div>
                <div class="c-logo" id='downArrow'><a href='#'><img src="/images/down-arrow.png" alt=""></a></div>
                <div class="c-logo"><img src="/images/aig.png" alt=""></div>
                <div class="c-logo"><img src="/images/nationwide.png" alt=""></div>
                <div class="c-logo"><img src="/images/paclife.png" alt=""></div>
            </div>        
        </div>
        <?php include_once('_why_us.php'); ?>
        <?php include_once('_how-it-works.php'); ?>
        <?php include('_getstarted.php'); ?>
        <?php include_once('_team.php'); ?>
        <?php include('_getstarted.php'); ?>
        <?php include_once('_blog.php'); ?>
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
