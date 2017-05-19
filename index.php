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
    
    // get help button display chat box
    
    $('.getHelp').click(function() {
        <?php include_once('chat.php') ?>
    });

    
    $( "#whyus" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".why-us").offset().top - 60},
        'slow');
    });
    
    $( "#guide" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".get-started").offset().top - 60},
        'slow');
    });
    
    $( "#about" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".team").offset().top - 60},
        'slow');
    });
    
    $( "#contact" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".questions").offset().top - 60},
        'slow');
    });
    
    $( "#downArrow" ).click(function() {
        $('html,body').animate({
            scrollTop: $(".why-us").offset().top - 60},
        'slow');
    });


    $(".serv").click(function() {
      window.location = $(this).find("a").attr("href"); 
      return false;
    });
    
});
</script>
    <body id="home-page">
        <div class="header navbar-fixed-top fluid">
            <div class="container">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="/"><img src="/images/logo.png" alt=""></a>
                        <span>Usurance</span>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
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
                                    <li><a id="whyus" href="#">Why Usurance?</a></li>
                                    <li><a id="guide" href="#">Insurance Guides</a></li>
                                    <li><a id="about" href="#">About Us</a></li>
                                    <li><a id="contact" href="#">Contact</a></li>
                                    <li id='getHelp'><button class="btn btn-primary getHelp">Get Help</button></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main fluid">
            <div class="container">
                <div class="row" style="padding:0px;">
                    <div class="title">
                        <h1>Get the Insurance <br> Every Household Needs</h1>
                        <span>No salesman. No broker fees. Affordable plans. 100s of carriers.</span>
                    </div>
                    <div class="services">
                        <div class="serv"><a href="/life.php"><h3>Life</h3></a></div>
                        <div class="serv"><a href="/life.php"><h3>Health</h3></a></div>
                        <div class="serv"><a href="/life.php"><h3>Home</h3></a></div>
                        <div class="serv"><a href="/life.php"><h3>Auto</h3></a></div>
                        <div class="serv"><a href="/life.php"><h3>Disability</h3></a></div>                        
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
        <div class="why-us fluid">
            <div class="container">
                <div class="row">
                    <h2>Why Choose Us?</h2>
                    <div class="features-container">
                        <div class="features">
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b>H</b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/blue-shield.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <span style="display:block;">Blueshield</span>
                                            <span><b>Health Insurance</b></span>
                                            <p style="font-size:10px; color:lightgray">HMO Coverage<p/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b>L</b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/legal-and-general-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <span style="display:block;">Legal & General</span>
                                            <span><b>Life Insurance</b></span>
                                            <p style="font-size:10px; color:lightgray">$100k/30-Year Term<p/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b>R</b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/mercury-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <span style="display:block;">Mercury</span>
                                            <span><b>Renters Insurance</b></span>
                                            <p style="font-size:10px; color:lightgray">$1M Liability<p/>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="feature-details">
                                <h5>All of Your Policies in One Place</h5>
                                <span><a hred="#">Learn more</a></span>
                            </div>                            
                        </div>
                        <div class="features">
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b><i class="fa fa-check" aria-hidden="true"></i></b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/home-purchase-icon-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <p> Purchased<br> a Home</p>
                                            <spa><b></b></spa>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b><i class="fa fa-check" aria-hidden="true"></i></b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/new-baby-icon-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <p>Had a Baby</p>
                                            <spa><b></b></spa>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b><i class="fa fa-check" aria-hidden="true"></i></b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/rip-candle-icon-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <p>Recently Lost<br> a Loved One</p>
                                            <spa><b></b></spa>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="feature-details">
                                <h5>The Right Coverage and Product</h5>
                                <span><a hred="#">Learn more</a></span>
                            </div>                            
                        </div>
                        <div class="features">
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b><i class="fa fa-plus" aria-hidden="true"></i></b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/nationwide-icon-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <span style="display:block;">Nationwide</span>
                                            <span><b>$34.99/mo</b></span>
                                            <p style="font-size:10px; color:lightgray">monthly premium<p/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b><i class="fa fa-plus" aria-hidden="true"></i></b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/prudential-icon-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <span style="display:block;">Prudential</span>
                                            <span><b>$18.12/mo</b></span>
                                            <p style="font-size:10px; color:lightgray">monthly premium<p/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feat">
                                <div class="feat-left">
                                    <h1><b><i class="fa fa-plus" aria-hidden="true"></i></b></h1>
                                </div>
                                <div class="feat-right">
                                    <div class="feat-logo">
                                        <img src="/images/ing-icon-25.png" alt="">
                                    </div>
                                    <div class="feat-right">
                                        <div class="feat-details">
                                            <span style="display:block;">Ing Group</span>
                                            <span><b>$17.55/mo</b></span>
                                            <p style="font-size:10px; color:lightgray">monthly premium<p/>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="feature-details">
                                <h5>Get Quotes from Multiple Carriers</h5>
                                <span><a hred="#">Learn more</a></span>
                            </div>                            
                        </div>                        
                    </div>    
                </div>
            </div>
        </div> 
        <div class="team fluid">
            <div class="container">
                <div class="row">
                    <div class="team-highlights col-md-7">
                    <h2>A Team that Makes <br> the Difference</h2>
                        <ul>
                            <li>
                                <h4><b>We're Licensed Advisors</b></h4>
                                <p>We're a team of licensed advisors set out 
                                to help you get the education you need to buy the 
                                insurance that's right for you.</p>
                            </li>
                            <li>
                        </ul>
                        <ul>
                            <li>
                                <h4><b>Salary Only, No Commissions</b></h4>
                                <p>Receiving a salary and not a commission allows us to focus on what's best for you.</p>
                            </li>
                            <li>
                        </ul>
                        <ul>
                            <li>
                                <h4><b>Understand What You're Buying</b></h4>
                                <p>We make insurance easy throug real life 
                                    examples and visuals so you understand what you 
                                    have and how you're protected.</p>
                            </li>
                            <li>
                        </ul>                        
                    </div>
                    <div class="team-pics col-md-5">
                        <img src="/images/team.png" alt="">
                    </div>
                </div>
            </div>
        </div>  
        <div class="get-started fluid" style="clear:both;">
            <div class="container" style="margin:0 auto;">
                <div class="row">
                    <form name="" id="myForm">
                        <select name="menu" id="menu">
                            <option value="/life.php" selected="selected">Life Insurance</option>
                            <option value="/health">Health Insurance</option>
                            <option value="/life.php">Home Insurance</option>
                            <option value="/life.php">Auto Insurance</option>
                            <option value="/life.php">Disability Insurance</option>
                        </select>
                        <button type="button" onClick="getStarted();" class="buttonSpl getStarted btn">Get Started</button>
                        <script>
                            function getStarted(){
                                var x = document.getElementById("menu");
                                var y = x.options[x.selectedIndex].value;
                                window.document.location.href=(y);
                            }
                        </script>
                    </form>                 
                </div>
            </div>
        </div>
        <div class="blog fluid">
            <div class="container">
                <div class="row">
                    <div class="blog-row">
                        <div class="col-md-6">
                            <div class="title-animate">
                                <img src="/images/blog1.jpg" alt="" />
                                <span class="text" style="">Travel</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-animate blog2">
                                <img src="/images/blog2.jpg" alt="" />
                                <span class="text" style="">Travel</span>
                            </div>
                            <div class="title-animate">
                                <img src="/images/blog3.jpg" alt="" />
                                <span class="text" style="">Travel</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="blog-row">
                        <div class="col-md-12">
                            <div class="title-animate">
                                <img src="/images/blog4.jpg" alt="" />
                                <span class="text" style="">Travel</span>
                            </div>
                        </div>
                    </div> 
                    <div class="blog-row">
                        <div class="col-md-5">
                            <div class="title-animate">
                            <img src="/images/blog5.jpg" alt="" />
                            <span class="text" style="">Travel</span>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="title-animate">
                                <img src="/images/blog6.jpg" alt="" />
                                <span class="text" style="">Travel</span>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
        <div class="questions fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="quest">
                            <li><h3>Questions here?</h3></li>
                            <li>We're here for you.</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> Call us 949.438.3433</li>
                            <li><i class="fa fa-comment" aria-hidden="true"></i> Chat</li>
                            <li>Don't see your question?
                            Not to worry. Just press Chat above,
                            or call us to speak with one of our 
                            helpul licensed insurance advisors.</li>
                            
                        </ul>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <ul>
                            <li class="faq">
                                <div><h5>How do I get started?</h5></div>                                     
                               <i class="fa fa-plus answer-button" aria-hidden="true"></i>
                            </li>
                            <div class="answer">
                            We understand that there's two types of people that go to our site, if you know what you want to buy, 
                            or if you're shopping around and trying to figure out what you need. We recommend that everyone takes 
                            a quick look at our first time insurance buyer guide section. You may learn something you never knew about!
                            </div>
                            <li class="faq">
                                <div><h5>How are you guys different?</h5></div>                                     
                                <i class="fa fa-plus answer-button" aria-hidden="true"></i>
                            </li>
                            <div class="answer">
                            <p>
                            There are a lot of insurance sites out there, but almost all of them will have you talk to an agent, even 
                            if it seems like you can do it all online. We allow all of our users to go through the entire process without 
                            ever talking to an agent (if you don't want to, we do have professionals on standby to help you if you have any questions).
                            </p>
                            <p>
                            We're also a team of former life insurance agents as well as financial advisors. We understand that people have preferences 
                            to buy off certain ideas, whether it's the company, benefits, or price, and we allow everyone to compare and shop from only the most reliable of carriers.    
                            </p>
                            </div>      
                            <li class="faq">
                                <div><h5>How do you make money?</h5></div>                                     
                                <i class="fa fa-plus answer-button" aria-hidden="true"></i>
                            </li>
                            <div class="answer">
                            <p>
                            We're an independent insurance broker, meaning we do get paid a commission by the insurance carrier for each sale. However, 
                            all the prices are the same whether you go directly to the insurance carrier or to us, as those carriers also have agents who 
                            will receive that same commission. So rest assured, you aren’t paying more for our services.
                             
                            Now onto the most common question we get asked if we state that we receive a commission. Are there any conflicts of interest? No,
                            because we don't get paid by any insurance company to represent their products better than any other product on the market. 
                            We give every user the opportunity to buy from whomever they want. We also don’t pressure you into doing anything you're not ready to do.    
                            </p>
                            </div> 
                            <li class="faq">
                                <div><h5> Which companies do you guys work with?</h5></div>                                     
                                <i class="fa fa-plus answer-button" aria-hidden="true"></i>
                            </li>
                            <div class="answer">
                            <p>
                            We work with only companies that have a solid history AND solid financial ratings. We don’t want you to worry that a company doesn't have 
                            enough money to pay claims or goes bankrupt.
                            </p>
                            <p>
                            We also only work with companies that do business through independent brokers. Some companies just aren't competitive in the insurance industry, 
                            but have history on their side. It doesn't benefit their consumers and really only benefits the company. By working with companies that are open to 
                            competing with each other, it brings in better benefits and better prices to you.
                            </p>
                            </div>  
                            <li class="faq">
                                <div><h5>Can we go direct to the insurance carrier for a better price?</h5></div>                                     
                                <i class="fa fa-plus answer-button" aria-hidden="true"></i>
                            </li>
                            <div class="answer">
                                <p>
                                The price of each insurance product already has the commission factored in, and all prices are regulated by your state's department of insurance. 
                                Meaning you could buy it from a large carrier like Prudential, or from an independent agent down the street from "Joe's Tax and Insurance company", 
                                or from us, and still be given the same price from each source.
                                </p>
                                 <p>
                                Be wary though, the base minimum price is the same, but agents can add on riders (extra benefits) that can add an additional cost to the insurance policy.
                                And they can disguise those riders as being required to have.                                
                                </p>
                            </div>  
                            <li class="faq">
                                <div><h5>That's great that this is all online. But what if I have questions that I can't find the answer to?</h5></div>                                     
                                <div><i class="fa fa-plus answer-button" aria-hidden="true"></i></div>
                            </li>
                            <div class="answer">
                                <p>
                                Don't worry. We have a licensed professional ready to help you either through online chat or through calling, 
                                if that's what you're comfortable with. You can email us as well at: contact@usurance.com.
                                </p>
                            </div>  
                        </ul>
                            <script>
                            $(document).ready(function(){
                                $('.answer-button').click(function(){
                                   $('.answer-button').parent().next().slideToggle();
                                });
                            });
                     </script>                        
                    </div>
                </div>
            </div>
        </div>
<?php include_once('footer.php') ?>
