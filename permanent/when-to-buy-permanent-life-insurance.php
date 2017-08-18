<?php include_once('../head.php') ?>   
<?php include_once('../privy.php') ?>  
<style type="text/css">
    body{
         color:#4d4d4d;
    }
    ol{
        padding-left: 35px;
    }
    #lifeguide-page .mod-row {
        margin:0 auto;
        margin-top:100px;
        width:70%;
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
        <?php include_once('../header.php') ?>
        <div class="container-fluid"  id="title-bg" style="text-align:center;">        
            <div class="title">
                <h1>When to Buy Permanent Life Insurance</h1>  
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
                        <h3 class="underline">What is Permanent Life Insurance?</h3>
                    </div>
                    <p>
                    Permanent life insurance is what most people think they're buying when buying life insurance. But contrary to what people think, most people don't need to buy it or they need to buy very little of it. There are only a few cases where buying large permanent policies is a viable solution.
                    </p>  
                    <p>
                    Permanent policies generally also have investment accounts that really should be a secondary reason to buy a policy. We will never recommend that you purchase a permanent policy just so that you can have an investment account.    
                    </p>
            </div>
                <div class="row mod-row">
                    <div class="col-md-6" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why Should You Consider It?</h3>
                        </div>
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Inheritance for your loved ones
                            </p>
                            
                        </div>
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Retirement living expenses (replacing retirement income)
                            </p>
                        </div>   
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                             Paying estate taxes
                            </p>
                        </div>             
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                             Final expenses
                            </p>
                        </div> 
                    </div>
                
                
                    <div class="col-md-6" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why You Shouldn't Get It?</h3>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                Debt obligations
                            </p>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                Current living expenses
                            </p>
                        </div>     
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                               College expenses for the kids
                            </p>
                        </div> 
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                               Getting your family rich
                            </p>
                        </div>                         
                    </div>  
                </div>    
            <div class="row riders mod-row">
                <div style="text-align:center;">
                    <h3 class="underline" style="text-align:center;">Level Term Insurance Riders</h3>
                </div>
                <p>These are addons that are optional, generally speaking they charge an extra fee on top of your premium for each rider.</p>
<div><h5>Acceleration of Death Benefit Rider:</h5>
    <p>
    The gist of this is that if you have 6, 12, or 24 months or less to live (each carrier has different time limits), the 
    insurance carrier will actually give you a portion of your policy to you in advance. Some carriers advance 50% while others can 
    go up to 95%. For most carriers, if there is any remaining cash value or death benefit left, it gets paid out as normal.
    However there are a few companies that will keep the balance. 
    </p>
    <p>
    Most carrier will actually offer this rider at no additional cost, but some will charge for it.
    </p> </div>   
<div>
    <h5>Accidental Death/Double Indemnity Rider</h5>
    <p>
    As the name suggests, you can increase your death benefit for a very small extra charge, but the rider will 
    only pay out in the case that you die from an accident and not from natural causes. 
    </p>
    <p>
    Be warned, insurance carriers will not pay the Accidental Death claim if a natural cause happened first. I.E. While driving,
    a person suffers a heart attack and passes away, the car then crashes into another vehicle. The cause of death was natural, 
    even though there was a resulting accident, the accidental claim would be denied. 
    </p>
</div>
<div><h5>Long-Term Care Rider</h5>
    <p>Note: You have to go through more stricter underwriting to get this rider attached. </p>
    <p>
    This rider allows you to take money from your life insurance benefit in the case you experience needing long-term care. 
    Different companies have different minimums and have different payout rates. I.E. Some can only be attached to policies of $100,000 or greater. 
    And some payout $500/month at minimum to $5,000 at maximum. 
    </p> </div> 
<div><h5>Chronic Care Rider</h5>
    <p>Note: Is not classified as a long-term care rider. </p>
    <p>
    This rider allows you to take money from your life insurance benefit in the case you have a long-term care event and it is chronic, meaning recurring 
    for a long time. This functions very similarly to Long-Term Care riders, but the key difference is that people can recover from Long-Term Care events 
    (I.E. broke a hip) but it takes awhile. Chronic Care has to be more severe and lasts longer and usually permanent (I.E. Alzheimer’s and Dementia). 
    </p> </div>                
            </div>
        </div>
    <?php include_once('../footer.php') ?>

