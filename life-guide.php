<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>   
    <body id="lifeguide-page">
        <?php include_once('header.php') ?>
                <div class="container">
                    <div class="row guide">
                        <div class="title">
                            <h2>A Guide to Buying Life Insurance</h2>
                        </div>
                        <div class="about">
                            <h4 style="margin-bottom:25px">What to Consider</h4>
                             
                            <h5>Coverage Amounts and for How Long</h5>
                            <p>
                            You need to figure out how much coverage you need, as with any insurance, you don't want to over-insure yourself because you'll be paying a higher premium. On the other hand, you don't want to under-insure yourself because it's the cheapest thing available to you.
                            Luckily for you we have a needs analysis calculator that will help you determine if you need term or permanent life insurance and how much you need of each.
                            </p>
                            <h5>Comparing Quotes</h5>
                            <p>
                            So you know the amount you need, but which insurance carrier should you choose? We made the job easier for you by only including companies that have strong financial ratings and a good history. It's important for us at Usurit to make sure that you aren't with a fly by night company, but are still getting great prices.
                            <p>
                            Sometimes the cheapest quote may not be the strongest company, and sometimes the difference between a company that has a Comdex at 93 versus at 90 is negligible.
                            We recommend that you go to our insurance company overview page, from there you'll find out how fast they are throughout the entire process, but more importantly, what medical conditions they favor. Certain medical conditions are treated favorably with one company over another company.
                            </p>
                            <p>
                            One last note, we know that people like to visit other sites before making a decision, but you should be wary of any sites that ask for your phone number before showing you the quote. Only because those sites won't allow you to finish the process, but instead forward you to an agent who will either try to sit down with you in person or finish the process over the phone. 
                            </p>
                            </p>
                            <h5>Completing the Application</h5>
                            <p>
                            So you've made your choice of what policy and which company. How long is the application phase? It's in three parts.
                            </p>
                            
                            <h5>1st Part</h5>
                            <p>The application itself take around 20-30 minutes. We'll need to know your primary care physician (if you have one) and their office address. You'll need your driver's license and social security number. Other than that, we'll be asking basic questions about income and who the beneficiaries are. Afterwards, we'll be asking when is the best time for the medical underwriters to get in touch with you to do the phone interview and the medical test (urine and blood).</p>
                            
                            <h5>2nd Part</h5>
                            <p>Within 48 hours from submitting your application, you should receive a call from the medical underwriters. They'll ask you similar questions to the application, so have that information on hand, such as your personal physician. But they'll also ask you questions about your medical history. This should not take longer than 20 minutes if you are in good health, but if you have had health issues this could go up to 30 minutes.</p>
                            <h5>3rd Part (Final)</h5>
                            <p>The last part is for a paramedical technician to come to your home or workplace to take a blood and urine sample. They'll also be measuring your height, weight, and blood pressure.</p>
                            <h5>Here are some helpful hints for your medical exam to get the best results:</h5>
                            <p>- Avoid any caffeine, sugar, or alcohol 24 hours prior to the exam</p>
                            <p>- We recommend that you take the test first thing in the morning, or to not eat or exercise strenuously 6-8 hours before the test.</p>
                            <p>- We do recommend drinking water at least 1 hour before your exam</p>
                        </div>
                    </div>
                </div>
            <div class="get-started fluid" style="clear:both;">
                <div class="container">
                    <div class="row">
                        <form name="" id="myForm">
                            <select name="menu" id="menu">
                                <option value="/life.php" selected="selected">Life Insurance</option>
                                <option value="" data-popup-open="popup-1">Health Insurance</option>
                                <option value="" data-popup-open="popup-1">Home Insurance</option>
                                <option value="" data-popup-open="popup-1">Auto Insurance</option>
                                <option value="" data-popup-open="popup-1">Disability Insurance</option>
                            </select>
                            <button type="button" onClick="getStarted();" class="buttonSpl getStarted btn">Get Started</button>
                        </form>                 
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

