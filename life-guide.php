<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>  
<style type="text/css">
    body{
         color:#4d4d4d;
    }
    ol{
        padding-left: 35px;
    }
    #lifeguide-page h3{
        position: relative;
        font-weight: 600;
        
        display: inline-block;
    }
    .underline{
        margin-bottom:50px;
    }
    .underline:after{
    content: '';
    position: absolute;
    bottom: -2rem;
    left: 50%;
    width: calc(100% + 1.0rem);
    border-bottom: 1px solid #e6e6e6;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    } 
    .riders div:nth-child(n+2){
        margin-bottom:5rem;
    }
    .navbar a:link{
        color:black;
    }
    .navbar a:active{
        color:black;
    }  
    .navbar a:visited{
        color:black;
    }      
    .logo span{
        color:black;
    }
    .header{
        background: white;
    }
    .navbar-toggle{
        border: 1px solid #fff;
    }
    .navbar-toggle span{
        background: #fff;
    }
    .pros{
        margin-bottom:25px;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        align-items: center;
    }
    .cons{
        margin-bottom:25px;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        align-items: center;
    }
    .title{
        margin-top:50px;
        text-align:center; 
        padding: 80px 0px;
    }
    .title h1{
        text-shadow: 1px 1px 1px rgba(0,0,0, 0.5); 
        margin-bottom:25px;
    }
    @media screen and (max-width:768px){
        #lifeguide-page .mod-row {
            margin:0 auto;
            margin-top:100px;
            width:90%;
        }
    }
</style>
<script>
    $(document).ready(function(){
      $(".logo img").attr("src", "/images/logo-red.png");       
    });
</script>
    <body id="lifeguide-page">
        <?php include_once('header.php') ?>
        <div class="container-fluid"  id="title-bg" style="text-align:center;">        
            <div class="title">
                <h1>A Guide to Buying Life Insurance</h1>  
                <!--<h4 style="font-family:'AileronThin'; text-shadow: 1px 1px 1px rgba(0,0,0, 0.5);">This is a short description of ROP This is a short description of ROP This is a short description of ROP</h4>-->
                <form action="/life.php">
                    <button class="btn btn-primary select btn-lg" style="padding: 10px 50px; background:#73a5fb; border:none; box-shadow: 0px 5px 1px rgba(0,0,0,0.5); margin-bottom:10px;">GET QUOTES</button>   
                </form>
                <div><a href="tel:+9494384333" style="text-decoration:underline; color:white; font-family:'AileronThin'; font-size:15px;"><i class="fa fa-phone" aria-hidden="true"></i> Speak with an agent</a></div>
            </div>
        </div>
        <div class="container">
        <div class="row mod-row">
                <div style="text-align:center;">
                    <h3 class="underline">What to Consider</h3>
                </div>
                <h3>Coverage Amounts and for How Long</h3>
                <p>
                  You need to figure out how much coverage you need, as with any insurance, you don't want to over-insure yourself because you'll be paying a higher premium. On the other hand, you don't want to under-insure yourself because it's the cheapest thing available to you. Luckily for you we have a needs analysis calculator that will help you determine if you need term or permanent life insurance and how much you need of each.
                </p>  
                <h3>Comparing Quotes</h3>
                <p>
                    So you know the amount you need, but which insurance carrier should you choose? We made the job easier for you by only including companies that have strong financial ratings and a good history. It's important for us at Usurit to make sure that you aren't with a fly by night company, but are still getting great prices.
                </p>  
                <p>
                    Sometimes the cheapest quote may not be the strongest company, and sometimes the difference between a company that has a Comdex at 93 versus at 90 is negligible. We recommend that you go to our insurance company overview page, from there you'll find out how fast they are throughout the entire process, but more importantly, what medical conditions they favor. Certain medical conditions are treated favorably with one company over another company.    
                </p>
                <p>
                    One last note, we know that people like to visit other sites before making a decision, but you should be wary of any sites that ask for your phone number before showing you the quote. Only because those sites won't allow you to finish the process, but instead forward you to an agent who will either try to sit down with you in person or finish the process over the phone.
                </p>
                <h3>Completing the Application</h3>
                <p>
                    So you've made your choice of what policy and which company. How long is the application phase? It's in three parts.
                </p> 
                <h5>1st Part</h5>
                <p>
                    The application itself take around 20-30 minutes. We'll need to know your primary care physician (if you have one) and their office address. You'll need your driver's license and social security number. Other than that, we'll be asking basic questions about income and who the beneficiaries are. Afterwards, we'll be asking when is the best time for the medical underwriters to get in touch with you to do the phone interview and the medical test (urine and blood).
                </p>
                <h5>2nd Part</h5>
                <p>
                    Within 48 hours from submitting your application, you should receive a call from the medical underwriters. They'll ask you similar questions to the application, so have that information on hand, such as your personal physician. But they'll also ask you questions about your medical history. This should not take longer than 20 minutes if you are in good health, but if you have had health issues this could go up to 30 minutes.
                </p>  
                <h5>3rd Part (Final)</h5>
                <p>
                    The last part is for a paramedical technician to come to your home or workplace to take a blood and urine sample. They'll also be measuring your height, weight, and blood pressure.
                </p>
                <h3>Here are some helpful hints for your medical exam to get the best results:</h3>
                <p>- Avoid any caffeine, sugar, or alcohol 24 hours prior to the exam</p>
                <p>- We recommend that you take the test first thing in the morning, or to not eat or exercise strenuously 6-8 hours before the test.</p>
                <p>- We do recommend drinking water at least 1 hour before your exam</p>
        </div>

          

        </div>
    <?php include_once('footer.php') ?>

