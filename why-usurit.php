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
                <h1>Why Usurit</h1>  
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
                        <h3 class="underline">Why Should You Choose Us?</h3>
                    </div>
                    <p>
                    
                    </p>   
                    <h3>Insurance Powered through Technology</h3>
                    <p>
                    It's no secret that the insurance industry is behind on times. The financial sector is just beginning to integrate itself fully into technology, but insurance has been a time tested old being. And for that reason, it's slow to move and slow to react to changes. Our goal is to use technology to help educate people and to finish the process completely online.                        
                    </p>
                    <h3>Usurit is Insurance, Streamlined</h3>
                    <p>
                    Talking to an agent is a great way to learn, but it's also talking to a salesman. Learn what you need and how much you need yourself. We'll give you the choices, tools, and education to make a hard decision into an easy one. No one wants to pay more for what they need, and no one wants to buy less of what they need.    
                    </p>   
                    <h3>Access Industry Secrets</h3>
                    <p>
                       As former insurance agents, we know the reasons why companies advocate for one product over the next, and it usually isn't pretty. Get unbiased education on what's right for you and make a customized plan that's meant just for you!
                    </p>    
                    <h3>Receive Trustworthy Advice</h3>
                    <p>
                     Many agents get paid extra to recommend certain insurance products or even insurance companies. If it's not in your best interests, you won't see it. We don't get paid to recommend any products or services, and there are no hidden or extra fees when you choose us. We give you the tools to decide from a multitude of options that are all fit for you.
                    </p>  
                    <h3>Get the Insurance You Need to Run a Household</h3>
                    <p>
                     What does that mean to you? For us, it means that we're dedicated in giving you all of your insurance solutions in one place and making sure that you feel confident in your future. We’re building a smarter way to protect yourself and your loved ones.
                    </p>  
            </div>
        </div>
    </div>
    <?php include_once('footer.php') ?>

