<?php include_once('../head.php') ?>   
<?php include_once('../privy.php') ?>  
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
        <?php include_once('../header.php') ?>
        <div class="container-fluid"  id="title-bg" style="text-align:center;">        
            <div class="title">
                <h1>Level Term Life Insurance</h1>  
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
                        <h3 class="underline">What is Level Term Life Insurance?</h3>
                    </div>
                    <p>
                        <span style="font-family:'AileronSemibold'">Level term</span> is a type of <a href="/term/term-life-insurance-guide.php">term life insurance</a> policy that expires after a certain period of time. It's one of the cheapest life insurance policies on the market.
                        The word <i>Level</i>, refers to policy premiums as they do not change over the entireity of the policy, and is the reason why many people prefer it to <a href="">Annual Reweable Term</a>, whose
                        premiums increase each year. Level term offers protection for a set period of time, for example 10, 15, or 30 years - and just like all term policies - 
                        the beneficiaries are paid claim as long as the insured dies within that period. To find out what happens if the insured outlives the term, <a href="/">click here.</a>
                    </p>       
            </div>
                <div class="row mod-row">
                    <div class="col-md-8 col-md-offset-2" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why Should You Consider It?</h3>
                        </div>
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            You need to insure a temporary need or something that will expire after a period of time (could be as short as car payments, to as long as a 30 year mortgage)
                            </p>
                            
                        </div>
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            You're on a budget and just need to get insured 
                            </p>
                        </div>   
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                             You believe that your health could change for the worse in the future, making you uninsurable
                            </p>
                        </div>             
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            You are the sole income provider of your loved ones 
                            </p>
                        </div>                          
                    </div>
                </div>
                <div class="row mod-row">
                    <div class="col-md-8 col-md-offset-2" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why You Shouldn't Get It?</h3>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                You want to leave an inheritance in the case you passed away (that's <a href="/">permanent life</a> not term)
                            </p>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                As a forced savings plan or a way of growing cash
                            </p>
                        </div>            
                    </div>  
                </div>    
            <div class="row mod-row hidden-xs hidden-sm">
                 <div style="text-align:center;">
                     <h3 class="underline">How Much Does It Cost?</h3>
                 </div>
                 <div class="panel panel-default">
                 <table class="table table-bordered" style="text-align:center;">
                     <thead>
                        <tr style="color:white; background:#73a5fb;">
                            <th style="text-align:center; padding:15px; font-size:18px;">Coverage Length</th>
                            <th style="text-align:center; padding:15px; font-size:18px;">ROP</th>
                            <th style="text-align:center; padding:15px; font-size:18px;">Level</th>
                            <th style="text-align:center; padding:15px; font-size:18px;">Universal Life</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">15 years</td>
                            <td style="padding:15px;">$85/mo</td>
                            <td style="padding:15px; background:#e6e6e6;">$11/mo</td>
                            <td style="padding:15px;">-</td>
                        </tr> 
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">20 years</td>
                            <td style="padding:15px;">$50/mo</td>
                            <td style="padding:15px; background:#e6e6e6;">$14/mo</td>
                            <td style="padding:15px;">-</td>
                        </tr>    
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">30 years</td>
                            <td style="padding:15px;">$40/mo</td>
                            <td style="padding:15px; background:#e6e6e6;">$19/mo</td>
                            <td style="padding:15px;">-</td>
                        </tr>      
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">Forever</td>
                            <td style="padding:15px; ">-</td>
                            <td style="padding:15px; background:#e6e6e6;">-</td>
                            <td style="padding:15px;">$90/mo</td>
                        </tr>       
                        <tr>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href=""></a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href="">Learn More</a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline; background:#e6e6e6;"><a href="">Learn More</a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href="">Learn More</a></td>
                        </tr>                 
                     </tbody>
                 </table>
                 </div>
                 <caption>*Average premium (for a healthy 25 year old male)</caption>
            </div>
            <div class="row mod-row hidden-md hidden-lg">
                 <div style="text-align:center;">
                     <h3 class="underline">How Much Does It Cost?</h3>
                 </div>
                 <div class="panel panel-default">
                 <table class="table table-bordered" style="text-align:center;">
                     <thead>
                        <tr style="color:white; background:#73a5fb;">
                            <th style="text-align:center; padding:15px; font-size:18px;">Coverage Length</th>
                            <th style="text-align:center; padding:15px; font-size:18px;">Level</th>

                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">15 years</td>
                            <td style="padding:15px; background:#e6e6e6;">$11/mo</td>
                        </tr> 
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">20 years</td>
                            <td style="padding:15px; background:#e6e6e6;">$14/mo</td>

                        </tr>    
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">30 years</td>
                            <td style="padding:15px; background:#e6e6e6;">$19/mo</td>
  
                        </tr>      
                        <tr>

                        </tr>       
                        <tr>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href=""></a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline; background:#e6e6e6;"><a href="">Learn More</a></td>
                        </tr>                 
                     </tbody>
                 </table>
                 </div>
                 <caption>*Average premium (for a healthy 25 year old male)</caption>
            </div>            
            <div class="row riders mod-row">
                <div style="text-align:center;">
                    <h3 class="underline" style="text-align:center;">Return of Premium Riders</h3>
                </div>
                <p>These are addons that are optional, generally speaking they charge an extra fee on top of your premium for each rider.</p>
                <div>
                    <h5>Acceleration of Death Benefit Rider:</h5>
                    <p>
                    The gist of this is that if you have 6, 12, or 24 months or less to live (each carrier has different time limits), the 
                    insurance carrier will actually give you a portion of your policy to you in advance. Some carriers advance 50% while others can 
                    go up to 95%. For most carriers, if there is any remaining cash value or death benefit left, it gets paid out as normal.
                    However there are a few companies that will keep the balance. 
                    </p>
                    <p>
                    Most carrier will actually offer this rider at no additional cost, but some will charge for it.
                    </p>  
                </div>  
                <div>
                    <h5>Waiver of Premium Rider (Disability):</h5>
                    <p>
                    Waiver of premium simply means that in the case you become disabled or seriously ill and cannot work 
                    for an extended period of time (usually 6 months), the insurance carrier will waive further premium payments until 
                    you have recovered, in which case premiums will once again resume.
                    </p>
                </div>
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
            </div>
        </div>
    <?php include_once('../footer.php') ?>

