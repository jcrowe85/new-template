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
        margin-bottom:50px;
        position: relative;
        font-weight: 600;
        
        display: inline-block;
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
    .riders p{
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
</style>
<script>
    $(document).ready(function(){
      $(".logo img").attr("src", "/images/logo-red.png");       
    });
</script>
    <body id="lifeguide-page">
        <?php include_once('../header.php') ?>
        <div class="container-fluid"  id="title-bg">        
            <div class="row title">
                <h1 style="">Return of Premium (ROP)</h1>   
                <form action="/life.php">
                    <button class="btn btn-primary select btn-lg" style="padding: 10px 50px; background:#73a5fb; border:none; box-shadow: 0px 5px 1px rgba(0,0,0,0.5); margin-bottom:10px;">GET QUOTES</button>   
                </form>
                <div><a href="tel:+9494384333" style="text-decoration:underline; color:white; font-family:'AileronThin'; font-size:12px;"><i class="fa fa-phone" aria-hidden="true"></i> Speak with an agent</a></div>
            </div>
        </div>
        <div class="container">
            <div class="row mod-row">
                    <div style="text-align:center;">
                        <h3 class="underline">What is Return of Premium Term Life Insurance?</h3>
                    </div>
                    <p>
                        Return of premium is a type of term life insurance but with an added benefit of getting all 
                        the money you put into it. The benefit will increase your premium by 3 to 5 times the cost of
                        a traditional term insurance policy. The policy will not grow in value, so if you're looking to 
                        earn some monies on your premiums, return of premium wouldn't be a good fit. However, if you're
                        looking for a forced savings plans, or can't accept not seeing their premium dollars back, 
                        this my be right for you. 
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
                                You don't mind paying a little more for a term policy 
                                because you can actually get all of the money you put into the policy once it expires.
                            </p>
                        </div>
                        <div class="cons">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                You want a forced savings account that pays out at the end of the term.
                            </p>
                        </div>            
                    </div>
                </div>
                <div class="row mod-row">
                    <div class="col-md-8 col-md-offset-2" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why You Shouldn't Get It?</h3>
                        </div>
                        <div class="pros">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                Time value of money, since it costs more could buy a normal term and invest the rest if you were a disciplined investor.
                            </p>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                You just want to have a bare bones life insurance policy.
                            </p>
                        </div>            
                    </div>  
                </div>    
            <div class="row mod-row">
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
                            <td style="padding:15px;">$11/mo</td>
                            <td style="padding:15px;">-</td>
                        </tr> 
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">20 years</td>
                            <td style="padding:15px;">$50/mo</td>
                            <td style="padding:15px;">$14/mo</td>
                            <td style="padding:15px;">-</td>
                        </tr>    
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">30 years</td>
                            <td style="padding:15px;">$40/mo</td>
                            <td style="padding:15px;">$19/mo</td>
                            <td style="padding:15px;">-</td>
                        </tr>      
                        <tr>
                            <th scope="row" style="text-align:center; padding:15px;">Forever</td>
                            <td style="padding:15px;">-</td>
                            <td style="padding:15px;">-</td>
                            <td style="padding:15px;">$90/mo</td>
                        </tr>       
                        <tr>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href="">Learn More</a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href="">Learn More</a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href="">Learn More</a></td>
                            <td style="padding:15px; font-size:12px; text-decoration:underline;"><a href="">Learn More</a></td>
                        </tr>                 
                     </tbody>
                 </table>
                 </div>
                 <caption>*Average premium (for a healthy 25 year old male)</caption>
            </div>
            <div class="row riders mod-row" style="width:70%;">
                <div style="text-align:center;">
                    <h3 class="underline" style="text-align:center;">Return of Premium Riders</h3>
                </div>
                <p>These are addons that are optional, generally speaking they charge an extra fee on top of your premium for each rider.</p>
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
                <h5>Waiver of Premium Rider (Disability):</h5>
                <p>
                Waiver of premium simply means that in the case you become disabled or seriously ill and cannot work 
                for an extended period of time (usually 6 months), the insurance carrier will waive further premium payments until 
                you have recovered, in which case premiums will once again resume.
                </p>
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
    <?php include_once('../footer.php') ?>

