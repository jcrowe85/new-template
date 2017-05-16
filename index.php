<?php include_once('head.php') ?>   
<script>
$(document).ready(function(){

    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
    // get help button display chat box
    
    $('.getHelp').click(function() {
        <?php include_once('chat.php') ?>
    });

    $(".serv").click(function() {
      window.location = $(this).find("a").attr("href"); 
      return false;
    });
});
</script>
    <body id="home-page">
        <div class="header fluid">
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
                                    <li><a href="index.php">Why Usurance?</a></li>
                                    <li><a href="about.php">Insurance Guides</a></li>
                                    <li><a href="#portfolio">About Us</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <button class="btn btn-primary getHelp">Get Help</button>                                    
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
                <div class="c-logo"><img src="/images/down-arrow.png" alt=""></div>
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
                        <button type="button" onClick="getStarted();" class="getStarted btn"><h3 style="margin:0px;">Get Started</h3></button>
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <ul>
                            <li class="faq">
                                <div><h5>How does it work?</h5></div>                                     
                                <div><input type="button" class="answer-button" alt=""></div>
                            </li>
                            <div class="answer">
                                This is further information pertaining to the question. 
                                This is further information pertaining to the question.
                            </div>
                            <li class="faq">
                                <div><h5>How does it work?</h5></div>                                     
                                <div><input type="button" class="answer-button" alt=""></div>
                            </li>
                            <div class="answer">
                                This is further information pertaining to the question. 
                                This is further information pertaining to the question.
                            </div>      
                            <li class="faq">
                                <div><h5>How does it work?</h5></div>                                     
                                <div><input type="button" class="answer-button" alt=""></div>
                            </li>
                            <div class="answer">
                                This is further information pertaining to the question. 
                                This is further information pertaining to the question.
                            </div> 
                            <li class="faq">
                                <div><h5>How does it work?</h5></div>                                     
                                <div><input type="button" class="answer-button" alt=""></div>
                            </li>
                            <div class="answer">
                                This is further information pertaining to the question. 
                                This is further information pertaining to the question.
                            </div>  
                        </ul>
                            <script>
                            $(document).ready(function(){
                                $('.answer-button').on("click", function(e) {
                                  e.preventDefault();
                                  $(this).parent().parent().next().slideToggle();
                                });                                
                            });
                     </script>                        
                    </div>
                </div>
            </div>
        </div>
<?php include_once('footer.php') ?>