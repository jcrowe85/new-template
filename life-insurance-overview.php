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
        margin-bottom: 50px;
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
                <h1>A Life Insurance Overview</h1>  
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
                        <h3 class="underline">What Is Life Insurance?</h3>
                    </div>
                    <p>
                    To put it simply, it's an insurance policy that pays out a lump sum of cash, tax-free, to the named beneficiary upon the policyholder's death.
                    </p>   
                    <h3>Two General Types</h3>
                    <p>
                    There are generally two types of insurance policies. Term life insurance and Permanent Life insurance. We'll break down the easier one first.                   
                    </p>
                    <h3>Term Life Insurance</h3>
                    <p>
                    The most commonly bought life insurance type. It's the cheapest out there because it expires. It's not meant to gamble on when you expect to die, it's to protect your family in the unlikely case that you pass away unexpectedly. There are 4 types of term policies. Level-Term, Return of Premium, Renewable Term, and Decreasing-Term. Only two of these policies are really rare because of the lack of benefit they provide.
                    </p>   
                    <h3>Level-Term</h3>
                    <p>
                       It's the simplest to understand. It's usually in bands of 10, 15, 20, 25, and 30 years, after the term period is done, it expires. The policy also has level premiums throughout the term period, simply meaning that the prices do not change at all for the entire duration of the policy. Out of all the term life insurance policies, this is the most popular.             
                    </p>    
                    <h3>Return of Premium</h3>
                    <p>
                      As the name implies, it functions similarly to level-term policies. But the added benefit is that you actually receive ALL of the premiums that you paid in when the policy expires, and it's given back all at once in one big check. Premiums do not change at all during the entire duration of the policy.              
                    </p>  
                    <h3>Renewable Term</h3>
                    <p>
                     It works as a 5 year term policy (or whatever the renewable term length is, usually 5), and at the end of the term, the policy renews itself, and it can continue to renew itself to a certain maximum age (usually around 80). What's different about this policy is that every 5 years, the premiums change. So at first, the cost to buy this policy when someone is young will be really cheap, but as they get older, it becomes astronomically higher. Generally speaking, it's cheaper in the long run to buy a level-term policy if you plan to hold it for more than 20 years.               
                    </p>  
                    <h3>Decreasing Level Term</h3>
                    <p>
                     A very rare term policy and almost all carriers no longer sell this product. It acts similarly to the level-term policy in that the premiums can never change. The biggest thing is that as every year passes, the death benefit decreases and they're structured that by the end of the term length, the insurance policy would have no more value. The reason why they are so rare is because level term has become so competitive, that for a few dollars more every year your beneficiaries would be able to have a much larger benefit.               
                    </p>  
                    <h3>Permanent Life Insurance</h3>
                    <p>
                     It's what most people think about when they think life insurance. It's guaranteed to payout as long as you pay the premiums, the downside is that these policies can have you pay for a long period of time or even until you pass away.
                    </p>  
                    <h3>Whole Life</h3>
                    <p>
                    The oldest type of life insurance policy, it's probably what your parents had and their parents had as well. It is the most expensive life insurance policy in the market. Simply because it's not only a life insurance policy, but a forced savings account as well. Whole life policies give out dividends, and these dividends increase as you put in more money into the policy. Generally speaking, these dividends can range anywhere between 1-4%. And the selling point is that you can actually take out these dividends in the future, you can use them to pay off future premiums, in effect making the policy "paid up", you can withdraw those dividends for your own use, or you can take a loan out against the cash value of those dividends. However, these whole life policies have huge stipulations in terms of getting the dividend, and in some cases, it could be 25-30 years before you have access to the cash.                
                    </p>  
                    <h3>Universal Life</h3>
                    <p>
                      Was created in a response to how expensive Whole Life policies were. It's the permanent life insurance policy without any bells or whistles. That means it's the cheapest type of permanent policy in the market.              
                    </p>  
                    <h3>Variable Life</h3>
                    <p>
                     Was an effort to try to further reduce the monthly cost of insurance as well as playing the stock market. These policies are largely extinct because of the uncertainty these policies created. Insurance is supposed to be stable, these policies were the opposite of stability. The consumer would pay a portion of the premium and the other portion would come from the returns of the stock market. Then sometime in the future, the insurance carrier would add up how much money the consumer put in and how well the stock market did, and if that was less than a certain amount. They would charge you the remaining balance and add it ON TOP of the monthly premium. However, if the market returns did well, then the premiums could actually be reduced, because of the performance of the market.               
                    </p>  
                    <h3>Variable Universal Life</h3>
                    <p>
                      This is what was supposed to replace variable life policies. Instead of forcing people an amount to pay for the forced savings portion (dividends), they allowed for people to put in as much money as they wanted. As long as the base premium was paid off (the universal life part), they could dump in as much or as little as they wanted. And instead of receiving a small interest rate, that money would be invested into the stock market.              
                    </p>                      
            </div>
        </div>
    </div>
    <?php include_once('footer.php') ?>

