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
                <h1>When to Buy Term Life Insurance</h1>  
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
                        <h3 class="underline">When Should You Buy Term Life Insurance?</h3>
                    </div>
                    <p>
                    Many people think that term is the only type of insurance to buy. And for a lot of people, that would make sense. 
                    Generally speaking, term covers a lot more common necessities and reasons for why people look for life insurance.
                    </p>   
                    <p>
                    So what are these common necessities? Most of them are just temporary needs, and while some things feel like they would be long-term, 
                    a lot of the problems could be solved with term insurance.                        
                    </p>
            </div>
                <div class="row mod-row">
                    <div class="col-md-6 col-md-offset-3" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why Should You Consider It?</h3>
                        </div>
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Any debt obligations
                            </p>
                            
                        </div>
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Making sure that children are taken care of as well as college expenses
                            </p>
                        </div>   
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                             Spouse or loved one is supported while they get back on their feet
                            </p>
                        </div>             
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Temporary need of Burial expenses
                            </p>
                        </div> 
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Paying off any estate taxes
                            </p>
                        </div>  
                        <div class="pros">
                            <img src="/images/green-thumbs-up.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                            Thinking your health situation may change
                            </p>
                        </div>  
                        
                    </div>
                </div>
                <div class="row mod-row">
                    <div class="col-md-6 col-md-offset-3" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Why You Shouldn't Get It?</h3>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                               Getting your family rich
                            </p>
                        </div>
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                Inheritance for your loved ones
                            </p>
                        </div>   
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                Social Security or pension supplement/replacement
                            </p>
                        </div>   
                        <div class="cons">
                            <img src="/images/red-thumbs-down.png" style="width:10%;padding-right:10px;"></img>
                            <p>
                                As an investment savings platform or a savings plan
                            </p>
                        </div>                           
                    </div>  
                </div>
                <div class="row mod-row">
                    <div class="col-md-12" style="padding:0px;">
                        <div style="text-align:center;">
                            <h3 class="underline">Most Popular Things to Cover with Term Life Insurance</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="cons">
                            
                            <p>
                               Personal loans, student loans, and credit card debt
                            </p>
                        </div>
                        <div class="cons">
                            
                            <p>
                                Mortgages
                            </p>
                        </div>   
                        <div class="cons">
                            
                            <p>
                                Living expenses for 3-5 years
                            </p>
                        </div>   
                        <div class="cons">
                            
                            <p>
                                College tuition for public or private schools
                            </p>
                        </div> 
                        </div>
                        <div class="col-md-6">
                        <div class="cons">
                            
                            <p>
                                Final Expenses
                            </p>
                        </div>  
                        <div class="cons">
                            
                            <p>
                                Estate taxes
                            </p>
                        </div>  
                        <div class="cons">
                            
                            <p>
                                Buy-Sell Agreements (If you own a business)
                            </p>
                        </div>  
                        <div class="cons">
                            
                            <p>
                                Key-Person Insurance
                            </p>
                        </div>  
                        </div>
                    </div>                    
                </div>    
            </div>
        </div>
    <?php include_once('../footer.php') ?>

