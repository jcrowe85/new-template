<?php include_once('application-submit.php'); ?>
<script>
$(document).ready(function(){
    $('.getHelp').click(function() {
        <?php include_once('chat.php'); ?>
    });        
});
</script>
<style>
.sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 18em;
    padding: 2.25em;
    color: #000;
    border-right: 1px solid lightgray;  
}    
#userinfo-page .main{
    margin-left: 18em;
    background-color: white;
    background-image: none;
    border: 0px;
}
#userinfo-page .header{
    background-color: white;
    padding: 0px;
    margin: 0 auto;
    border-bottom: 1px solid #d2d1d1;
    position: relative;
    padding: 10px 0;
    margin-left: 18em;
    height: 3em;

}
#userinfo-page #process-logo{
    width:20%;
}
#userinfo-page  .main{
padding: 40px 40px 0px 40px;
}
</style>
<?php include_once('head.php') ?>
<body id="userinfo-page">
    <div class="header fluid">
        <div class="container">
            <header>
                <button class="getHelp">Get Help</button>
            </header>
        </div>
    </div>
    <div class="main container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                  <h3>First things first...
                  <!--<small style="font-size:1.3rem;"><br>No phone number or email necessary</small>-->
                  </h3>
            <?php include_once('userdetails-form.php'); ?>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurance</h4>
            <br><br>
            <h3>Welcome to the application Process.</h3>
            <br>
            <p>
            It's time for us to get to know you. We need your full name, phone number to contact you if needed, an email to send follow up notifications and a password. 
            <br><br>
            Don't worry, everything is taken over a secure connection and we will not share your information without your approval.                
            </p>
        
    </div>
